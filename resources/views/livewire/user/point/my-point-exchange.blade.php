 <div class="row justify-content-center mt-3 ">
     <div class="col-md-10 col-12   h-20">
         <div class="box-bor-detail mb-20">
             <div class="point-chr-text my-3">To Exchange</div>
             <div class="form-group row mt-4">
                 <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Exchange quantity</label>
                 <input type="number" wire:model.defer="exchange_quantity" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mb-1" placeholder="">
                 <a href="#" class="btn-max ">MAX</a>
                 <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>

             </div>
             @error('exchange_quantity')
             <p class="error-message">{{ $message }}</p>
             @enderror

             <div class="form-group row mr-sp">
                 <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Exchange fee</label>
                 <input type="number" wire:model.defer="exchange_fee" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-1" placeholder="">

                 <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
             </div>
             @error('exchange_fee')
             <p class="error-message">{{ $message }}</p>
             @enderror

             <div class="form-group row mr-sp">
                 <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Conversion Quantity</label>
                 <input type="number" wire:model.defer="conversion_quantity" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-2 " placeholder="">

                 <div class="sub-mx-text pl-md-0 pl-3">T - POINT</div>
             </div>
             @error('conversion_quantity')

             <p class="error-message">{{ $message }}</p>
             @enderror

             <div class="form-group row mr-sp">
                 <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Balance after exchange</label>
                 <input type="number" wire:model.defer="balance_after_exchange" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-1" placeholder="">

                 <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
             </div>
             @error('balance_after_exchange')

             <p class="error-message">{{ $message }}</p>
             @enderror

             <div class="row def-spd justify-content-center">
                 <div class="col-11">
                     <div class="pv-add-app-text">- Exchanges cannot be canceled after they have been processed.</div>
                 </div>
             </div>

             <div class="row my-5 justify-content-center">
                 <div class="col-3 text-center px-0">
                     <a href="#" wire:click.prevent="transferPoint" class="btn-max">Exchange</a>
                 </div>
             </div>

         </div>
     </div>
 </div>

 <style>
     .error-message {
         color: red;
         text-align: center;
         padding: 0px;
     }

 </style>
