<div id="trading-order-pause-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>

<div id="trading-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>
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
                        <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10 @error('password') is-invalid @enderror" placeholder="" wire:model.defer='password'>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="row justify-content-center mt-8">
                        <div class="col-6">
                            <button type="submit" wire:click="endTrade" class="btn-mod-end">Trading End</a>
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
