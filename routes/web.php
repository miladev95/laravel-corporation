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
Route::get('/admin','Admin\HomeController@index');
Route::group(array('prefix'=>'admin','namespace'=>'Admin'),function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/setting', 'SettingController@index');
    Route::post('/setting', 'SettingController@update');
    Route::get('/gallery','GalleryController@index');
    Route::get('/newgallery','GalleryController@create');
    Route::post('/newgallery','GalleryController@upload');
    Route::get('/menu','MenuController@index');
    Route::delete('/menu','MenuController@destroy');
    Route::patch('/menu','MenuController@update');
    Route::post('/menu','MenuController@store');
    Route::get('/menu/add','AddMenuController@index');
    Route::post('/menu/add','AddMenuController@store');
    Route::get('/menu/{id?}/edit','EditMenuController@edit');
    Route::post('/menu/{id?}/edit','EditMenuController@update');

    Route::get('/news','NewsController@index');
    Route::delete('/news','NewsController@destroy');
    Route::get('/news/add','AddNewsController@index');
    Route::get('/news/{id?}/edit','EditNewsController@edit');
});


