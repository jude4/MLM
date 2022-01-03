@extends('layouts.userlayout')

@section('content')
    <!-- Start trading  section-->

<div id="trad-section">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Trading History</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container">
        <div class="trad-details">
            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr">
                            <a href="#" class="btn-seg-trad">Segment Trading</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">AXS</li>
                            <li class="second-cl">172.100</li>
                            <li class="second-cl">-1.57</li>
                            <li class="second-cl">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                        2750
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">172200-182793 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:-100</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-seg-trad">Segment Trading</a>
                            <a href="#" class="btn-pause-trad">Pause</a>
                        </div>
                       
                        <ul class="main-axs">
                            <li class="first-cl">BTC</li>
                            <li class="second-cl">73,586,000</li>
                            <li class="second-cl">-0.3</li>
                            <li class="second-cl">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                        221,000
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">7358600-7811302 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:-20000</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause">Re-start</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause">Re-start</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-chase-trad">chase transaction</a>
                            <a href="#" class="btn-pause-trad">Pause</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">MANA</li>
                            <li class="second-cl2">3,060</li>
                            <li class="second-cl2">+1.66</li>
                            <li class="second-cl2">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i></i>
                                        50
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">3060-3248 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue: 800</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-col-rd" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause">Re-start</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause">Re-start</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-chase-trad">chase transaction</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">ETH</li>
                            <li class="second-cl">5,408,000</li>
                            <li class="second-cl">-0.77</li>
                            <li class="second-cl">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                        42,000
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr">
                            <a href="#" class="btn-seg-trad">Segment Trading</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">STORJ</li>
                            <li class="second-cl2">1,990</li>
                            <li class="second-cl2">+2.05</li>
                            <li class="second-cl2">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i></i>
                                        40
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-col-rd" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr">
                            <a href="#" class="btn-seg-trad">Segment Trading</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">PUNDIX</li>
                            <li class="second-cl">1,905</li>
                            <li class="second-cl">-1.55</li>
                            <li class="second-cl">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     30
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-chase-trad">chase transaction</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">AAVE</li>
                            <li class="second-cl">393,900</li>
                            <li class="second-cl">-1.61</li>
                            <li class="second-cl">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                        6450
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-chase-trad">chase transaction</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">NU</li>
                            <li class="second-cl">1,120</li>
                            <li class="second-cl">-1.75</li>
                            <li class="second-cl">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                        20
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-seg-trad">Segment Trading</a>
                            <a href="#" class="btn-pause-trad">Pause</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">SOL</li>
                            <li class="second-cl">293,600</li>
                            <li class="second-cl">-1.38</li>
                            <li class="second-cl"><div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                        50
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause">Re-start</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause">Re-start</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                    <div class="box-bor">
                        <div class="spd-bnr d-inline-block">
                            <a href="#" class="btn-seg-trad">Segment Trading</a>
                        </div>
                        <ul class="main-axs">
                            <li class="first-cl">ZRX</li>
                            <li class="second-cl2">1,445</li>
                            <li class="second-cl2">+0.35</li>
                            <li class="second-cl2">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i></i>
                                        5
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">2760</a></li>
                                      <li><a href="#">2850</a></li>
                                      <li><a href="#">4025</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="pic-sub-detail">
                            <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                            <li class="third-cl">Revenue:0</li>
                        </ul>

                        <div class="progres-spac">
                            <div class="progress prog-val">
                                <div class="progress-bar prog-col-rd" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                    <div class="smal-box-bor">
                        <div class="smal-spd">
                            <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                    <div class="smal-box-bor">
                        <div class="mid-cent">
                            <div class="smal-spd">
                               <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                            </div>
                            <div class="smal-spd">
                                 <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                            </div>
                            <div class="smal-spd">
                                <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>




                
<!-- End trading  section-->



<!--Trad list view detail  Modal start -->
<div class="modal fade pr-0" id="view-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content look-modal">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>    
            <div class="modal-body">
                <div class=" text-left">
                    <h4>Segment Trading</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center mb-4">
                       <div class="col-md-6 col-sm-10 col-11">
                            <div class="box-bord">
                                <div class="d-flex justify-content-between p-3">
                                    <div class="bot-head-text align-self-center">BTC</div>
                                    <div class="text-right">
                                        <div class="mod-">73,586,000</div>
                                        <div class="bot-head-sub-text">-0.3</div>
                                        <div class="bot-head-sub-text">221,000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  mt-4 mb-0">
                                <label class="lbl-mod-text">Starting Price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,550,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Transaction amount by segment</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="2,000,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Selling Yield (%)</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">number of segments</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="6">
                            </div>
                       </div>

                        <div class="col-md-6 col-sm-10 col-11 mt-md-0 mt-4">
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,650,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">2nd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,650,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">3rd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,650,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">4th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,650,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">5th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,650,000">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">6th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,650,000">
                            </div>                               
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Trad list view detail  Modal end -->



<div class="modal fade pr-0" id="pause-trading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content look-modal">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>    
            <div class="modal-body">
                <div class=" text-center mb-4">
                  <div class="stp-trad-mod"> Are you sure you want to pause the trade?</div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center mb-4">
                        <div class="col-12">
                            <a href="#" class="btn-pause-confirm">Confirm</a>
                            <a href="#" class="btn-pause-confirm" data-dismiss="modal" aria-label="Close">cancellation</a>

                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


