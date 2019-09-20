<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('css/plugins/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		{{-- <link rel="stylesheet" href="{{asset('css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> --}}
		{{-- <link rel="stylesheet" href="{{asset('css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"> --}}
		{{-- <link rel="stylesheet" href="{{asset('css/plugins/jqvmap/jqvmap.min.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('css/dist/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/daterangepicker/daterangepicker.css')}}">
		{{-- <link rel="stylesheet" href="{{asset('css/plugins/summernote/summernote-bs4.css')}}"> --}}
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div id="app">
        	@yield('component')
	    </div>
		<script>
	       window.Laravel = <?php echo json_encode([
	           'csrfToken' => csrf_token(),
	                ]); ?>
	    </script>
	    
	    <script src="{{asset('js/app.js')}}"></script>
		<script src="{{asset('css/plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('css/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
		<script>
		  	$.widget.bridge('uibutton', $.ui.button)
		</script>
		<script src="{{asset('css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('css/plugins/chart.js/Chart.min.js')}}"></script>
		<script src="{{asset('css/plugins/sparklines/sparkline.js')}}"></script>
		<script src="{{asset('css/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('css/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{asset('css/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
		<script src="{{asset('css/plugins/moment/moment.min.js')}}"></script>
		<script src="{{asset('css/plugins/daterangepicker/daterangepicker.js')}}"></script>
		<script src="{{asset('css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
		<script src="{{asset('css/plugins/summernote/summernote-bs4.min.js')}}"></script>
		<script src="{{asset('css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
		<script src="{{asset('css/dist/js/adminlte.js')}}"></script>
		{{-- <script src="{{asset('css')}}/dist/js/pages/dashboard.js"></script> --}}
		<script src="{{asset('css/dist/js/demo.js')}}"></script>
	</body>
</html>