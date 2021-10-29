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

//四則演算
Route::get('/calculator', 'CalculatorController@index');
Route::get('/calculator/exec', 'CalculatorController@exec');
Route::post('/calculator/exec', 'CalculatorController@exec');
//Route::resource('calculator', 'CalculatorController');

//社員管理
Route::group(['prefix'=>'employee'], function () {
    Route::get('list', 'EmployeeController@list')->name('employee.list');
    Route::get('create', 'EmployeeController@create')->name('employee.create');
    Route::get('show/{employee_id}', 'EmployeeController@show')->name('employee.show');
    Route::get('edit/{employee_id}', 'EmployeeController@edit')->name('employee.edit');
    Route::get('destroy/{employee_id}', 'EmployeeController@destroy')->name('employee.destroy');
    Route::get('complete', 'EmployeeController@complete')->name('employee.complete');

    Route::post('store', 'EmployeeController@store')->name('employee.store');
    Route::post('update/{employee_id}', 'EmployeeController@update')->name('employee.update');
});