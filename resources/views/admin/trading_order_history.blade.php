@extends('layouts.adminlayout')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="card ml-md-5">
                        <div class="card-header">
                            <h5>Trading order history</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3">EXEL DOWNLOAD</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto">
                            <div class="container-fluid">
                                <form>
                                    <div class="row justify-content-md-end px-2">
                                        <div class="">
                                            <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                                                <div class="start-date-input">
                                                    <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
                                                </div>
                                                <div class="exchage-icon align-items-center d-flex justify-content-center">
                                                    ~
                                                </div>
                                                <div class="end-date-input">
                                                    <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row justify-content-md-end">
                                        <div class="col-12 d-flex justify-content-md-end">
                                            <div class="select-main-group ml-1 ">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select">
                                                        <option value="status" selected>
                                                            =trading status=
                                                        </option>
                                                        <option value="activation" class="text-left">
                                                            Proceeding
                                                        </option>
                                                        <option value="inactive" class="text-left">
                                                            end
                                                        </option>
                                                        <option value="inactive" class="text-left">
                                                            Pause
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select">
                                                        <option value="status" selected>
                                                            =Trading Type=
                                                        </option>
                                                        <option value="activation" class="text-left">
                                                            chase transaction
                                                        </option>
                                                        <option value="inactive" class="text-left">
                                                            segment trading
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="input-group float-left w-auto mb-2">
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select">
                                                            <option value="status" selected>
                                                                =Search Options=
                                                            </option>
                                                            <option value="activation" class="text-left">
                                                                Id
                                                            </option>
                                                            <option value="inactive" class="text-left">
                                                                name
                                                            </option>

                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Please select a search option.">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search">Search</button>
                                                    <button type="button" class="btn btn-reset">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-12 table-start">
                                        <p class="count-list">Total : 14 Count (1/1)Page</p>
                                        <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove">
                                            <thead class="table-header-bg">
                                                <tr>
                                                    <th class="border-bottom-0">No.</th>
                                                    <th class="border-bottom-0">PK</th>
                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">Nickname</th>
                                                    <th class="border-bottom-0">Trading type</th>
                                                    <th class="border-bottom-0">subject</th>
                                                    <th class="border-bottom-0">trading status</th>
                                                    <th class="border-bottom-0">Detail</th>
                                                    <th class="border-bottom-0">state change</th>
                                                    <th class="border-bottom-0">start date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>30</td>
                                                    <td>USER01</td>
                                                    <td>Hong Gil Dong</td>
                                                    <td>chase transaction</td>
                                                    <td>LTC</td>
                                                    <td>Proceeding</td>
                                                    <td class="">
                                                        <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-detail-modal">
                                                            Look
                                                        </a>
                                                    </td>
                                                    <td class="">
                                                        <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-pause-modal">
                                                            Pause
                                                        </a>
                                                        <a href="#" class="btn  btn-ends" data-toggle="modal" data-target="#trading-cancel-modal">
                                                            End
                                                        </a>
                                                    </td>
                                                    <td>2020-12-10 10:35:52</td>

                                                </tr>
                                                

                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>

<!-- ------------trading cancel modal----------------- -->

<div class="modal fade" id="trading-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header mod-disp">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-11 text-center">
                        <h4 class="modal-title trd-top-end text-center" id="exampleModalLongTitle">Trading End</h4>
                    </div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="trd-pass-text">It is difficult to recover existing information at the end of trading.</div>
                            <div class="trd-pass-text">Please re-enter the administrator password to end trading.</div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-5 mb-0">
                        <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                        <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                    </div>
                    <div class="row justify-content-center mt-8">
                        <div class="col-6">
                            <a href="#" class="btn-mod-end">Trading End</a>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- ------------pause modal----------------- -->

<div class="modal fade" id="trading-order-pause-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header mod-disp text-center">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-11 text-center">
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Pause</h4>
                    </div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="trd-pass-text">To pause trading, please re-enter the administrator password.</div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-5 mb-0">
                        <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                        <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                    </div>
                    <div class="row justify-content-center mt-8">
                        <div class="col-6">
                            <a href="#" class="btn-mod-conf">Pause</a>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- ------------trading order detail modal----------------- -->

