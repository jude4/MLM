<div class="row justify-content-center">
    <div class="col-lg-8 col-md-9 col-sm-10 col-12">
        <div class="form-group row mt-3">
            <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Conversion
                Quantity</label>
            <input type="text"
                class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2 @error('amount') is-invalid @enderror"
                placeholder="" wire:model='amount'>
            @error('amount')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row mb-4">
            <div class="col-xl-3 col-lg-2 col-md-0 col-sm-5 col-0">
            </div>
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-10 col-12 px-0">
                <ul class="rs-details">
                    <li><button class="btn-rp-detail" wire:click="$set('amount', '500000')">500,000</button></li>
                    <li><button class="btn-rp-detail" wire:click="$set('amount', '1000000')">1 million</button></li>
                    <li><button class="btn-rp-detail" wire:click="$set('amount', '2000000')">2 million</button></li>
                    <li> <button class="btn-rp-detail" wire:click="$set('amount', '10000000')">10 million</button></li>
                </ul>
            </div>
        </div>
        <div class="form-group row mr-sp">
            <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Conversion Fee</label>
            <input disabled type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2"
                placeholder="" wire:model='fee'>
            <div class="elim-point-text">PV</div>
        </div>
        <div class="form-group row mt-3">
            <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Quantity after
                conversion</label>
            <input disabled type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2"
                placeholder="" wire:model='quantity_after_conversion'>
            <div class="elim-point-text">ELIM POINT</div>
        </div>
        <div class="form-group row mt-3">
            <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Balance after
                conversion</label>
            <input disabled type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2"
                placeholder="" wire:model='balance_after_conversion'>
            <div class="elim-point-text">PV</div>
        </div>
        <div class="row def-sp">
            <div class="col-12">
                <div class="pv-add-app-text">- Cancellation after conversion is not possible.</div>
            </div>
        </div>
        <div class="row mt-3 justify-content-end">
            <div class="col-3 text-center px-0">
                <button class="btn-max" wire:click='apply'>Application</button>
            </div>
        </div>

        <div class="mt-21"></div>
    </div>
</div>