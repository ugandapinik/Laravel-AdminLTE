<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {{ Html::style("assets/bootstrap/css/bootstrap.min.css") }}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  {{ Html::style("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}
  <!-- Theme style -->
  {{ Html::style("assets/dist/css/AdminLTE.min.css") }}
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  {{ Html::style("assets/dist/css/skins/_all-skins.min.css") }}
  <!-- iCheck -->
  {{ Html::style("assets/plugins/iCheck/square/blue.css") }}

</head>


<body class="@if(!empty($data)) {{ $data['body_class'] }} @endif">

    <!-- display the content here -->
    @yield('content')
    <!-- display the content here -->


    <!-- jQuery 2.2.3 -->
    {{ Html::script("assets/plugins/jQuery/jquery-2.2.3.min.js") }}
    <!-- Bootstrap 3.3.6 -->
    {{ Html::script("assets/bootstrap/js/bootstrap.min.js") }}
    <!-- FastClick -->
    {{ Html::script("assets/plugins/fastclick/fastclick.js") }}
    <!-- AdminLTE App -->
    {{ Html::script("assets/dist/js/app.min.js") }}
    <!-- Sparkline -->
    {{ Html::script("assets/plugins/sparkline/jquery.sparkline.min.js") }}
    <!-- jvectormap -->
    {{ Html::script("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}
    {{ Html::script("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}
    <!-- SlimScroll 1.3.0 -->
    {{ Html::script("assets/plugins/slimScroll/jquery.slimscroll.min.js") }}
    <!-- ChartJS 1.0.1 -->
    {{ Html::script("assets/plugins/chartjs/Chart.min.js") }}
    <!-- iCheck -->
    {{ Html::script("assets/plugins/iCheck/icheck.min.js") }}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="assets/dist/js/pages/dashboard2.js"></script> --}}
    <!-- AdminLTE for demo purposes -->
    {{ Html::script("assets/dist/js/demo.js") }}
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
