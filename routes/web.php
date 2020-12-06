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

//Pages Routes

Route::get('/', 'PagesController@index');
Route::get('/terms','PagesController@terms');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('/faq','PagesController@faq');
Route::get('/news','PagesController@news');
Route::get('/privacy','PagesController@privacy');
Route::get('/bibliography','PagesController@bibliography');

//User Authentication Routes
Auth::routes();

//Video controller routes
Route::resource('videos', 'VideosController');

//Home Route
Route::get('/home', 'HomeController@index')->name('home');

//Replies Routes
Route::get('/videos/{subject}/{video}/replies', 'RepliesController@index');
Route::get('/videos/{subject}/{video}/reply', 'RepliesController@create');
Route::resource('replies', 'RepliesController');

