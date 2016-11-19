<?php

namespace Fietsknelpunten;

use Base\Config;
use Base\Database;
use Base\ApiException;


class ApiModule extends \Base\ApiModule
{
	private static $parameters = array
	(
		'bbox' => array(),
		'tags' => array(),
		'issues' => array('minLat', 'maxLat', 'minLon', 'maxLon'),
		'addIssue' => array(),
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
	
	
	function bboxAction()
	{
		$this->outputJson(Config::Get('fietsknelpunten', 'bbox'));
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
	
	function addIssueAction()
	{
		$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
		$latitude = filter_input(INPUT_POST, 'latitude', FILTER_VALIDATE_FLOAT);
		$longitude = filter_input(INPUT_POST, 'longitude', FILTER_VALIDATE_FLOAT);
		$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
		
		if (!$title || !$latitude || !$longitude)
		{
			throw new ApiException(ApiException::PARAMETER_REQUIRED, 'title, latitude and longitude are required');
		}
		
		$bbox = Config::Get('fietsknelpunten', 'bbox');
		if ($latitude < $bbox['minLat'] || $latitude > $bbox['maxLat'] || $longitude < $bbox['minLon'] || $longitude > $bbox['maxLon'])
		{
			throw new ApiException(ApiException::INVALID_PARAMETER, 'coordinates are out of bounds');
		}
		
		if (!$description)
		{
			$description = NULL;
		}
		
		$inserted = Issues::Add($title, $latitude, $longitude, $description);
		
		$this->outputJson(array('success' => boolval($inserted)));
	}
}
