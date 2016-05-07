<!doctype html>
<html lang="en">
<head>
  @include('shared.html_head')
</head>
<body class="skin-white sidebar-mini sidebar">
  <div class="wrapper">
  @include('shared.top_navbar')

    <aside class="main-sidebar">
      @include('shared.main_sidebar')
    </aside>

    <div class="content-wrapper">
      <div>
        <br/>

        @include('shared.alert_section')
        @yield('content')

      </div>
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong><a href="#">By Zainul</a></strong>
    </footer>

    @include('shared.control_sidebar')

    <div class='control-sidebar-bg'></div>

  </div>
  @include('shared.script_section')
</body>
</html>
