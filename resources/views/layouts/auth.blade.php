<!DOCTYPE html>
<html>
  <head>
    @include('shared.html_head')
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""  style="color:white;">Careerment Exam</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        @yield('content')
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    @include('shared.script_section')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
