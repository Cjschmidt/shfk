<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('frontpage');
});
Route::get('/createNew', array("as" => "createNew", "uses" => "DivisionController@newDivision"));
Route::post('/division/{division}/saveName', array("as" => "saveName", "uses" => "DivisionController@saveName"));
Route::post('/division/{division}/savePerson', array("as" => "saveName", "uses" => "DivisionController@savePerson"));



Route::get('/division/{division}/new', array("as" => "showNew", "uses" => "DivisionController@showNew"));


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
