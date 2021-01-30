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
Route::get('/', 'ProfileController@profile')->name('profile');
Route::get('/index', 'ProfileController@profile')->name('profile');
Route::get('/about', 'ProfileController@about')->name('about');
Route::get('/services', 'ProfileController@services')->name('services');
Route::get('/portfolio', 'ProfileController@portfolio')->name('portofolio');
Route::get('/team', 'ProfileController@team')->name('team');
Route::get('/blog', 'ProfileController@blog')->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
