@extends('layouts.userlayout')

@section('content')
    <!-- Start PV Management (MY PV) - KRW Withdrawal (Withdrawal Request) section-->



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