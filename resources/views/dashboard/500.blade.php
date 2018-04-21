<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>500</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('panel/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('panel/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('panel/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('panel/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('panel/js/html5shiv.js')}}"></script>
    <script src="{{asset('panel/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

  <body class="body-500">

    <div class="container">

      <section class="error-wrapper">
          <i class="icon-500"></i>
          <h1>@yield('error Type')</h1>
          @yield('error message')
          {{--<p class="page-500">Looks like Something went wrong. <a href="index.html">Return Home</a></p>--}}
      </section>

    </div>


  </body>
</html>
