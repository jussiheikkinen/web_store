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

Route::get('/', function(){
  return view('layout.app');
}); //->middleware('auth');

Route::get('/about', function(){
  return view('layout.app');
});

Route::get('/shipping', function(){
  return view('layout.app');
});

Route::get('/cart', function(){
  return view('layout.app');
});

Route::get('/search/{param}', 'SearchController@searchProducts');

Route::get('/category/{category_id}', 'CategoryController@show');

Auth::routes();
