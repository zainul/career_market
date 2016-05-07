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
      <div class="container">
        <br/>

        @include('shared.alert_section')
        @yield('content')

      </div>
    </div>
    
    @include('shared.control_sidebar')

    <div class='control-sidebar-bg'></div>

  </div>
  @include('shared.script_section')
</body>
</html>
