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
				
		$results = array();
		
		$query = sprintf('SELECT * FROM `%s` ORDER BY `%s`;', TAG_GROUPS_TABLE, TAG_GROUPS_COLUMN_ID);
		$tagGroups = $db->executeQuery($query)->getResults();
		
		if (is_array($tagGroups))
		{
			foreach ($tagGroups as $tagGroup)
			{
				$query = sprintf('SELECT `%s`, `%s`, `%s` FROM `%s` WHERE `%s`=:group ORDER BY `%s`;',
					TAGS_COLUMN_ID, TAGS_COLUMN_NAME, TAGS_COLUMN_INFO,
					TAGS_TABLE, TAGS_COLUMN_GROUP, TAGS_COLUMN_ID);
				
				$tags = $db->executeQuery($query, array('group' => $tagGroup[TAG_GROUPS_COLUMN_ID]))->getResults();
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
