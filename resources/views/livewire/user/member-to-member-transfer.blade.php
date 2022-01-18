   <div class="row justify-content-center mb-21">
       <div class="col-lg-8 col-md-9 col-sm-10 col-12">
           <div class="form-group row mt-3">
               <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">ID to Send</label>
               <input type="text" disabled wire:model="userId" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
               <a href="#" class="btn-max" wire:click="$emit('setAddId', {{ $userId ?? auth()->id() }})" data-toggle="modal" data-target="#search-modal">Search</a>
               @error('userId')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
               @enderror

           </div>
           <div class="form-group row mr-sp">
               <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Transfer Quantity</label>
               <input type="number" wire:model="exchange_quantity" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
               <button wire:click="getMaxPv" class="btn-max-second">MAX</button>

           </div>
           <div class="form-group row mt-3">
               <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Transfer Fee</label>
               <input type="number" wire:model.defer="exchange_fee" disabled class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">

           </div>
           <div class="form-group row mt-3">
               <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Balance After Transfer</label>
               <input type="number" wire:model.defer="balance_after_exchange" disabled class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">

           </div>

           <div class="row def-sp">
               <div class="col-12">
                   <div class="pv-add-app-text">- Cancellation after delivery is not possible.</div>
               </div>
           </div>
           <div class="row mt-3 justify-content-end">
               <div class="col-3 text-center px-0">
                   <button wire:click="transfer()" type="submit" class="btn-max">Application</button>
               </div>
           </div>
           <div class="mt-21"></div>

       </div>
   </div>
