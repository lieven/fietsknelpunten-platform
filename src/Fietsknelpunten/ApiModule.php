<?php

namespace Fietsknelpunten;

use Base\Config;
use Base\Database;


class ApiModule extends \Base\ApiModule
{
	private static $parameters = array
	(
		'tags' => array(),
		'issues' => array('minLat', 'maxLat', 'minLon', 'maxLon')
	);
	
	function __construct()
	{
		parent::__construct('api');
	}
	
	protected function getActionParameters($inAction)
	{
		if (isset(self::$parameters[$inAction]))
		{
			return self::$parameters[$inAction];
		}
		else
		{
			return NULL;
		}
	}
	
	protected function checkPermissions($inAction)
	{
		$appID = \Base\GetHeader('X-FIETSKNELPUNTEN-APPID');
		if ($appID === NULL)
		{
			return false;
		}
		
		$apps = Config::Get('fietsknelpunten', 'apps');
		if (!isset($apps[$appID]))
		{
			return false;
		}
		
		// TODO: actual permission checks
		
		return true;
	}
	
	
	function tagsAction()
	{
		$results = Tags::Get();
		$this->outputJson($results);
	}
	
	function issuesAction()
	{
		$minLat = filter_input(INPUT_GET, 'minLat', FILTER_VALIDATE_FLOAT);
		$minLon = filter_input(INPUT_GET, 'minLon', FILTER_VALIDATE_FLOAT);
		$maxLat = filter_input(INPUT_GET, 'maxLat', FILTER_VALIDATE_FLOAT);
		$maxLon = filter_input(INPUT_GET, 'maxLon', FILTER_VALIDATE_FLOAT);
		$results = Issues::GetInBoundingBox($minLat, $minLon, $maxLat, $maxLon);
		$this->outputJson($results);
	}
}
