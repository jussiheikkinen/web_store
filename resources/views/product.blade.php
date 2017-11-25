@extends('layout.app')
@section('content')
  <product v-bind:product_json="'{{$product}}'" v-on:addproduct="addToCart"></product>
@endsection
