<div id="look-transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content look-modal">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Application Details</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
                    <div class="row justify-content-center">
                        <div class="col-6 text-left">
                            <div class="app-list-amount"> ID to send</div>
                            <div class="app-list-amount">Quantity to send</div>
                            <div class="app-list-amount">Transfer Fee</div>
                            <div class="app-list-amount">Balance after transfer</div>
                        </div>
                        <div class="col-5 text-right">
                            <div class="app-list-amount ">{{ $data->user->user_id }}</div>
                            <div class="app-list-amount ">{{ $data->amount }} won</div>
                            <div class="app-list-amount ">{{ $data->fee }}won</div>
                            <div class="app-list-amount ">{{ $data->balance_after_transfer }} won</div>
                        </div>
                    </div>
                    <div class="row justify-content-center my-5">
                        <div class="col-11">
                            <a href="#" class="btn-mod-confirm">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

