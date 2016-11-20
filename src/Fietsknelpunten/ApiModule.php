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
		$this->outputJson(BoundingBox::ConfigBounds()->toArray());
	}
	
	function tagsAction()
	{
		$results = Tags::Get();
		$this->outputJson($results);
	}
	
	function issuesAction()
	{
		$boundingBox = new BoundingBox
		(
			filter_input(INPUT_GET, 'minLat', FILTER_VALIDATE_FLOAT),
			filter_input(INPUT_GET, 'minLon', FILTER_VALIDATE_FLOAT),
			filter_input(INPUT_GET, 'maxLat', FILTER_VALIDATE_FLOAT),
			filter_input(INPUT_GET, 'maxLon', FILTER_VALIDATE_FLOAT)
		);
		
		$maxBounds = BoundingBox::ConfigBounds();
		if ($boundingBox->isEmpty() || !$maxBounds->containsBoundingBox($boundingBox))
		{
			throw new ApiException(ApiException::INVALID_PARAMETER, 'Invalid bounding box');
		}
		
		$results = Issues::InBoundingBox($minLat, $minLon, $maxLat, $maxLon);
		$this->outputJson($results);
	}
	
	function addIssueAction()
	{
		$latitude = filter_input(INPUT_POST, 'latitude', FILTER_VALIDATE_FLOAT);
		$longitude = filter_input(INPUT_POST, 'longitude', FILTER_VALIDATE_FLOAT);
		$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
		$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
		
		if (!is_string($title))
		{
			throw new ApiException(ApiException::PARAMETER_REQUIRED, 'title is required');
		}
		
		$title = trim($title);
		if (strlen($title) == 0)
		{
			throw new ApiException(ApiException::INVALID_PARAMETER, 'empty title');
		}
		
		if ($latitude === NULL || $longitude === NULL)
		{
			throw new ApiException(ApiException::PARAMETER_REQUIRED, 'latitude and longitude are required');
		}
		
		if ($latitude === false || $longitude === false)
		{
			throw new ApiException(ApiException::INVALID_PARAMETER, 'valid coordinates are required');
		}
		
		$coordinate = new Coordinate($latitude, $longitude);
		
		$maxBounds = BoundingBox::ConfigBounds();
		if (!$maxBounds->containsCoordinate($coordinate))
		{
			throw new ApiException(ApiException::INVALID_PARAMETER, 'Coordinate out of bounds');
		}
		
		$inserted = Issues::Add($coordinate, $title, $description);
		
		$this->outputJson(array('success' => boolval($inserted)));
	}
}
