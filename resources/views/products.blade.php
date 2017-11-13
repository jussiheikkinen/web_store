@extends('app')
@section('content')

<div class="row" style="margin-top:10px;">
  @foreach($products as $product)
    <div class="small-12 medium-4 large-3 columns">
      <div class="card">
        <img class="thumbnail" src="/chili.jpg" alt="product photo" width="100%">
        <div class="card-section">
          <h5>{{$product->name}}</h5>
          <p style="word-wrap: break-word;">{{$product->description}}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
