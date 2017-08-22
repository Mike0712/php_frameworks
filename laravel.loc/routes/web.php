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

Route::group(['prefix' => 'admin', 'middleware' => ['check.admin']], function() {

    Route::any('/', 'AdminController@index')->name('admin.posts');

    Route::any('/create', 'AdminController@create')->name('admin.add');
    Route::any('/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::any('/delete/{id}', 'AdminController@delete')->name('admin.delete');

});