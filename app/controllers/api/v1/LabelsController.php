<?php

class LabelsController extends BaseController
{

	public function listAction()
	{
		$labels = [
			[ 'id' => 1, 'name' => 'put', 'color' => '#FF0000' ],
		];
		
		return Response::json($labels);
	}

}