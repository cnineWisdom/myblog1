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
Route::middleware('allowNet')->prefix('v1')->group(function(){
	Route::post('/index','HomeController@index');
	Route::get('/index','HomeController@index');
	
	Route::post('/articlDetail','HomeController@articlDetail');
	Route::post('/getList','HomeController@getOtherList');
	Route::post('/getGroup','HomeController@getGroupUp');

});

Route::get('/show/{id}', 'ProductController@show');

