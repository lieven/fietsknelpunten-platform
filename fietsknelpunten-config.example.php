<?php

// Copy this file to a readable but safe path, edit it and update the CONFIG_FILE define in index.php

Base\Config::Register
(
	array
	(
		'databases' => array
		(
			// The 'main' configuration should have select, insert, update and delete permissions
			'main' => array
			(
				'host' => 'host',
				'user' => 'username',
				'pass' => 'password',
				'database' => 'database'
			),
			// The user for the 'install' config should have permissions to create and alter tables,
			// so leave it disabled once everything is set up
			'install' => array
			(
				'enabled' => false,
				'host' => 'host',
				'user' => 'username',
				'pass' => 'password',
				'database' => 'database'
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
				'appID' => 'appKey'
			),
			// Only issues reported within this bounding box are accepted.
			'bbox' => array
			(
				'minLat' => 49.45,
				'maxLat' => 51.57,
				'minLon' => 2.45,
				'maxLon' => 6.45
			)
		)
	)
);


date_default_timezone_set('Europe/Brussels');
