<?php

class ReportController extends BaseController
{

	/**
	 * Show view to report
	 */
	public function showReport()
	{
		return View::make('report/report');
	}
}