{{-- <div id="Elim-point-transfer-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: flex" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif> --}}



    <div id="Elim-point-transfer-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode == true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true"@endif>
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
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">View deposit information</h4>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12">
                        <div class="box-shad-arou">
                            <div class="d-flex justify-content-between p-md-3 p-2 ">
                                <div class="lft-sid-detail text-left">
                                    {{ $user->nickname ?? null }}
                                    <div>recharge amount</div>
                                    <div>virtual account number</div>
                                    <div>name of bank</div>
                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>123-456-78910</div>
                                    <div>500,000 won</div>
                                    <div>Our bank</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-2">
                    <div class="col-12">
                        <div class="">
                            <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                                <div class="lft-sid-detail text-left">
                                    <div>ID</div>
                                    <div>nickname</div>
                                    <div>Name of depositor</div>
                                    <div>deposit account number</div>
                                    <div>Name of bank to deposit</div>

                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>USER01</div>
                                    <div>Hong Gil Dong</div>
                                    <div>Kim Il-beon</div>
                                    <div>111-122-33333</div>
                                    <div>Hana Bank</div>
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

