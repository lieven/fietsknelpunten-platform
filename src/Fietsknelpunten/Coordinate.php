<?php

namespace Fietsknelpunten;


class Coordinate
{
	const MAX_LAT = 90.0;
	const MAX_LON = 180.0;
	
	private $latitude = 0.0;
	private $longitude = 0.0;
	
	function __construct($inLatitude = 0.0, $inLongitude = 0.0)
	{
		$this->setLatitude($inLatitude);
		$this->setLongitude($inLongitude);
	}
	
	function setLatitude($inLatitude)
	{
		$this->latitude = floatval($inLatitude);
	}
	
	function setLongitude($inLongitude)
	{
		$this->longitude = floatVal($inLongitude);
	}
	
	function getLatitude()
	{
		return $this->latitude;
	}
	
	function getLongitude()
	{
		return $this->longitude;
	}
	
	function isValid()
	{
		return $this->latitude <= self::MAX_LAT
			&& $this->latitude >= -self::MAX_LAT
			&& $this->longitude <= self::MAX_LON
			&& $this->longitude >= -self::MAX_LON;
	}
	
	function isNorthWestOf(Coordinate $inCoordinate)
	{
		return $this->latitude <= $inCoordinate->latitude
			&& $this->longitude <= $inCoordinate->longitude;	
	}
}