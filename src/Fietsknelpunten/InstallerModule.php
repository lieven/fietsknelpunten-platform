<?php

namespace Fietsknelpunten;

use Base\Module;
use Base\Database;
use Exception;



class InstallerModule extends Module
{
	function __construct()
	{
		parent::__construct('installer');
	}
	
	function createTablesAction()
	{
		header('Content-Type: text/plain');
		
		try
		{
			$db =& Database::Get('install');
		
			Tags::CreateTables($db);
			// Users::CreateTables($db);
			Issues::CreateTables($db);
		
			echo "OK\n";
		}
		catch (Exception $e)
		{
			echo 'NOK: ', $e->getMessage(), "\n";
		}
	}
};