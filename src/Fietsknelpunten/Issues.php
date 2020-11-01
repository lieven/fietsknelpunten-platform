<?php

namespace Fietsknelpunten;

use Base\Database;


class Issues
{
	public static function CreateTables(Database & $db)
	{
		$sql = include(__DIR__ .'/Issues.sql.php');
		
		return $db->executeUpdate($sql);
	}
	
	public static function InBoundingBox($inBoundingBox, $inLimit = NULL)
	{
		$db =& Database::Get();
		
		$limit = intval($inLimit);
		if ($limit <= 0)
		{
			$limit = 1000;
		}
		
		$args = array();
		$query = sprintf('SELECT * FROM `Issues` WHERE %s ORDER BY `date_created` DESC LIMIT ' . $limit, $inBoundingBox->sqlClause($args));
		
		$resultSet = $db->executeQuery($query, $args);
		
		return $resultSet->getResults(NULL, $limit);
	}
	
	public static function Add(Coordinate $inCoordinate, $inTitle, $inDescription = NULL, $inCountryCode = NULL, $inPostalCode = NULL)
	{
		$db =& Database::Get();
		
		$statement = 'INSERT INTO `Issues` (`title`, `latitude`, `longitude`, `description`, `country_code`, `postal_code`) VALUES(:title, :latitude, :longitude, :description, :country_code, :postal_code);';
		$args = array
		(
			'title' => $inTitle,
			'latitude' => $inCoordinate->getLatitude(),
			'longitude' => $inCoordinate->getLongitude(),
			'description' => $inDescription,
			'country_code' => $inCountryCode,
			'postal_code' => $inPostalCode
		);
		
		$affectedRows = $db->executeUpdate($statement, $args);
		return ($affectedRows === 1);
	}
	
}