@extends('layouts.userlayout')

@section('content')
    
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
                                        <div class="table-top-head mb-5">PV Usage Historys</div>
                                        <table class="table table-hover dt-responsive  ">  
                                            <thead class="table-header-bg">
                                                <tr >
                                                    <th class="borders-0">No</th>
                                                    <th class="border-bottom-0">type of use</th>
                                                    <th class="borders-0">Price</th>
                                                    <th class="borders-0">Date of use</th>                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>10</td>
                                                    <td>ELIM point conversion</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr> 
                                                <tr>
                                                    <td>10</td>
                                                    <td>send</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr> 
                                                <tr>
                                                    <td>10</td>
                                                    <td>withdraw</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr> 
                                                <tr>
                                                    <td>10</td>
                                                    <td>withdraw</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr> 
                                                <tr>
                                                    <td>10</td>
                                                    <td>withdraw</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>ELIM point conversion</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>ELIM point conversion</td>
                                                    <td>50,000</td>
                                                    <td>2021.11.09 17:45</td>       
                                                </tr> 

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
@endsection