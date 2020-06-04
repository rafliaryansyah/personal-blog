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
    return view('pages.home.index');
});

Route::get('/post/showDelete', 'PostController@showDelete')->name('post.showDelete');
Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
Route::delete('/post/killed/{id}', 'PostController@killed')->name('post.killed');

Route::resource('/post', 'PostController');
Route::resource('/category', 'CategoryController');
Route::resource('/tag', 'TagController');

