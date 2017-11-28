<ul class="vertical menu accordion-menu" data-accordion-menu>
  <li id="menu_heading" style="background-color:lightgrey; padding: 10px;">
    <h5>Products</h4>
  </li>
  @foreach($categories as $category)
    <li class="menu-item">
      <a href="{{ url('/category/'.$category->id) }}">
        <i class="fa fa-fire" aria-hidden="true"></i> {{$category->name}}
      </a>
    </li>
  @endforeach
</ul>
