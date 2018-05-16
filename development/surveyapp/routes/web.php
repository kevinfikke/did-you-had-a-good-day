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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Opinions

Route::get('/opinions', 'OpinionController@index')->name('opinions');

Route::post('/', 'OpinionController@store')->name('vote');

//Charts

Route::get('/totalchart', 'ChartController@getTotal')->name('totalchart');
Route::get('/dailychart', 'ChartController@getDaily')->name('dailychart');
Route::get('/weeklychart', 'ChartController@getWeekly')->name('weeklychart');
Route::get('/monthlychart', 'ChartController@getMonthly')->name('monthlychart');

//Mails
Route::get('/mails', 'MailController@index')->name('mails');

route::put('/mails', 'MailController@update')->name('mails');

Route::post('/beoordelen', 'MailController@store')->name('mail');


