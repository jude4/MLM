<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> V-Elim </title>
<!-- ==========x==========x========== START UI BOOTSTRAP CSS ==========x======== -->

	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
<!-- ==========x==========x========== END UI BOOTSTRAP CSS ==========x========== -->

<!-- ==========x==========x========== START COMMON CSS ==========x===== -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<!-- ==========x==========x========== END COMMONCSS ==========x======== -->	

<!-- ==========x==========x========== START FONT ==========x==========x========= -->
	<link rel="stylesheet" type="text/css" href="{{asset('font/inter/inter-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/nunito-sans/nunitosans.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/roboto/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/noto-sans/noto-sans.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/font-awesome-pro-master/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/bootstrap-icons/bootstrap-icon.css')}}">
	<style>
		.loader {
			z-index: 20;
		position: absolute;
		left: 40%;
		top: 40%;
		  border: 16px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 16px solid #325C8E;
		  width: 120px;
		  height: 120px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}
		
		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}
		
		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
		</style>

    @livewireStyles
<!-- ==========x==========x========== END FONT ==========x==========x========== -->
</head>
<body>
<!-- START Login Page-->

@yield('content')




@include('sweetalert::alert')

<!-- END OF INDEX PAGE -->


<!-- ==========x==========x========== START JS ==========x==========x========== -->
	
	<script src="{{asset('js/jquery-latest.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    @livewireScripts
<!-- ==========x==========x========== END JS ==========x==========x========== -->	

</body>
</html>


