<div id="look" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>


    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content look-modal">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Withdrawal Details</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
                    <div class="row justify-content-center">
                        <div class="col-6 text-left">
                            <div class="app-list-amount">Application Amount</div>
                            <div class="app-list-amount">Account Number</div>
                            <div class="app-list-amount">Name of bank</div>
                            <div class="app-list-amount">Name of account holder</div>
                        </div>
                        <div class="col-5 text-right">
                            <div class="app-list-amount ">{{ $withdrawal->amount }} won</div>
                            <div class="app-list-amount ">{{ $withdrawal->account_number }}</div>
                            <div class="app-list-amount "> {{ $withdrawal->bank_name }}</div>
                            <div class="app-list-amount ">{{ $withdrawal->name_of_account }}</div>
                        </div>
                    </div>

                    <div class="row justify-content-center my-5">
                        <div class="col-11">
                            <a href="#" data-dismiss="modal" class="btn-mod-confirm">Confirm</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
