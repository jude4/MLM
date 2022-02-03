<div class="modal-content">
            <div class="modal-header mod-disp">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-11 text-center">
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">View transmission details
                        </h4>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12">
                        <div class="box-shad-arou">
                            <div class="d-flex justify-content-between p-md-3 p-2 ">
                                <div class="lft-sid-detail text-left">
                                
                                    <div>Transmission ID</div>
                                    <div>transfer nickname</div>
                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>{{ $transfer[0]->user->user_id ?? null }}</div>
                                    <div>{{ $transfer[0]->user->nickname ?? null }}</div>

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
                                   
                                    <div>Reciever ID</div>
                                   
                                    <div>Receiver nickame</div>
                                   
                                    <div>Reciever Member type</div>
                                    <div>Transfer Quantity</div>

                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>{{ $transfer[0]->reciever->user_id ?? null }}</div>
                                    <div>{{ $transfer[0]->reciever->nickname ?? null }}</div>
                                    <div>{{ $transfer[0]->reciever->type ?? null }}</div>
                                    <div>{{ $transfer[0]->quantity ?? null }} won</div>

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