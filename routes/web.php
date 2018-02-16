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
    return view('welcome',['isHome'=>1]);
})->name('home');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/base','baseListing@getView')->name('baseListing');
Route::get('/overlay/{baseId}','overlayListing@getView');
Route::get('complete/{overlay}','Generatecard@getView')->name('complete');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/mobile/authenticate/{mobile}/{oneSignal}','MobileController@getGreetingCard');
Route::post('/files/upload','StorageController@addFile');
Route::post('/generateOrder','Generatecard@generate')->name('generateOrder');