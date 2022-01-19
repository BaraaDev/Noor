<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::namespace('Admin')
    ->middleware('admin','auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath')
    ->prefix('dashboard',LaravelLocalization::setLocale())
    ->group(function () {

    Route::get('/', 'HomeController@index')->name('home.dashboard');
    Route::get('/visits','HomeController@visits')->name('admin.visits');
    Route::resource('users','UserController'); // Route user resource

    /** Start route settings **/
    Route::resource('settings','SettingController'); // Route settings
    /** End route settings **/

    /** Start route categories **/
    Route::resource('categories','CategoryController');  // Route slider categories
    /** End route categories **/


    /** Start route real_estates **/
    Route::resource('real_estates','RealEstateController');  // Route slider real_estates
    /** End route real_estates **/


    /** Start route projects **/
    Route::resource('projects','ProjectController');  // Route slider projects
    /** End route projects **/


    /** Start route icons **/
    Route::resource('icons','IconController');  // Route slider icons
    /** End route icons **/


    /** Start route services **/
    Route::resource('services','ServiceController');  // Route slider services
    /** End route services **/

    /** Start route news **/
    Route::resource('news','NewsController');  // Route slider news
    /** End route news **/

    /** Start route email **/
    Route::resource('email' ,'MailController'); // Route slider email

    /** Start route email **/

    /** Start route profile **/
    Route::get('profile', 'ProfileController@profile')->name('profile.index'); // Route profile
    Route::post('profile', 'ProfileController@profileUpdate')->name('profile.update'); // update profile
    Route::post('profileUpdatePassword', 'ProfileController@profileUpdatePassword')->name('profile.update.password'); // update profile
    /** End route profile **/
});
