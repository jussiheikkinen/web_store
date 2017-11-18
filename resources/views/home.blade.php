@extends('layout.app')

@section('content')
  <div class="row" style="margin-top:10px;">
    @each('product_card', $products, 'product')
  </div>
@endsection
