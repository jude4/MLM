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
                            <h5>PV withdrawal request history</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3">Exel download</a>
                            </div>

                        </div>
                        @livewire('admin.withdrawal-request-history')

                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>


<!-- ------------cancel modal----------------- -->

<div class="modal fade" id="pv-withdrawal-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <h4 class="modal-title trd-top-end text-center" id="exampleModalLongTitle">Cancel Confirmation</h4>
                    </div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="trd-pass-text">After the administrator cancels, the user application is immediately withdrawn.</div>
                            <div class="trd-pass-text">After final confirmation, please re-enter the administrator password.</div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-5 mb-0">
                        <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                        <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                    </div>
                    <div class="form-group row justify-content-center mt-4">
                        <div class="col-11 text-left pl-4">
                            <label class="lble-chrg-inpds  text-left" for="  ">COMMENT</label>
                            <textarea class="form-control rounded-0 inp-chrgs-boxd" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-8">
                        <div class="col-6">
                            <a href="#" class="btn-mod-end">Cancel</a>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- ------------Approval modal----------------- -->

<div class="modal fade" id="pv-withdrawal-approval-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Confirm Approval</h4>
                    </div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="trd-pass-text">For final approval, please re-enter the administrator password.</div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-5 mb-0">
                        <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                        <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                    </div>

                    <div class="form-group row justify-content-center mt-4">
                        <div class="col-11 text-left pl-4">
                            <label class="lble-chrg-inpds  text-left" for="  ">COMMENT</label>
                            <textarea class="form-control rounded-0 inp-chrgs-boxd" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-8">
                        <div class="col-6">
                            <a href="#" class="btn-mod-conf">To Approve</a>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="pv-withdrawal-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Withdrawal details</h4>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <div class="col-12">
                        <div class="">
                            <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                                <div class="lft-sid-detail text-left">
                                    <div>ID</div>
                                    <div>nickname</div>
                                    <div>Application amount</div>
                                    <div>Account Number</div>
                                    <div>Name of bank </div>
                                    <div>Name of account </div>
                                    <div>holder</div>

                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>USER01</div>
                                    <div>Hong Gil Dong</div>
                                    <div>123-456-78910</div>
                                    <div>500,000 won</div>
                                    <div>Our bank</div>
                                    <div>Hong Gil Dong</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-6 text-center">
                        <a href="#" class="btn-mod-conf">Confirm</a>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
