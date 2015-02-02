<?php

class IssuesController extends BaseController
{

	public function listAction()
	{
		$issues = array(
			array('id' => 1),
			array('id' => 2)
		);

		return Response::json( $issues);
	}

	public function createAction()
	{

	}

	public function getAction($issueId)
	{

	}

}