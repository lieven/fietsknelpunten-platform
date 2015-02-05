<?php namespace App\Http\Controllers;


class IssuesController extends Controller
{
	public function listAction()
	{
		$paging	= $this->getPaging();
		$offset	= $paging['offset'];
		$limit 	= $paging['limit'];

		$issues = array(
			array('id' => 1),
			array('id' => 2)
		);

		$total = 233;

		return $this->generateResponse($offset, $limit, $total, $issues, 'api-v1-issues-list');
	}

	public function createAction()
	{

	}

	public function getAction($issueId)
	{

	}

}