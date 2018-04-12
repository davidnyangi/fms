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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'LoginController@getHomepage');
Route::get('forcesessionout', 'LoginController@getLogout');
Route::get('dashboard','DashboardController@welcome');
Route::get('accountant','AccountantController@welcome');
Route::get('secretary','SecretaryController@welcome');
Route::get('user','DashboardController@user');
Route::post('login','LoginController@login');
Route::get('logout', 'LoginController@getLogout');
