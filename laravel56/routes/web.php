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

Route::get('/index', ['uses' => 'IndexController@index', 'as' => 'index']);

Route::get('/search_news', ['uses' => 'NewsController@newsIndex', 'as' => 'news.index']);