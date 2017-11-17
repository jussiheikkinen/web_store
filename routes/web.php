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

Route::get('/app', function(){
  return view('app');
});

Route::get('/about', function(){
  return view('app');
});

Route::get('/shipping', function(){
  return view('app');
});

Route::get('/cart', function(){
  return view('app');
});

Route::get('/search', function(){
  return view('app');
});

Route::get('/category/{category_id}', 'CategoryController@show');
