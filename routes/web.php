<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','WoodController@woodList');
Route::get('/form','WoodController@woodform');
Route::Post ('/save','WoodController@woodsave')->name('save');
Route::delete('/delete/{id}','WoodController@delete')->name('delete');
Route::get('/editform/{id}','WoodController@editform')->name('editform');
Route::patch('/edit/{id}','WoodController@edit')->name('edit');