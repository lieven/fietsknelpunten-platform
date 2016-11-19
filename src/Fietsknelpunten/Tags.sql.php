<?php

return <<<"SQL_END"

CREATE TABLE IF NOT EXISTS `$tagGroupsTable`
(
	`$tagGroupsColumnID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`$tagGroupsColumnName` VARCHAR(255) NOT NULL DEFAULT '',
	PRIMARY KEY (`$tagGroupsColumnID`),
	UNIQUE KEY `$tagGroupsColumnName` (`$tagGroupsColumnName`)
)
DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `$tagsTable`
(
	`$tagsColumnID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`$tagsColumnName` VARCHAR(255) NOT NULL DEFAULT '',
	`$tagsColumnInfo` TEXT,
	`$tagsColumnGroup` INT(11) UNSIGNED NOT NULL,
	PRIMARY KEY (`$tagsColumnID`),
	UNIQUE KEY `$tagsColumnName` (`$tagsColumnName`),
	KEY `$tagsColumnGroup` (`$tagsColumnGroup`),
	CONSTRAINT `$tagsColumnGroup` FOREIGN KEY (`$tagsColumnGroup`) REFERENCES `$tagGroupsTable` (`$tagGroupsColumnID`) ON DELETE CASCADE ON UPDATE CASCADE
)
DEFAULT CHARSET=utf8;

SQL_END;
