<?php

namespace Fietsknelpunten;

use Exception;
use Base\Config;


// Bounding boxes spanning the 180th meridian are not supported (yet?)
// Neither are bounding boxes that contain one of the poles

class BoundingBox
{
	private $northWest;
	private $southEast;
	
	static function ConfigBounds()
	{
		$result = Config::Get('fietsknelpunten', 'bbox');
		if (!is_a($result, BoundingBox::class))
		{
			return NULL;
		}
		return $result;
	}
	
	function __construct($minLat, $minLon, $maxLat, $maxLon)
	{
		$this->northWest = new Coordinate($minLat, $minLon);
		$this->southEast = new Coordinate($maxLat, $maxLon);
	}
	
	function isValid()
	{
		return $this->northWest->isValid()
			&& $this->southEast->isValid()
			&& $this->northWest->isNorthWestOf($this->southEast);
	}
	
	function isEmpty()
	{
		$latDelta = $this->southEast->getLatitude() - $this->northWest->getLatitude();
		$lonDelta = $this->southEast->getLongitude() - $this->northWest->getLongitude();
		return $latDelta <= 0.0 || $lonDelta <= 0.0;
	}
	
	function containsCoordinate(Coordinate $inCoordinate)
	{
		return $this->northWest->isNorthWestOf($inCoordinate)
			&& $inCoordinate->isNorthWestOf($this->southEast);
	}
	
	function containsBoundingBox(BoundingBox $inBoundingBox)
	{
		return $this->containsCoordinate($inBoundingBox->northWest)
			&& $this->containsCoordinate($inBoundingBox->southEast);
	}
	
	function intersection(BoundingBox & $inBoundingBox)
	{
		$result = new BoundingBox
		(
			max($this->northWest->getLatitude(), $inBoundingBox->northWest->getLatitude()),
			max($this->northWest->getLongitude(), $inBoundingBox->northWest->getLongitude()),
			min($this->southEast->getLatitude(), $inBoundingBox->southEast->getLatitude()),
			min($this->southEast->getLongitude(), $inBoundingBox->southEast->getLongitude())
		);
		if (!$result->isValid())
		{
			$result = NULL;
		}
		return $result;
	}
	
	function toArray()
	{
		$result = array();
		if (!$this->writeToArray($result))
		{
			$result = NULL;
		}
		return $result;
	}
	
	function sqlClause(array & $ioArgs, $inLatitudeColumn = 'latitude', $inLongitudeColumn = 'longitude')
	{
		if (!$this->writeToArray($ioARgs))
		{
			throw new Exception('Invalid bounding box');
		}
				
		return sprintf('`%s` >= :minLat AND `%s` <= :maxLat AND `%s` >= :minLon AND `%s` <= :maxLon',
			$inLatitudeColumn, $inLatitudeColumn, $inLongitude);
	}
	
	
	private function writeToArray(array & $ioArray)
	{
		if (!$this->isValid())
		{
			return false;
		}
		$ioArray['minLat'] = $this->northWest->getLatitude();
		$ioArray['minLon'] = $this->northWest->getLongitude();
		$ioArray['maxLat'] = $this->southEast->getLatitude();
		$ioArray['maxLon'] = $this->southEast->getLongitude();
		
		return true;
	}
}
