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

Route::get('/', 'ApiController@index');
Route::get('/gonki', 'ApiController@gonki');
Route::get('/horror', 'ApiController@horror');
Route::get('/korzina', 'ApiController@korzina');
Route::get('/mmo', 'ApiController@mmo');
Route::get('/novinki', 'ApiController@novinki');
Route::get('/shooters', 'ApiController@shooters');
Route::get('/skidki', 'ApiController@skidki');
Route::get('/sport', 'ApiController@sport');
Route::get('/t1', 'ApiController@t1');
Route::get('/t2', 'ApiController@t2');
Route::get('/t3', 'ApiController@t3');
Route::get('/t4', 'ApiController@t4');
Route::get('/t5', 'ApiController@t5');
Route::get('/t6', 'ApiController@t6');
Route::get('/t7', 'ApiController@t7');
Route::get('/t8', 'ApiController@t8');
Route::get('/t9', 'ApiController@t9');
Route::get('/t10', 'ApiController@t10');
Route::get('/t11', 'ApiController@t11');
Route::get('/t12', 'ApiController@t12');
Route::get('/t13', 'ApiController@t13');
Route::get('/t14', 'ApiController@t14');
Route::get('/t15', 'ApiController@t15');
Route::get('/t16', 'ApiController@t16');
Route::get('/t17', 'ApiController@t17');
Route::get('/t18', 'ApiController@t18');
Route::get('/t19', 'ApiController@t19');
Route::get('/t20', 'ApiController@t20');
Route::get('/avtorizacia', 'ApiController@avtorizacia');
Route::get('/registracia', 'ApiController@registracia');
Route::get('/getBaskets', 'ApiController@getBaskets');
