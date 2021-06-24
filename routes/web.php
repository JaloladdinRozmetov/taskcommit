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

//Route the Commit begin

Route::get('/','CommitsController@index')->name('commits.index');
Route::post('/store','CommitsController@store')->name('commits.store');

//End Route the Commit
