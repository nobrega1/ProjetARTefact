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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Routes API
Route::apiResource('editions','EditionController');
Route::apiResource('events','EventController');

Route::apiResource('periods','PeriodController');
Route::apiResource('tests','TestController');
Route::apiResource('clients','ClientController');
Route::apiResource('addresses','AddressController');
Route::apiResource('persons','PersonController');

