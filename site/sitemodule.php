<?php

class SiteModule extends Module
{
	function __construct()
	{
		parent::__construct('site');
	}
	
	function defaultAction()
	{
		$this->indexAction();
	}
	
	function indexAction()
	{
		$theView = new View('index', $this->name);
		$theView->show();
	}
}