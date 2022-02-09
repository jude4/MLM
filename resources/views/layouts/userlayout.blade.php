<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  

   
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

 <script>
   $("#searchcurrencies").keyup(function() {
     var searchvalue = $("#searchcurrencies").val();
     _data = {};
     _data['searchvalue'] = searchvalue;
     $(".loadersecond").removeClass('hidden');
     $.ajax({
            type: "POST",
            url: "{{route('user.search_currencies')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
              $("#trad-details").html('');
                if (response.status == 200) {
                    $("#trad-details").html(response.msg);
                    $(".loadersecond").addClass('hidden');
                }
            }
        });
  });
 </script>


@yield('scripts')
</body>

</html>


