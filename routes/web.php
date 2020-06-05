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

Route::get('/', 'BlogController@index');


Route::get('/content/{slug}', 'BlogController@contentBlog')->name('blog.content');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/post/showDelete', 'PostController@showDelete')->name('post.showDelete');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/killed/{id}', 'PostController@killed')->name('post.killed');

    Route::resource('/dashboard', 'DashboardController');
    Route::resource('/post', 'PostController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');
    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::patch('profile', 'ProfileController@update')->name('profile.update');
});



