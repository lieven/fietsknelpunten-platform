<?php

return <<<"SQL_END"

CREATE TABLE IF NOT EXISTS `Issues`
(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	
	`title` VARCHAR(255) NOT NULL DEFAULT '',
	`description` TEXT NULL,
	
	`latitude` DOUBLE NOT NULL,
	`longitude` DOUBLE NOT NULL,
	
	`status` ENUM('open', 'closed') NOT NULL DEFAULT 'open',
	
	`date_created` DATETIME NOT NULL DEFAULT NOW(),
	`date_updated` DATETIME NULL,
	
	PRIMARY KEY (`id`),
	KEY (`latitude`),
	KEY (`longitude`),
	KEY (`date_created`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

SQL_END;
