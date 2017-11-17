<ul class="vertical menu accordion-menu" data-accordion-menu>
  <li id="menu_heading" style="background-color:lightgrey; padding: 10px;">
    <h5>Products</h4>
  </li>
  @foreach($categories as $gategory)
    <li>
      <a href="{{ url('/category/'.$gategory->id) }}">{{$gategory->name}}</a>
      {{--
      <ul class="menu vertical nested">
        <li><a href="{{ url('/category/'.$gategory->id) }}">Subcategory 1</a></li>
        <li><a href="{{ url('/category/'.$gategory->id) }}">Subcategory 2</a></li>
      </ul>
      --}}
    </li>
  @endforeach
</ul>
