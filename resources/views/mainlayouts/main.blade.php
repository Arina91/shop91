<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      Header
    </header>

    @yield('content')

    <footer>
      Footer
    </footer>

    <script src="{{asset('/js/app.js')}}"></script>
  </body>
</html>