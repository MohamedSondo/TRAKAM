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

Route::get('/', 'PagesController@getWelcome');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('reserve', 'PagesController@getSearchTrip');

Route::get('Book', 'TripController@index');

Route::get('search_results', 'TripController@getSearchResult');

//Route::get('create', 'TripController@create');

//Route::get('search_results/{stop}', 'PagesController@getSearchResult');

Route::get('myReservation', 'PassengerController@create');

Route::get('notification', 'PagesController@getNotification');
Route::get('about', 'PagesController@getAbout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
