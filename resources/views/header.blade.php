<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="responsive-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Chili store</li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/shipping') }}"> Shipping</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li>
        <button type="button" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
      </li>
    </ul>
  </div>
</div>
