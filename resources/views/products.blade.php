@extends('layout.app')
@section('content')

<product_list v-bind:products_json="'{{$products}}'" v-on:addproduct="addToCart"></product_list>

@endsection
