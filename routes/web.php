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

//产品服务
route::get('/scope','FundController@scope')->name('scope');

Route::get('/fund','FundController@index')->name('fund');

Route::get('/stock','FundController@stock')->name('stock');

Route::get('/stock/{id}','FundController@show')->name('stockshow');

Route::get('/product','FundController@product')->name('product');

Route::get('/product/{id}','FundController@show')->name('productshow');

//图片上传回调
Route::any('/uploads','ImgController@upload')->name('upload');