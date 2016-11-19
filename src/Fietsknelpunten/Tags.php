<?php

namespace Fietsknelpunten;

use Base\Database;


class Tags
{
	public static function CreateTables(Database & $db)
	{
		$sql = include(__DIR__ .'/Tags.sql.php');
		
		return $db->executeQuery($sql);
	}
	
	public static function Get()
	{
		$db =& Database::Get();
				
		$results = array();
		
		$query = 'SELECT `id`, `name` FROM `TagGroups` ORDER BY `id`;';
		$tagGroups = $db->executeQuery($query)->getResults();
		
		if (is_array($tagGroups))
		{
			foreach ($tagGroups as $tagGroup)
			{
				$query = 'SELECT `id`, `name`, `info` FROM `Tags` WHERE `group`=:group ORDER BY `id`;';
				
				$tags = $db->executeQuery($query, array('group' => $tagGroup['id']))->getResults();
				if (!is_array($tags))
				{
					$tags = array();
				}
				$tagGroup['tags'] = $tags;
				
				$results[] = $tagGroup;
			}
		}
		
		return $results;
	}
}
