@extends('layouts.userlayout')

@section('content')
    <!--  PV Management Exchange available ELIM   section start-->



@include('user.pv_header')


    

<div id="pvm-with-req">
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                @include('user.pv_sidebar')
                <div id="content">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid mb-3">
                            <button type="button" id="sidebarCollapse" class="btn btn-info d-md-none d-block">
                                <i class="fas fa-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                            <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav text-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-4 text-center">
                            <a href="{{route('user.krwwithdrawalrequest')}}"class="pv-img">
                                <img src="{{asset('image/icon/top01.png')}}" >
                                <div class="pv-sub-text py-2">MY PV</div>
                            </a>
                        </div>

                        <div class="col-4 text-center">
                            <a href="{{route('user.pvcheckaccumulationhistory')}}"class="pv-img">
                                <img src="{{asset('image/icon/top02.png')}}" >
                                <div class="pv-sub-text py-2">Check History</div>
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="{{route('user.pvmytree')}}"class="pv-img">
                                <img src="{{asset('image/icon/top03.png')}}" >
                                <div class="pv-sub-text py-2">MY TREE</div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <div class="box-bor my-5">

                            </div>
                        </div>
                    </div>

                    <div class="pvm-request">
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-8 col-md-9 col-sm-10 col-12">
                                <div class="tab-heading">
                                    Apply for ELIM Point Conversion
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-xl-4 col-lg-2 col-md-2 col-sm-0 col-0 ">
                            </div>
                            <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8 col-10 px-md-0 px-2">
                                <div class="available-text">
                                    <div class="available-sub-text">Available PV</div>
                                    <div class="avl-img align-self-center">
                                        <img src="{{asset('image/icon/arrow.png')}}" width="50px">
                                    </div>
                                    <div class="available-sub-text"> ELIM POINT</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-9 col-sm-10 col-12">
                                <div class="form-group row mt-3">
                                    <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Conversion Quantity</label>
                                    <input type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                   
                                </div>
                                <div class="row mb-4">
                                    <div class="col-xl-3 col-lg-2 col-md-0 col-sm-5 col-0">
                                    </div>
                                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-10 col-12 px-0">
                                        <ul class="rs-details">
                                            <li><a href="#" class="btn-rp-detail">500,000</a></li>
                                            <li><a href="#" class="btn-rp-detail">1 million</a></li>
                                            <li><a href="#" class="btn-rp-detail">2 million</a></li>
                                            <li> <a href="#" class="btn-rp-detail">10 million</a></li>                                   
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group row mr-sp">
                                    <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Conversion Fee</label>
                                   <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                    <div class="elim-point-text">PV</div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Quantity after conversion</label>
                                    <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                    <div class="elim-point-text">ELIM POINT</div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Balance after conversion</label>
                                    <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                    <div class="elim-point-text">PV</div>
                                </div>
                                <div class="row def-sp">
                                    <div class="col-12">
                                        <div class="pv-add-app-text">- Cancellation after conversion is not possible.</div>
                                    </div>
                                </div>
                                <div class="row mt-3 justify-content-end">
                                    <div class="col-3 text-center px-0">
                                         <a href="#" class="btn-max">Application</a>
                                    </div>
                                </div>

                                <div class="mt-21"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<!--  PV Management Exchange available ELIM   section end-->
@endsection 

@section('scripts')
    
<script>
    $(document).ready(()=>{
  
  $('#open-sidebar').click(()=>{
     
      // add class active on #sidebar
      $('#sidebar').addClass('active');
      
      // show sidebar overlay
      $('#sidebar-overlay').removeClass('d-none');
    
   });
  
  
   $('#sidebar-overlay').click(function(){
     
      // add class active on #sidebar
      $('#sidebar').removeClass('active');
      
      // show sidebar overlay
      $(this).addClass('d-none');
    
   });
  
});
</script>


<!-- ---------------sidebar script start-------------- -->
<script>
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>


<!-- ---------------sidebar script end-------------- -->
@endsection