@extends('layout.app')
@section('content')

<product_list v-bind:products_json="'{{$products}}'"></product_list>

@endsection