<div class="modal fade" id="trading-order-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header mod-disp">
                <h4 class="modal-title seg-top-titles" id="exampleModalLongTitle">Segment trading</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-10 col-11">
                            <div class="box-bord">
                                <div class="d-flex justify-content-between p-3">
                                    <div class="bot-head-text align-self-center">ADA</div>
                                    <div class="text-right">
                                        <div class="bot-head-subs-text">73,586,000</div>
                                        <div class="bot-head-subs-text">-0.3</div>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle bot-head-subn-text" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i>170
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">170</a></li>
                                                <li><a href="#">2850</a></li>
                                                <li><a href="#">4025</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Starting Price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1,680">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Transaction amount by segment</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="2,000,000 ">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Selling Yield (%)</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Number Of Segments</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="6">
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-10 col-11">
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1,696">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">2nd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1712">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">3rd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1729">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">4th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1,696">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">5th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1,763">
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">6th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="1,780">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between my-4">
                            <a href="#" class="btn-mod-conf">Confirm</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ------------chase trading  modal----------------- -->

<div class="modal fade" id="chase-trading-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" text-left">
                    <h4 class="seg-top-titles">Chase transaction</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-10 col-11">
                            <div class="box-bord brd-drop">
                                <div class="d-flex justify-content-between p-3">
                                    <div class="bot-head-text align-self-center">LTC</div>
                                    <div class="text-right">
                                        <div class="bot-head-sub-text">313,250</div>
                                        <div class="bot-head-sub-text">-0.79</div>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle bot-head-sub-text" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i>170
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">170</a></li>
                                                <li><a href="#">2850</a></li>
                                                <li><a href="#">4025</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Total trading and operating capital</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="1,000,000">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Selling Yield (%)</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="2">
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-4">
                                <div class="per-sub-text">0.5%</div>
                                <div class="per-sub-text">0.6%</div>
                                <div class="per-sub-text">0.7%</div>
                                <div class="per-sub-text">0.8%</div>
                                <div class="per-sub-text">0.9%</div>
                                <div class="per-sub-text">1%</div>
                                <div class="per-sub-text">1.5%</div>
                                <div class="per-sub-texts">2%</div>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="1,000,000 ">
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-texts">10%</div>
                                <div class="per-sub-text">20%</div>
                                <div class="per-sub-text">30%</div>
                                <div class="per-sub-text">40%</div>
                                <div class="per-sub-text">50%</div>
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">1st purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="313,250">
                            </div>


                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">2nd purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="400,000">
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-text">10%</div>
                                <div class="per-sub-texts">20%</div>
                                <div class="per-sub-text">30%</div>
                                <div class="per-sub-text">40%</div>
                                <div class="per-sub-text">50%</div>
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">2nd purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="73,000,000">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">3rd purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="600,000">
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-text">10%</div>
                                <div class="per-sub-text">20%</div>
                                <div class="per-sub-texts">30%</div>
                                <div class="per-sub-text">40%</div>
                                <div class="per-sub-text">50%</div>
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">3rd purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="72,820,000">
                            </div>


                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">4th purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="800,000">
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-text">10%</div>
                                <div class="per-sub-text">20%</div>
                                <div class="per-sub-text">30%</div>
                                <div class="per-sub-texts">40%</div>
                                <div class="per-sub-text">50%</div>
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">4th purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="72,300,000">
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-10 col-11">
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st average purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,586,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">1st selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="74,321,860">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Average purchase price in the second chase</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,100,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">2nd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,831,000">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Average purchase price at the 3rd chase</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="72,940,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">3rd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,669,400">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Average purchase price at the 4th chase</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="72,510,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">4th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,235,100">
                            </div>

                        </div>
                        <div class="d-flex justify-content-between my-4">
                            <a href="#" class="btn-mod-conf">Confirm</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <!-- ------------Restart modal----------------- -->

    <div class="modal fade" id="trading-restart-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mod-disp">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-11 text-center">
                            <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Trading progress</h4>
                        </div>
                    </div>
                    <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                        <div class="row justify-content-center">
                            <div class="col-11">
                                <div class="trd-pass-text">Please re-enter the administrator password to resume trading.</div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-5 mb-0">
                            <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                            <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                        </div>
                        <div class="row justify-content-center mt-8">
                            <div class="col-6">
                                <a href="#" class="btn-mod-conf">Trading Progress</a>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection