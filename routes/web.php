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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/php-basic-one', 'HomeController@one')->name('home.one');
Route::get('/php-basic-two', 'HomeController@two')->name('home.two');
Route::get('/laravel-basic', 'HomeController@laravelBasic')->name('home.laravel-basic');

Route::prefix('/php-basic-one')->name('home.one.')->group(function () {
    Route::get('/test-scores', 'OneController@testScores')->name('test-score');
    Route::post('/test-scores', 'OneController@testScoresPost')->name('test-score');

    Route::get('/find-lowercase', 'OneController@findLower')->name('find-lower');
    Route::post('/find-lowercase', 'OneController@findLowerPost')->name('find-lower');

    Route::get('/word', 'OneController@word')->name('word');
    Route::post('/word', 'OneController@wordPost')->name('word');
});

Route::prefix('/php-basic-two')->name('home.two.')->group(function () {
    Route::get('/encrypt', 'TwoController@encrypt')->name('encrypt');
    Route::post('/encrypt', 'TwoController@encryptPost')->name('encrypt');
});

Route::prefix('/php-basic-three')->name('home.three.')->group(function () {
    Route::get('/true-false', 'ThreeController@trueFalse')->name('true-false');
    Route::post('/true-false', 'ThreeController@trueFalsePost')->name('true-false');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/company')->name('company.')->middleware('auth')->group(function () {
    Route::get('', 'CompanyController@index')->name('index');
    Route::post('', 'CompanyController@store')->name('store');
    Route::get('/{id}', 'CompanyController@edit')->name('edit');
    Route::post('/{id}', 'CompanyController@update')->name('update');
    Route::delete('/{id}', 'CompanyController@destroy')->name('delete');
});

Route::prefix('/employee')->name('employee.')->middleware('auth')->group(function () {
    Route::get('', 'EmployeeController@index')->name('index');
    Route::post('', 'EmployeeController@store')->name('store');
    Route::get('/{id}', 'EmployeeController@edit')->name('edit');
    Route::post('/{id}', 'EmployeeController@update')->name('update');
    Route::delete('/{id}', 'EmployeeController@destroy')->name('delete');
});
