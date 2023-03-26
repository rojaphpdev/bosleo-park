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
//task4
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/apples/lots/all','API\LotController@index');

//task4-1
Route::post('/lots','API\LotController@store');
//task4-2
Route::put('/lots/{id}','API\LotController@updateHarvestDate');
//task4-3
Route::put('/lots/auction/{id}','API\LotController@updateAuction');
