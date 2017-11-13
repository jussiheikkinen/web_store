<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{
    //
    public function show($category_id){
      $products = Product::where('category_id', $category_id)->get();

      return view('products', ['products' => $products]);
    }

}
