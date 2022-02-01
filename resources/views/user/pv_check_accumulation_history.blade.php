@extends('layouts.userlayout')

@section('content')
    <!-- Start PV Management (MY PV) - KRW  Application list section-->



@include('user.pv_header')






<div id="pvm-with-req">
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                @include('user.pv_history_sidebar')
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
                                <img src="{{asset('image/icon/top04.png')}}">
                                <div class="pv-sub-text py-2">MY PV</div>
                            </a>
                        </div>

                        <div class="col-4 text-center">
                            <a href="{{route('user.pvcheckaccumulationhistory')}}"class="pv-img">
                                <img src="{{asset('image/icon/top05.png')}}" >
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

                    <div class="pvm-application">
                        <div class="card-block table-border-style table-responsive">
                            <div class="container-fluid px-md-5 px-2">           
                                <div class="row mb-20">  
                                    <div class="col-12 table-start">
                                        <div class="table-top-head mb-5">PV Accumulation History</div>
                                        <table class="table table-hover dt-responsive  ">  
                                            <thead class="table-header-bg">
                                                <tr >
                                                    <th class="borders-0">No</th>
                                                    <th class="borders-0">ID</th>
                                                    <th class="borders-0">Nickname</th>
                                                    <th class="borders-0">Earning type</th>
                                                    <th class="borders-0">Reserves</th>
                                                    <th class="borders-0">Accumulation date</th>                                      
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (auth()->user()->pvAccumulationHistory as $index => $history)
                                                <tr>
                                                    <td>{{$index + 1}}</td>
                                                    <td>{{auth()->user()->user_id}}</td>
                                                    <td>{{auth()->user()->nickname}}</td>
                                                    <td>{{$history->earning_type}}</td>
                                                    <td>{{$history->amount}}</td>
                                                    <td>{{$history->created_at}}</td>
                                                </tr> 
                                                @endforeach
                                            </tbody>  
                                            <tfoot>  
                                            </tfoot>  
                                        </table>  
                                    </div>  
                                </div>  
                            </div>  
                        </div>
                    </div>
                    <div class="mt-21"></div>
                </div>
            </div> 
        </div>
    </div>
</div>





<!-- end PV Management (MY PV) - KRW Application list section-->
@endsection

@section('scripts')

        <!-- ==========x==========x========== Start sidebar JS ==========x==========x========== -->
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

        <!-- ==========x==========x==========  END SIDEBAR JS==========x==========x========== -->
<!-- ==========x==========x========== END JS ==========x==========x========== -->

    <!-- ==========x==========x========== START DATATABLE  JS ==========x==========x========== -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  


  <script>  
$('table').DataTable();  
</script>

<!-- ==========x==========x========== END DATATABLE  JS ==========x==========x========== -->



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