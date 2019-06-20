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

Route::get('/', 'DashboardController@index');

Route::get('/jack', 'ChildController@child');
Route::get('/niall', 'ChildController@child');

Route::get('/jack/expenses/category/{category_name}', 'ChildController@category');

Route::get('/about', 'ContentController@about');
Route::get('/what-we-count', 'ContentController@whatWeCount');
Route::get('/changelog', 'ContentController@changelog');
