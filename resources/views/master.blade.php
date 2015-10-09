<!DOCTYPE html>
<html>
<head>
     <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-datetimepicker.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/roboto.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('css/ripples.min.css') !!}" >
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/adminStyles.css') !!}" >



</head>
<body>

  @include('navs.admin_navbar')
  <!-- @include('navs.csu_navbar') -->
  <!-- @include('navs.lib_navbar') -->
  <!-- @include('navs.heads_navbar') -->

  @yield('content')



	<script src="{!! asset('js/jquery-1.11.3.js') !!}"></script>
  <script src="{!! asset('js/material.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') !!}"></script>
  <script src="{!! asset('js/bootstrap-datetimepicker.min.js') !!}"></script>
	<script src="{!! asset('js/ripples.min.js') !!}"></script>

	<script>
	    $(document).ready(function() {
	        // This command is used to initialize some elements and make them work properly
	        $.material.init();


	    });

      $('.form_date').datetimepicker({
	        //startDate: "+1d",
	        format: "yyyy-mm-dd",
  				autoclose: 1,
  				startView: 2,
  				minView: 2,
  				forceParse: 0
	    });




	</script>

</body>
</html>
