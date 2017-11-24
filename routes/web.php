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
  $products = App\Product::where('category_id',1)->get();
  return view('home', ['products'=>$products]);
})->name('home'); //->middleware('auth');

Route::get('/about', function(){
  return view('layout.app');
});

Route::get('/shipping', function(){
  return view('layout.app');
});

Route::get('/cart', 'CartController@create');
Route::post('/cart', 'CartController@update');

Route::get('/search/{param}', 'SearchController@searchProducts');

Route::get('/category/{category_id}', 'CategoryController@show');

Route::get('/product/{product_id}', function(){
  return view('product');
});

Auth::routes();
