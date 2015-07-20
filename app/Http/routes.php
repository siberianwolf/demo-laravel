<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::pattern('post', '^(?!0)[\d]+');
Route::pattern('category', '^(?!0)[\d]+');

// Route::model('post', 'App\Post');
// Route::model('category', 'App\Category');

Route::get('blog', ['as' => 'blog', 'uses' => 'PostController@index']);

Route::group(['prefix' => 'blog'], function () {
    Route::resource('post', 'PostController');
    Route::resource('category', 'CategoryController', ['only' => ['show']]);
});

// Route::get('post/{post}', ['as' => 'post.show', 'uses' => 'PostController@show']);