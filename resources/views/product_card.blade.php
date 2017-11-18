<div class="small-12 medium-4 large-3 columns">
  <div class="card">
    <img class="thumbnail" src="/chili.jpg" alt="product photo" width="100%">
    <div class="card-section">
      <div class="row">
        <div class="small-6 columns">
          <h4>{{{$product->price}}} €</h4>
        </div>
        <div class="small-6 columns text-right">
          <button class="button small"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
        </div>
        <div class="small-12 columns text-center">
          <strong>{{$product->name}}</strong>
        </div>
        <div class="small-12 columns text-center">
          <small style="word-wrap: break-word;">{{$product->description}}</small>
        </div>
      </div>
    </div>
  </div>
</div>
