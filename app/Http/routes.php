<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/report', 'ReportController@showReport');

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::get('/labels/list', 'LabelsController@listAction');
//  Route::get('/issues/(:issueId)', 'IssuesController@getAction');
    Route::get('/issues/list', 'IssuesController@listAction');
    Route::post('/issues/create', 'IssuesController@createAction');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
