<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Careerment Exam</title>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/assets/css/AdminLTE.min.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/skins/_all-skins.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/iCheck/square/purple.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/pace.css" />
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/bootstrap3-wysihtml5.min.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/select2.min.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/datepicker.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/app.css" type="text/css" />

<script src="/assets/js/pace.min.js"></script>
<script src="/assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="/assets/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap3-wysihtml5.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="/assets/js/select2.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<script type="text/javascript">
  window.paceOptions = {
    elements: false,
    restartOnRequestAfter: false
  }
  $(document).ready(function(){
    $('.datepicker').datepicker({
      format:'yyyy-mm-dd'
    });

    $('.editor-content').wysihtml5();
  })
</script>
