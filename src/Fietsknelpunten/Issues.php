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
	
	public static function GetInBoundingBox($minLat, $minLon, $maxLat, $maxLon, $limit = NULL)
	{
		$db =& Database::Get();
		
		$limit = intval($limit);
		if ($limit <= 0)
		{
			$limit = 1000;
		}
		
		$query = 'SELECT * FROM Issues WHERE `latitude` >= :minLat AND `latitude` <= :maxLat AND `longitude` >= :minLon AND `longitude` <= :maxLon ORDER BY `date_created` DESC LIMIT ' . $limit;
		$args = array('minLat' => $minLat, 'minLon' => $minLon, 'maxLat' => $maxLat, 'maxLon' => $maxLon);
		
		$resultSet = $db->executeQuery($query, $args);
		
		return $resultSet->getResults(NULL, $limit);
	}
	
}