@extends('layouts.userlayout')

@section('content')
    <!--  PV Management transfer  section start-->



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
                <nav id="sidebar" class="box-shad ">
                    <div class="sub-sp">
                        <div class="user-icons">
                            <div class="user-imgs text-center pt-4">
                                <img src="{{asset('image/icon/user02.png')}}" width="65px">
                            </div>
                            <div class="user-nm pt-2">Gyewang01</div>
                            <div class="user-sub-nm ">Gyewang01</div>
                            <div class="exchnge-link pt-3 text-center"><a href="{{route('user.profile')}}">Go to My Information</a></div>
                        </div>
                    </div>
                    <ul class="list-unstyled components">
                        <li >
                            <a href="#WithdrawalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Withdrawal in Korean Won</a>
                            <ul class="collapse list-unstyled " id="WithdrawalSubmenu">
                                <li>
                                    <a href="{{route('user.krwwithdrawalrequest')}}">Withdrawal Request</a>
                                </li>
                                <li >
                                    <a href="KRW-application-list.html">Application List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#MemberSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Member-To-Member Transfer</a>
                            <ul class="collapse list-unstyled sub-display" id="MemberSubmenu">
                                <li class="active">
                                    <a href="pv-transfer.html">Request for transmission</a>
                                </li>
                                <li>
                                    <a href="pv-transfer-request-list.html">Application list</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#ELIMSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ELIM point conversion</a>
                            <ul class="collapse list-unstyled" id="ELIMSubmenu">
                                <li>
                                    <a href="pv-exchange-available-ELIM-point.html">Available PV sales application</a>
                                </li>
                                <li>
                                    <a href="pv-exchange-accumulation-ELIM-point.html">Apply for resale of accumulated PV</a>
                                </li>
                                <li>
                                    <a href="pv-transfer-request-list.html">Application list</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
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
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-8 col-md-9 col-sm-10 col-12">
                            <div class="tab-heading">
                                Member-To-Member Transfer
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-21">
                        <div class="col-lg-8 col-md-9 col-sm-10 col-12">
                            <div class="form-group row mt-3">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">ID to Send</label>
                                <input type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                <a href="#" class="btn-max" data-toggle="modal" data-target="#search-modal">Search</a>
                            </div>
                            <div class="form-group row mr-sp">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Transfer Quantity</label>
                                <input type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                <a href="#" class="btn-max-second">MAX</a>
                               
                            </div>
                            <div class="form-group row mt-3">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Transfer Fee</label>
                                <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                                
                            </div>
                            <div class="form-group row mt-3">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Balance After Transfer</label>
                                <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                               
                            </div>
                            
                            <div class="row def-sp">
                                <div class="col-12">
                                    <div class="pv-add-app-text">- Cancellation after delivery is not possible.</div> 
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




<!-- end PV Management transfer  section end-->

<!-- -----------search modal start----------------- -->

<div class="modal fade pr-0" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content " id="search-modal">
            <div class="modal-header border-bottom-0 mord-head">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>    
            <div id="serch-modal" class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Search for members</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
                    <div class="row justify-content-center mb-2">
                        <div class="col-11 text-left">
                            <div class="first-select-option mr-1  mb-2">
                                <select name="" id="id">
                                    <option class="opt" value="ID">ID</option>
                                    <option value="nickname">nickname</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-3 col-sm-11 col-11 text-left mr-md-2 mr-0 pl-md-0 pl-3">
                            <div class="second-select-option mr-1  mb-2">
                                <select name="" id="id">
                                    <option class="" value="ID">=Search Options=</option>
                                    <option class="" value="ID">ID</option>
                                    <option value="nickname">nickname</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8 col-8 ml-md-2 ml-sm-0 pr-1 pl-0">
                           <input type="text" class="form-control search-pro-pv-input" placeholder="USER">
                        </div>
                        <div class="col-2 px-0 text-right mt-2">
                            <a href="#" class="search-modal-btn">Search</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class=col-12>
                            <div class="card-block table-border-style ">
                                <div class="container-fluid px-2">           
                                    <div class="row">  
                                        <div class="col-12 table-start">
                                            <table class="table modal-table-transfer dt-responsive ">  
                                                <thead class="table-header-bg">
                                                    <tr >
                                                        <th class="borders-0">ID</th>
                                                        <th class="border-bottom-0">nickname</th>                                           
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER01
                                                                </label>
                                                            </div>
                                                       </td>
                                                        <td>Hong Gil Dong</td>                                                                
                                                    </tr> 
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER02
                                                                </label>
                                                            </div>
                                                       </td>
                                                        <td>Hong Gil Dong</td>                                                                
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER03
                                                                </label>
                                                            </div>
                                                       </td>
                                                        <td>Hong Gil Dong</td>                                                                
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER04
                                                                </label>
                                                            </div>
                                                       </td>
                                                        <td>Hong Gil Dong</td>                                                                
                                                    </tr>
                                                    

                                                </tbody> 
                                            </table>  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4 mt-3">
                        <div class="col-md-3 col-sm-3 col-3">
                            <a href="#" class="btn-model-select" >Select</a>
                        </div>
                        <div class="col-md-4 col-sm-5 col-6">
                            <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">to close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- -----------search modal end----------------- -->

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

<!--  ==========x==========x========== START DATATABLE  JS ==========x==========x========== --> 
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

@endsection