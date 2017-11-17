<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CartController extends Controller
{
    public function create(){
      //Remove previous cart
      if ($request->session()->exists('cart')) {
        $request->session()->forget('cart');
      }

      //Create a new cart and attach it to session cookie
      $request->session()->put('cart', [
        'user'=>false,
        'products'=>[],
        'price'=>0,
        'created_at'=>Carbon::now()
      ]);
      return request()->json('cart created', 200);
    }

    public function update($product_id){

    }

}
