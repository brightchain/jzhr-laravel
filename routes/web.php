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

Route::get('/', 'IndexController@index');

//关于金砖
Route::get('/about','AboutController@about')->name('about');

Route::get('/about/company','AboutController@company')->name('company');

Route::get('/about/concept','AboutController@concept')->name('concept');

Route::get('/about/team','AboutController@team')->name('team');

Route::get('/about/risk','AboutController@risk')->name('risk');