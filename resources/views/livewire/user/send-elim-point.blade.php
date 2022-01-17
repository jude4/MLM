   <div class="row justify-content-center mt-5">
       <div class="col-md-10 col-12   h-20">
           <div class="box-bor-detail ">
               <div class="point-chr-text my-3">Send</div>

               <div class="form-group row mt-4">
                   <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">ID to send</label>
                   <input type="text" wire:model="userId" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mb-1" disabled placeholder="">
                   <a href="#" class="btn-max" wire:click="$emit('setAddId', {{ $userId ?? auth()->id() }})" data-toggle="modal" data-target="#search-modal">search</a>
                   @error('userId')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
               </div>

               <div class="form-group row mt-4">
                   <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">
                       Transfer quantity</label>
                   <input type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mb-1" placeholder="">
                   <button wire:click="getMaxElim" class="btn-max">MAX</button>

                   <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
               </div>

               <div class="form-group row mr-sp">
                   <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Transmission fee</label>
                   <input type="number" wire:model.defer="transmission_fee" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-1" placeholder="">
                   <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
               </div>
               <div class="form-group row mr-sp">
                   <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Balance after transfer</label>
                   <input type="number" disabled wire:model.defer="balance_after_exchange" disabled class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-2 " placeholder="">

                   <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
               </div>

               <div class="row def-spd ">

                   <div class="col-md-11 col-12 ml-xl-4 ml-0">
                       <div class="pv-add-app-text">- Transfer cannot be canceled after application.</div>
                   </div>
               </div>
               <div class="row my-5 justify-content-center">
                   <div class="col-3 text-center px-0">
                       <a href="#" class="btn-max">Send</a>
                   </div>
               </div>

           </div>
       </div>
   </div>
