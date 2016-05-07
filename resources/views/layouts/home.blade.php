<!doctype html>
<html lang="en">
<head>
  @include('shared.html_head')
</head>
<body class="skin-white sidebar-mini sidebar">
  <nav class="navbar navbar-default navbar-fixed-top nav-blue">

  </nav>
    @include('shared.alert_section')

    @yield('content')

    @include('shared.script_section')

</body>
</html>
