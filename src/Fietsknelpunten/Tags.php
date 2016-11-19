<?php

namespace Fietsknelpunten;

use Base\Database;


const TAGS_TABLE = 'Tags';
const TAGS_COLUMN_ID = 'id';
const TAGS_COLUMN_NAME = 'name';
const TAGS_COLUMN_INFO = 'info';
const TAGS_COLUMN_GROUP = 'group';


const TAG_GROUPS_TABLE = 'TagGroups';
const TAG_GROUPS_COLUMN_ID = 'id';
const TAG_GROUPS_COLUMN_NAME = 'name';


class Tags
{
	public static function CreateTables(Database & $db)
	{
		$tagsTable = TAGS_TABLE;
		$tagsColumnID = TAGS_COLUMN_ID;
		$tagsColumnName = TAGS_COLUMN_NAME;
		$tagsColumnInfo = TAGS_COLUMN_INFO;
		$tagsColumnGroup = TAGS_COLUMN_GROUP;
		
		$tagGroupsTable = TAG_GROUPS_TABLE;
		$tagGroupsColumnID = TAG_GROUPS_COLUMN_ID;
		$tagGroupsColumnName = TAG_GROUPS_COLUMN_NAME;
		
		$sql = include(__DIR__ .'/Tags.sql.php');
		
		return $db->executeQuery($sql);
	}
	
	public static function Get()
	{
		$db =& Database::Get();
		
		self::CreateTables($db);
		
		$results = array();
		
		$tagGroups = $db->executeQuery('SELECT * FROM TagGroups ORDER BY `id`;')->getResults();
		if (is_array($tagGroups))
		{
			foreach ($tagGroups as $tagGroup)
			{
				$tags = $db->executeQuery('SELECT `id`, `name`, `info` FROM Tags WHERE `group`=:group ORDER BY `id`;', array('group' => $tagGroup['id']))->getResults();
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
