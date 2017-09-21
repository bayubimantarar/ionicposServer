<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function() {
	Route::get('/v1/items', 'Api\ItemsController@index');
	Route::get('/v1/items/show/{id}', 'Api\ItemsController@show');
	Route::post('/v1/items/insert', 'Api\ItemsController@insert');
	Route::put('/v1/items/update', 'Api\ItemsController@update');
	Route::delete('/v1/items/destroy/{id}', 'Api\ItemsController@destroy');
});