@extends('layouts.userlayout')

@section('content')
    <!-- Start PV Management (MY PV) - KRW Withdrawal (Withdrawal Request) section-->



<div id="pvm-req-pg">
    <div class="bg05">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-2 col-md-0">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 align-self-center mb-4">
                            <div class="header-title text-center">
                                <h3 class="mb-0 ">PV management</h3>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-9 col-10">
                            <div class="bg03">
                                <img src="{{asset('image/bg03.png')}}" width="100%">
                            </div>
                            <div class="tot-sub-pos1">
                                 <div class="total-text1">TOTAL PV </div>
                                 <div class="total-text2 "> 10,000 won</div>
                            </div>
                            <div class="tot-sub-pos2">
                                 <div class="total-text1">Available PV </div> 
                                 <div class="total-text2 "> 7,000 won</div>
                            </div>
                            <div class="tot-sub-pos3">
                                 <div class="total-text1">Earned PV </div> 
                                 <div class="total-text2 "> 3,000 won</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>


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

                    @livewire('user.withdrawal-request')
                </div>
            </div> 
        </div>
    </div>
</div>





<!-- end PV Management (MY PV) - KRW Withdrawal (Withdrawal Request) section-->
@endsection

@section('scripts')
    <!-- ---------------data table script-------------- -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  


  <script>  
$('table').DataTable();  
</script>

<!-- ---------------data table script end-------------- -->

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