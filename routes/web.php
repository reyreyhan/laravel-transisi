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
