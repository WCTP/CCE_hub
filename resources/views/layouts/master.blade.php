
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CCE Overwatch Hub</title>

    <!-- Complete JavaScript CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nav.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet"> <!-- Font by Woowahan Brothers -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> <!-- Font by Raph Levien -->

  </head>

  <body>

    @include ('layouts.nav')

    <div class="main">
      @yield('content')

      @include('layouts.sidebar')

      @include('layouts.footer')

    </div>
  </body>

</html>
