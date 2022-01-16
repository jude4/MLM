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
                            <h5>Elim Point Exchange History</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3">Exel download</a>
                            </div>

                        </div>

                        @livewire('admin.elim-point-exchange-history')
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>


<!-- ------------Elim point exchange detail modal----------------- -->

<div class="modal fade" id="Elim-point-exchange-detail-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Exchange Details</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box-shad-arou">
                            <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                                <div class="lft-sid-detail text-left">
                                    <div>ID</div>
                                    <div>nickname</div>
                                    <div>Exchange Quantity (ELIM)</div>
                                    <div>Exchange Fee (ELIM)</div>
                                    <div>Conversion Quantity (T)</div>
                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>USER01</div>
                                    <div>Hong Gil Dong</div>
                                    <div>500,000 won</div>
                                    <div>10,000 won</div>
                                    <div>500,000 P</div>

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