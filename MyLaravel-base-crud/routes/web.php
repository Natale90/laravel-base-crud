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

Route::get('/', 'OspitiController@home') -> name('home');

Route::get('details/{id}', 'OspitiController@details') -> name('details');

Route::get('create/ospite', 'OspitiController@create') -> name('create');
Route::post('store/ospite', 'OspitiController@store') -> name('store');
