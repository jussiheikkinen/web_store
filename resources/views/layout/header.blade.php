<div class="title-bar" data-responsive-toggle="top_menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="offCanvasLeft"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div id="top_menu" class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Hello! {{ Auth::user()->name }}</li>
      <!-- Authentication Links -->
      @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else
          {{-- show something  --}}
          <li id="logout"><a>Logout</a></li>
      @endguest
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button"><i class="fa fa-search" aria-hidden="true"></i></button></li>
      <li><button type="button" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></li>
    </ul>
  </div>
</div>
