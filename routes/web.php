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
Route::get('/about','AboutController@company')->name('about');

Route::get('/about/company','AboutController@company')->name('company');

Route::get('/about/concept','AboutController@concept')->name('concept');

Route::get('/about/team','AboutController@team')->name('team');

Route::get('/about/risk','AboutController@risk')->name('risk');

//产品服务
Route::get('/stock','FundController@stock')->name('stock');

route::get('/real','FundController@real')->name('real');

Route::get('/placement','FundController@placement')->name('placement');

Route::get('/merger','FundController@merger')->name('merger');

Route::get('/fund/{id}','FundController@show')->name('fundshow');

//业务范围
Route::get('/scope','FundController@scope')->name('scope');

//新闻中心
Route::get('/news','NewsController@company')->name('news');

Route::get('/trade','NewsController@trade')->name('trade');

Route::get('/news/{id}','NewsController@show')->name('newShow');

//联系我们
Route::get('/contact','ContactController@index')->name('contact');

Route::get('/jobs','ContactController@jobs')->name('jobs');

//图片上传回调
Route::any('/uploads','ImgController@upload')->name('upload');

//合规投资者认定
Route::get('/invest','InvestController@invest')->name('invest');

Route::post('/invest','InvestController@store')->name('store');