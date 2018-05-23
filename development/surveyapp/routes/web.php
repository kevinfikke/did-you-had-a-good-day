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

Route::group(['middleware' => 'auth'], function () {
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'Auth\RegisterController@register');
});


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

// Route::get('/send', function () {

//     Mail::to('example@mailtrap.io')->send(new Automail);

//     return view('welcome');
// });


// excel export

Route::get('/excel', 'ExcelExport@export');