<?php namespace App\Http\Controllers;


class IssuesController extends Controller
{
	public function listAction()
	{
		$issues = array(
			array('id' => 1),
			array('id' => 2)
		);

		return response()->json($issues);
	}

	public function createAction()
	{

	}

	public function getAction($issueId)
	{

	}

}