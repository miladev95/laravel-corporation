<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(array('namespace'=>'Api'),function (){
    Route::get('/news','NewsController@index')->name('news.all');
    Route::get('/news/{id}/comment','NewsController@comment')->name('news.comment');
    Route::get('/gallery','GalleryController@index')->name('gallery.all');
    Route::get('/posts','PostController@index')->name('posts.all');
    Route::get('/notification','NotificationController@index')->name('notification.all');

    Route::post('/register','AuthController@register');
    Route::post('/login','AuthController@login');
    Route::post('/logout','AuthController@logout');
});
