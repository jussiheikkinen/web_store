<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function searchProducts($param){
      $param = trim($param);
      $param = strtolower($param);
      $products = Product::where('name','LIKE','%'.$param.'%')
                  ->get();

      return response()->json([$products], 200);
    }
}
