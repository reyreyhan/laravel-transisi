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

Route::prefix('/php-basic-one')->name('home.one.')->group(function () {
    Route::get('/test-scores', 'OneController@testScores')->name('test-score');
    Route::post('/test-scores', 'OneController@testScoresPost')->name('test-score');
});
