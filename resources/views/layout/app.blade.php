<!doctype html>
<html>
    <head>
        <title>Web store - {{$title}}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/custom.css') }}">
    </head>
    <body>

      <div data-transition="push" class="off-canvas position-left reveal-for-medium" id="offCanvasLeft" data-off-canvas>
        <!-- Menu -->
        @section('sidebar')
          @include('layout.menu')
        @show
      </div>

      <div id="app" class="off-canvas-content" data-off-canvas-content>
        <div id="header">
          @include('layout.header')
        </div>

        <!-- Your page content lives here -->
        <div class="row expanded">
          <div class="small-12 columns">
            <div class="container">
                @yield('content')
            </div>
          </div>
        </div>

        <div id="footer">
          @include('layout.footer')
        </div>
      </div>

    <!--does not work with mix-->
    <script src="/js/app.js"></script>
    <script src="/js/foundation.js"></script>
    <script> $(document).foundation();</script>
    <script>
    //logout
    function logout(){
      axios.post('/logout')
        .then(function (response) {
          console.log('logged out');
          window.location = "{{ route('home') }}";
        })
        .catch(function (error) {
          window.alert(error);
        });
    }
    </script>
  </body>
</html>
