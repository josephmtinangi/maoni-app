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

Route::resource('feedback', 'FeedbackController');

Auth::routes();

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::group(['namespace' => 'admin', 'middleware' => 'auth'], function () {
	Route::resource('admin/categories', 'CategoryController');
	Route::resource('admin/feedback-types', 'FeedbackTypeController');
});
