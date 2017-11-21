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
        $cart = [
          'user'=>false,
          'products'=>[],
          'created_at'=>Carbon::now(),
          'updated_at'=>Carbon::now()
        ];

        $request->session()->put('cart', $cart);
      }

      return request()->json(200, $cart);
    }

    public function update(Request $request){
      $products = $request->get('products');
      if ($request->session()->exists('cart')) {
        $request->session()->put('cart.products', $products);
        //return ok
        return request()->json(200, "Added to session");
      }
      return request()->json(400, "No session");
    }


    public function delete(Request $request){
      if ($request->session()->exists('cart')) {
        $request->session()->forget('cart');
      }

      return redirect()->action('CartController@create');
    }

}
