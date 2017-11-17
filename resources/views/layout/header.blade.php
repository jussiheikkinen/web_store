<div class="title-bar" data-responsive-toggle="top_menu" data-hide-for="medium">
  <div class="title-bar-left">
    <button class="menu-icon" type="button" data-toggle="offCanvasLeft"></button>
  </div>
  <div class="title-bar-right">
    <!-- Authentication Links -->
    @guest
        <div class="title-bar-title"><a href="{{ route('login') }}">Login</a></div>
    @else
        <div class="title-bar-title">Hello! {{ Auth::user()->name }}</div>
    @endguest
    <div class="title-bar-title"><i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i></div>
  </div>
</div>

<div id="top_menu" class="top-bar">
  <div class="top-bar-left">
    <ul class="menu">
      <li>
        <div style="margin-bottom:0;" id="search_bar" class="input-group">
          <input class="input-group-field" placeholder="Search" type="search">
          <button type="button" class="button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <!-- Authentication Links -->
      @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <!-- Open in new page or modal -->
          {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
      @else
          {{-- show something  --}}
          <li class="menu-text">Hello! {{ Auth::user()->name }}</li>
          <!-- Open in new page or modal -->
          {{--<li id="logout" onclick="logout()" ><a>Logout</a></li>--}}
      @endguest
      <li><button type="button" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></li>
    </ul>
  </div>
</div>
