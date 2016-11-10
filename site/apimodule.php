<?php

class ApiModule extends AbstractApiModule
{
	private static $parameters = array
	(
		'list' => array()
	);
	
	function __construct()
	{
		parent::__construct('api');
	}
	
	protected function getActionParameters($inAction)
	{
		if (isset(self::$parameters[$inAction]))
		{
			return self::$parameters[$inAction];
		}
		else
		{
			return NULL;
		}
	}
	
	protected function checkPermissions($inAction)
	{
		return true;
	}
	
	function listAction()
	{
		$list = array(
			'apples',
			'oranges'
		);
	
		$this->outputJson($list);
	}
}