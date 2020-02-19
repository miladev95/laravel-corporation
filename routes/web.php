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


Auth::routes();
Route::get('/', 'IndexController@index');
Route::get('/newslist','NewsListController@index');
Route::get('/singlenews','SingleNewsController@index');
Route::post('/singlenews','SingleNewsController@addComment');
Route::get('/tags','TagsController@index');
Route::post('/joinnews','JoinNewsController@create');
Route::post('/search','SearchController@search');
Route::get('singlepost','SinglePostController@index');
Route::get('notification','NotificationController@index');
Route::post('singlepost','SinglePostController@addComment');
Route::get('/gallery','GalleryController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/setting', 'SettingController@index');
Route::post('/home/setting', 'SettingController@update');
