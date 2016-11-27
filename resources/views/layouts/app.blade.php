<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="/css/font-awesome.css" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/app-class.css" rel="stylesheet">
  <link href="/css/responsive-table.css" rel="stylesheet" >
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          @include('partials.menus.left')

          <!-- Right Side Of Navbar -->
          @include('partials.menus.right')
        </div>
      </div>
    </nav>

    @yield('content')
  </div>

  <!-- Scripts -->
  <script
	  src="http://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>
  <script>
  window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
  </script>
  @yield('scripts')
</body>
</html>
