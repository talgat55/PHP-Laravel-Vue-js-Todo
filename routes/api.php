<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::prefix('v1')->group(function () {
    Route::get('/groups', 'api\v1\GroupsController@index');
    Route::get('/groups/{id}', 'api\v1\GroupsController@detail');
    Route::post('/groups/create', 'api\v1\GroupsController@create');

    Route::post('/todo/create', 'api\v1\TodoController@create');

});

