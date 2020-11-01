<?php

// Copy this file to a readable but safe path, edit it and update the CONFIG_FILE define in index.php

$jurisdictions = require_once(__DIR__ . '/bevoegdheden-vlaanderen.php');

Base\Config::Register
(
	array
	(
		'databases' => array
		(
			// The 'main' configuration should have select, insert, update and delete permissions
			'main' => array
			(
				'host' => 'mariadb',
				'user' => 'fietsknelpunten',
				'pass' => 'fietsknelpunten',
				'database' => 'fietsknelpunten'
			),
			// The user for the 'install' config should have permissions to create and alter tables,
			// so leave it disabled once everything is set up
			'install' => array
			(
				'enabled' => true,
				'host' => 'mariadb',
				'user' => 'fietsknelpunten',
				'pass' => 'fietsknelpunten',
				'database' => 'fietsknelpunten',
			)
		),
		'modules' => array
		(
			'namespace' => '\Fietsknelpunten',
			'default' => 'api'
		),
		'fietsknelpunten' => array
		(
			'apps' => array
			(
				'be.fietsknelpunten.Fietsknelpunten' => '123456'
			),
			// Only issues reported within this bounding box are accepted.
			'bbox' => new Fietsknelpunten\BoundingBox(49.45, 2.45, 51.57, 6.45),
			'jurisdictions' => $jurisdictions
		)
	)
);


date_default_timezone_set('Europe/Brussels');
