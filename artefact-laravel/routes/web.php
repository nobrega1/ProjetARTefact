<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/artefact', function () {
    return view('acceuil');
});
Route::redirect('/', '/login');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login', 'TraiteLogin@traitelogin')->name('login');
Route::post('/login', 'TraiteLogin@traitelogin')->name('login');

Route::get('/register', 'TraiteRegister@traiteregister')->name('register');
Route::post('/register', 'TraiteRegister@traiteregister')->name('register');
//Route::get('register', 'PersonController@store')->name('register');
//Route::post('register', 'PersonController@store')->name('register');