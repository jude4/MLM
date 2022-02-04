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
                        <div>{{ $exchange[0]->user->user_id ?? null }}</div>
                        <div>{{ $exchange[0]->user->nickname ?? null }}</div>
                        <div>{{ $exchange[0]->elim_points ?? null }} won</div>
                        <div>{{ $exchange[0]->fee ?? null }} won</div>
                        <div>{{ $exchange[0]->t_points ?? null }} p</div>
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