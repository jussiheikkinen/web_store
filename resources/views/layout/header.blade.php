<div class="title-bar" data-responsive-toggle="top_menu" data-hide-for="medium" style="display:none;">
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
        <searchbox></searchbox>
      </li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <!-- Authentication Links -->
      @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else
          <li data-toggle="user-dropdown-bottom-right" class="menu-text">Hello! {{ Auth::user()->name }}</li>
          <!-- Open in popover -->
          <div id="user-dropdown-bottom-right" class="dropdown-pane" data-position="bottom" data-alignment="right" data-hover="true" data-hover-pane="true" data-dropdown data-auto-focus="true">
            <div class="secondary button-group stacked-for-small">
              <a type="" class="button" id="logout" onclick="logout()">Logout</a>
              <a type="" class="button" id="logout" onclick="">My settings</a>
            </div>
          </div>
      @endguest
      <li>
        <button data-toggle="cart-dropdown-bottom-right" type="button" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
        <div id="cart-dropdown-bottom-right" class="dropdown-pane" data-position="bottom" data-alignment="right" data-hover="true" data-hover-pane="true" data-dropdown data-auto-focus="true">
          <!-- Show total sum and products -->
          <cart v-bind:added="add_product"></cart>
        </div>
      </li>
    </ul>
  </div>
</div>
