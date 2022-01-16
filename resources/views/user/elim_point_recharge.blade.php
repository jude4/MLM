@extends('layouts.userlayout')

@section('content')
    <!-- Start ELIM point change  section-->

<div id="elim-point-sec">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Elim points recharge</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container">
        <div class="point-tcb-section">
            <div class="container card d-flex justify-content-center mt-5 my-point-tabs">
                <ul class="nav nav-pills mb-3 box-brd" id="pills-tab" role="tablist">
                    <li class="nav-item"> 
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">To Charge
                        </a> 
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Application Details
                        </a>
                    </li>    
                </ul> 

                <div class="tab-content" id="pills-tabContent p-3">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
                        <div class="row justify-content-center mt-12">
                            <div class="col-12">
                                <div class="box-bor">
                                    <div class="d-flex justify-content-between py-2">
                                        <div class="">
                                            <div class="left-side-pon-text">500,000 </div>
                                            <div class="left-side-sub-text"> ELIM POINT </div>
                                        </div>
                                        <div class="align-self-center pr-md-4 pr-2">
                                            <a href="{{route('user.elimpointviewdetail')}}" class="btn-right-short-change">Shortcut To Charging</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-12">
                            <div class="col-12">
                                <div class="box-bor">
                                    <div class="d-flex justify-content-between py-2">
                                        <div class="">
                                            <div class="left-side-pon-text">1,000,000  </div>
                                            <div class="left-side-sub-text"> ELIM POINT </div>
                                        </div>
                                        <div class="align-self-center pr-md-4 pr-2">
                                            <a href="{{route('user.elimpointviewdetail')}}" class="btn-right-short-change">Shortcut To Charging</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-12">
                            <div class="col-12">
                                <div class="box-bor">
                                    <div class="d-flex justify-content-between py-2">
                                        <div class="">
                                            <div class="left-side-pon-text">2,000,000  </div>
                                            <div class="left-side-sub-text"> ELIM POINT </div>
                                        </div>
                                        <div class="align-self-center pr-md-4 pr-2">
                                            <a href="{{route('user.elimpointviewdetail')}}" class="btn-right-short-change">Shortcut To Charging</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-12 mb-12">
                            <div class="col-12 mb-20">
                                <div class="box-bor">
                                    <div class="d-flex justify-content-between py-2">
                                        <div class="">
                                            <div class="left-side-pon-text">10,000,000  </div>
                                            <div class="left-side-sub-text"> ELIM POINT </div>
                                        </div>
                                        <div class="align-self-center pr-md-4 pr-1">
                                            <a href="{{route('user.elimpointviewdetail')}}" class="btn-right-short-change">Shortcut To Charging</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                        @livewire('user.elim-point-recharge-details')                            
                </div>
            </div>
        </div>
    </div>
</div>




                
<!-- End ELIM point change  section-->
@endsection