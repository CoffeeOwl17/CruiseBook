<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pricess Cruise</title>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- Auth0 lock script -->
    <script src="//cdn.auth0.com/js/lock-7.9.min.js"></script>
    <!-- Setting the right viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    @yield('additional_include')
  </head>

  @yield('script')

  <body>
    @yield('content')
  </body>   
</html>