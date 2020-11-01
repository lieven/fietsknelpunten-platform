<?php

return <<<"SQL_END"

CREATE TABLE IF NOT EXISTS `Issues`
(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	
	`title` VARCHAR(255) NOT NULL DEFAULT '',
	`description` TEXT NULL,
	
	`latitude` DOUBLE NOT NULL,
	`longitude` DOUBLE NOT NULL,
	
	`country_code` VARCHAR(2),
	`postal_code` VARCHAR(20),
	
	`status` ENUM('open', 'closed') NOT NULL DEFAULT 'open',
	
	`ip_created` VARCHAR(255),
	`date_created` DATETIME NOT NULL DEFAULT NOW(),
	`date_updated` DATETIME NULL,
	
	PRIMARY KEY (`id`),
	INDEX (`latitude`),
	INDEX (`longitude`),
	INDEX (`date_created`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `IssueComments`
(
	`id`               INT UNSIGNED       NOT NULL AUTO_INCREMENT,
	
	`issue_id`         INT UNSIGNED       NOT NULL,
	
	`text`             TEXT               NOT NULL,
	
	`ip_created`       VARCHAR(255),
	`date_created`     DATETIME           NOT NULL DEFAULT NOW(),
	`date_updated`     DATETIME ,
	
	PRIMARY KEY (`id`),
	INDEX (`date_created`),
	
	FOREIGN KEY (`issue_id`) REFERENCES `Issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `IssueAttachments`
(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	
	`issue_id` INT UNSIGNED NOT NULL,
	`comment_id` INT UNSIGNED DEFAULT NULL,
	
	`path` VARCHAR(255) NOT NULL,
	
	`ip_created` VARCHAR(255),
	`date_created` DATETIME NOT NULL DEFAULT NOW(),
	`date_updated` DATETIME NULL,
	
	PRIMARY KEY (`id`),
	
	FOREIGN KEY (`issue_id`) REFERENCES `Issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`comment_id`) REFERENCES `IssueComments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
	
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;


SQL_END;
