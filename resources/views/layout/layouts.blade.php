<!DOCTYPE HTML>
<html>
  <head>
      <title>@yield('title') Page</title>
      {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
      {!! Html::style('css/styles.css') !!}
  </head>
  <body>
      @yield('content')
  </body>
  @stack('scripts')
  {!! Html::script('js/hello.js') !!}
</html>
