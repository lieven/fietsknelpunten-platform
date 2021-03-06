<?php

return <<<"SQL_END"

CREATE TABLE IF NOT EXISTS `TagGroups`
(
	`id`             INT UNSIGNED       NOT NULL AUTO_INCREMENT,
	`name`           VARCHAR(255)       NOT NULL DEFAULT '',
	
	PRIMARY KEY (`id`),
	UNIQUE KEY (`name`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `Tags`
(
	`id`             INT UNSIGNED       NOT NULL AUTO_INCREMENT,
	`name`           VARCHAR(255)       NOT NULL DEFAULT '',
	`info`           TEXT,
	`tag_group_id`   INT UNSIGNED       NOT NULL,
	
	PRIMARY KEY (`id`),
	UNIQUE KEY (`name`),
	
	FOREIGN KEY (`tag_group_id`) REFERENCES `TagGroups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

SQL_END;
