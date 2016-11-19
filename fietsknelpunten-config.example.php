<?php

// Copy this file to a readable but safe path, edit it and update the CONFIG_FILE define in index.php

\Base\Config::Register
(
	array
	(
		// you should set up at least one database, called 'main'
		'databases' => array
		(
			'main' => array
			(
				'host' => 'localhost',
				'user' => 'username',
				'pass' => 'password',
				'database' => 'database'
			)
		),
		'modules' => array
		(
			'namespace' => '\\',
			'default' => 'api'
		),
		'fietsknelpunten' => array
		(
			'apps' => array
			(
				'appID' => 'appKey'
			)
		)
	)
);


date_default_timezone_set('Europe/Brussels');
