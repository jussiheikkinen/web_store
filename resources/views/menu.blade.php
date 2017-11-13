<ul class="vertical menu">
  @foreach($categories as $gategory)
    <li><a href="{{ url('/category/'.$gategory->id) }}">{{$gategory->name}}</a></li>
  @endforeach
</ul>
