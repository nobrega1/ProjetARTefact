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
Route::apiResource('staffs','StaffController');
Route::apiResource('jobs','JobController');
Route::apiResource('products','ProductController');
Route::apiResource('companies','CompanyController');
Route::apiResource('brands','BrandController');
Route::apiResource('bikes','BikeController');
Route::apiResource('mtbs','MtbController');
Route::apiResource('emtbs','EmtbController');
Route::apiResource('gravels','GravelController');
Route::apiResource('roads','RoadController');
Route::apiResource('ebikes','EbikeController');




