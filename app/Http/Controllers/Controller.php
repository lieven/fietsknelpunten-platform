<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;


	protected function getPaging()
	{
		return array(
			'offset' 	=> 0,
			'limit'		=> 10
		);
	}

	/**
	 * @param int $offset
	 * @param int $limit
	 * @param int $total
	 * @param array $data
	 * @param string $routeName
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	protected function generateResponse($offset, $limit, $total, $data, $routeName)
	{
		$previousOffset = $offset - $limit > 0 ? $offset - $limit : 0;
		$nextOffset		= $offset + $limit;

		return response()->json(
			array(
				'count'		=> count($data),
				'total'		=> $total,
				'data' 		=> $data,
				'paging'	=> array(
					'previous'	=> route($routeName) . '?offset=' . $previousOffset . '&limit=' . $limit,
					'next'		=> route($routeName) . '?offset=' . $nextOffset . '&limit=' . $limit
				)
			)
		);
	}
}
