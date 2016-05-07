<!doctype html>
<html lang="en">
<head>
  @include('shared.html_head')
</head>
<body class="skin-white sidebar-mini sidebar">
  <nav class="navbar navbar-default navbar-fixed-top nav-blue">
    <div class="container">
      <div class="pull-right" style="margin-top:5px;">
        <a href="/auth/login" class="btn btn-default">Login</a>
      </div>
    </div>
  </nav>
    @include('shared.alert_section')

    @yield('content')

    @include('shared.script_section')

</body>
</html>
