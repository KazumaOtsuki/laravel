<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', 'CalculatorController@index');
Route::get('/calculator/exec', 'CalculatorController@exec');
Route::post('/calculator/exec', 'CalculatorController@exec');
//Route::resource('calculator', 'CalculatorController');