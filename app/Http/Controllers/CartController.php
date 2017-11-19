<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CartController extends Controller
{
    public function create(Request $request){
      //Remove previous cart
      if ($request->session()->exists('cart')) {
        //$request->session()->forget('cart');
        $cart = $request->session()->get('cart');
      }
      else{
        //Create a new cart and attach it to session cookie
        $cart = $request->session()->put('cart', [
          'user'=>false,
          'products'=>[],
          'total'=>'0',
          'created_at'=>Carbon::now()
        ]);
      }

      return request()->json(200, $cart);
    }

    public function update($product_id){

    }

}
