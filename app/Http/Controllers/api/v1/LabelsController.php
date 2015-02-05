<?php namespace App\Http\Controllers;

class LabelsController extends Controller
{

	public function listAction()
	{
		$labels = [
			[ 'id' => 1, 'name' => 'put', 'color' => '#FF0000' ],
		];

	   return response()->json($labels);
	}

}