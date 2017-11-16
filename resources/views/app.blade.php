<!doctype html>

<html>
    <head>
        <title>Chili store - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/custom.css') }}">
    </head>
    <body>
    <div data-transition="overlap" class="off-canvas-absolute position-left reveal-for-medium" id="offCanvasLeft" data-off-canvas>
      <!-- Menu -->
      @section('sidebar')
        @include('menu')
      @show

    </div>

    <div class="off-canvas-content" data-off-canvas-content>
      <!-- Your page content lives here -->
      <header>
        @include('header')
      </header>

      <div class="row expanded">
        <div class="small-12 columns">
          <div class="container">
              @yield('content')
          </div>
        </div>
      </div>

      <footer>
        @include('footer')
      </footer>
    </div>

    <!--does not work with mix-->
    <script src="/js/app.js"></script>
    <script> $(document).foundation();</script>
  </body>
</html>
