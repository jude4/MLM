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
                <div class="row mt-5">
                    <div class="col-1 mr-4">
                    </div>
                    <div clas="col-10">
                        <div class="sub-heading">ELIM POINT Details</div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3 my-poni mb-20">
                    <div class="col-10 text-center  h-20">
                        <div class="box-bor-detail">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table  table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">List</th>
                                            <th scope="col">Contents</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Pause</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="chg-frs">1</th>
                                            <td class="chg-frs">Send</td>
                                            <td class="chg-col">100,000</td>
                                            <td class="chg-frs">2021.11.05 14:59</td>
                                        </tr>
                                        <tr>
                                            <td class="chg-frs">2</th>
                                            <td class="chg-frs">Point redemption</td>
                                            <td class="chg-col">5,000</td>
                                            <td class="chg-frs">2021.11.05 14:59</td>
                                        </tr>
                                        <tr>
                                            <td class="chg-frs">3</th>
                                            <td class="chg-frs">Point charge</td>
                                            <td class="chg-cols">20,000</td>
                                            <td class="chg-frs">@2021.11.05 14:59</td>
                                        </tr>     
                                        <tr>
                                            <td class="chg-frs">4</th>
                                            <td class="chg-frs">Send</td>
                                            <td class="chg-col">100,000</td>
                                            <td class="chg-frs">2021.11.05 14:59</td>
                                        </tr>
                                        <tr>
                                            <td class="chg-frs">5</th>
                                            <td class="chg-frs">Point redemption</td>
                                            <td class="chg-col">5,000</td>
                                            <td class="chg-frs">2021.11.05 14:59</td>
                                        </tr>
                                        <tr>
                                            <td class="chg-frs">6</th>
                                            <td class="chg-frs">Point charge</td>
                                            <td class="chg-cols">20,000</td>
                                            <td class="chg-frs">@2021.11.05 14:59</td>
                                        </tr>                                      
                                    </tbody>
                                </table>
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