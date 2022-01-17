<div id="pv-trasmission-application-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>
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
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">transmission details</h4>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <div class="col-12">
                        <div class="">
                            <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                                <div class="lft-sid-detail text-left">
                                    <div>ID</div>
                                    <div>nickname</div>
                                    <div>Incoming ID</div>
                                    <div>receiving nickname</div>
                                    <div>transfer quantity</div>
                                    <div>transfer fee </div>
                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>{{ $data->user->user_id }}</div>
                                    <div>{{ $data->user->nickname }}</div>
                                    <div>{{ $data->incoming_id }}</div>
                                    <div>{{ $data->reciever->nickname}}</div>
                                    <div>{{ $data->amount }} won</div>
                                    <div>{{ $data->fee }} won</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-6 text-center">
                        <a href="#" data-dismiss="modal" class="btn-mod-conf">Confirm</a>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
