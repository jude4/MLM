<div id="Elim-point-exchange-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>
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
                                    <div>{{ $exchange->id ?? null }}</div>
                                    <div>{{ $exchange->user->nickname ?? null }}</div>
                                    <div>{{ $exchange->elim_quantity_before_exhange ?? null }}</div>
                                    <div>{{ $exchange->exchange_fee ?? null }} P</div>
                                    <div>{{ $exchange->tp_quantity_after_exhange ?? null }} won</div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-6 text-center">
                        <a href="#" class="btn-mod-conf" data-dismiss="modal">Confirm</a>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
