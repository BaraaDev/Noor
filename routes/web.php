<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/news/{id}', 'HomeController@newsShow')->name('newsShow');
Route::get('/real-estate', 'HomeController@real_estate')->name('real_estate');
Route::get('/real-estate/{id}', 'HomeController@real_estateShow')->name('real_estateShow');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/bursa', 'HomeController@bursa')->name('bursa');
Route::get('/nationality', 'HomeController@nationality')->name('nationality');
Route::get('/services', 'HomeController@service')->name('services');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contactPost')->name('contact.post');
