@extends('layouts.userlayout')

@section('content')
    <!-- Start ELIM point change  section-->

<div id="elim-point-sec">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">MY POINT</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container mt-5">
        <div class="my-point">
            <div class="top-head-poin text-center mb-5">MY POINT</div> 
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12 mb-2">
                        <div class="box-bor">
                            <div class="main-point d-flex justify-content-between">
                                <div class="left-side-cont  p-md-4 p-2 align-self-center">
                                    <div class="left-sub-detail mb-2">ELIM POINT</div>
                                    <div class="left-sub-details">25,000</div>
                                </div>
                                <div class="right-side-cont p-md-4 p-2">
                                    <div class="mb-4">
                                        <a href="{{route('user.mypointlist')}}" class="btn-point-view">View details</a>
                                    </div>
                                     <div class="mb-4">
                                        <a href="{{route('user.mypointexchange')}}" class="btn-point-exchange">To Exchange</a>
                                    </div>
                                    <div class="my-point-send">
                                        <a href="my-point-send.html" class="btn-point-send">Send</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12 mb-2">
                        <div class="box-bor2">
                            <div class="main-points d-flex justify-content-between">
                                <div class="left-side-cont  p-md-4 p-2 align-self-center">
                                    <div class="left-sub-detail mb-2">T - POINT</div>
                                    <div class="left-sub-details">87,000</div>
                                </div>
                                <div class="right-side-cont p-md-4 p-2 align-self-center">
                                    <div class="mb-3"></div>
                                    <div class="mb-4">
                                        <a href="{{route('user.mypointtlist')}}" class="btn-point-view">View details</a>
                                    </div>
                                     <div class="mb-4">
                                        <a href="{{route('user.trading')}}" class="btn-point-exchange">Go to Trading</a>
                                    </div>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 justify-content-center">
                        
                        <div class="col-lg-4 col-md-6 col-sm-11 col-11 px-0">
                            <div class="elim-text">
                                <div class="available-sub-text"> ELIM POINT</div>
                                <div class="avl-img align-self-center">
                                    <img src="{{asset('image/icon/arrow.png')}}" width="50px">
                                </div>
                                <div class="available-sub-text">T -  POINT</div>
                            </div>
                        </div>
                    </div>
                <div class="row justify-content-center mt-3 ">
                    <div class="col-md-10 col-12   h-20">
                        <div class="box-bor-detail mb-20">
                            <div class="point-chr-text my-3">To Exchange</div>
                            <div class="form-group row mt-4">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Exchange quantity</label>
                                <input type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mb-1" placeholder="">
                                <a href="#" class="btn-max ">MAX</a>
                                <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
                            </div>

                            <div class="form-group row mr-sp">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Exchange fee</label>
                                <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-1" placeholder="">
                                <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
                           </div>
                           <div class="form-group row mr-sp">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Conversion Quantity</label>
                                <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-2 " placeholder="">
                                <div class="sub-mx-text pl-md-0 pl-3">T - POINT</div>
                           </div>
                           <div class="form-group row mr-sp">
                                <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Balance after exchange</label>
                                <input type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-1" placeholder="">
                                <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
                           </div>
                           <div class="row def-spd justify-content-center">
                                <div class="col-11">
                                    <div class="pv-add-app-text">- Exchanges cannot be canceled after they have been processed.</div>
                                </div>
                            </div>
                            <div class="row my-5 justify-content-center">
                                <div class="col-3 text-center px-0">
                                     <a href="#" class="btn-max">Exchange</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




                
<!-- End ELIM point change  section-->
@endsection