<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> V-Elim </title>
<!-- ==========x==========x========== START UI BOOTSTRAP CSS ==========x======== -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
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
    <link rel="stylesheet" type="text/css" href="{{asset('font/font-symbols.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/bootstrap-icons/bootstrap-icon.css')}}">
<!-- ==========x==========x========== END FONT ==========x==========x========== -->
@yield('styles')
<!-- ==========x==========x========== START DATA TABLE ==========x==========x========= -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">   
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >   
<!-- ==========x==========x========== END DATA TABLE ==========x==========x========= -->

  @livewireStyles



<!-- ==========x==========x========== top navbar ==========x==========x========== -->
</head>
<body>

@include('user.top_navbar')


@yield('content')


@include('user.footer')


@livewireScripts
<!-- ==========x==========x========== START JS ==========x==========x========== -->
	
@include('sweetalert::alert')
<script src="{{asset('js/jquery-latest.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

   
<!-- ==========x==========x========== END JS ==========x==========x========== -->
<!-- ==========x==========x========== Top navbar JS start ==========x==========x========== -->
<script>
//Animation

$(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
});
</script>

   <script> 
$('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
        }
}); 
</script>



<!-- ==========x==========x========== Top  navbar JS End ==========x==========x========== -->

<!-- ==========x==========x========== collapse script start ==========x==========x========== -->

<script>
    $('.panel-collapse').on('show.bs.collapse', function () {
     $(this).siblings('.panel-heading').addClass('active');
   });
 
   $('.panel-collapse').on('hide.bs.collapse', function () {
     $(this).siblings('.panel-heading').removeClass('active');
   });
   </script>
 
 <!-- ==========x==========x========== collapse script End ==========x==========x========== -->


@yield('scripts')
</body>

</html>


