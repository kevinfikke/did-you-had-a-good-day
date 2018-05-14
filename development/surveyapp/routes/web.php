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

Route::post('/', 'OpinionController@store')->name('vote'); //goes to the store function of opinioncontroller

//Mails

Route::post('/beoordelen', 'MailController@store')->name('mail');


