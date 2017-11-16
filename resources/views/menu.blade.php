<ul class="vertical menu accordion-menu" data-accordion-menu>
  @foreach($categories as $gategory)
    <li>
      <a href="#">{{$gategory->name}}</a>
      <ul class="menu vertical nested">
        <li><a href="{{ url('/category/'.$gategory->id) }}">Subcategory 1</a></li>
        <li><a href="{{ url('/category/'.$gategory->id) }}">Subcategory 2</a></li>
      </ul>
    </li>
  @endforeach
</ul>
