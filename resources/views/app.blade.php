<!doctype html>

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/custom.css') }}">
    </head>
    <body>
      <header>
        @include('header')
      </header>

      <div class="row expanded">
        <div class="small-12 medium-2 columns">
          @section('sidebar')
            @include('menu')
          @show
        </div>
        <div class="columns">
          <div class="container">
              @yield('content')
          </div>
        </div>
      </div>

      <footer>
        @include('footer')
      </footer>

      <!--does not work with mix-->
      <script src="/js/app.js"></script>
      <script> $(document).foundation();</script>
    </body>
</html>
