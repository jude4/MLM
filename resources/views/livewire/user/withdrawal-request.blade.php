  <div class="pvm-request">
      <div class="row justify-content-center mb-3">
          <div class="col-lg-8 col-md-9 col-sm-10 col-12">
              <div class="tab-heading">
                  Withdrawal Application
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-8 col-md-9 col-sm-10 col-12">
              <div class="form-group row mt-3">
                  <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Withdrawal request amount</label>

                  <input wire:model="amount" type="number" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                  <button wire:click="getMaxPv()" class="btn-max">MAX</button>
                  @error('amount')
                  <p class="error-msg mx-auto">{{ $message }}</p>
                  @enderror
                  
                  

              </div>
              <div class="form-group row mr-sp">
                  <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Withdrawal fee</label>
                  <input disabled wire:model.defer="withdrawal_fee" type="text" class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                  @error('withdrawal_fee')
                  <p class="error-msg mx-auto">{{ $message }}</p>
                  @enderror

              </div>
              <div class="form-group row mt-3">
                  <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Account number to receive</label>
                  <input wire:model.defer="account_number" type="number" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                  @error('account_number')
                  <p class="error-msg mx-auto">{{ $message }}</p>
                  @enderror

              </div>
              <div class="form-group row mt-3">
                  <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">name of bank</label>
                  <input wire:model.defer="bank_name" type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                  @error('bank_name')
                  <p class="error-msg mx-auto">{{ $message }}</p>
                  @enderror

              </div>
              <div class="form-group row mt-3">
                  <label class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center">Recipient name of account holder</label>
                  <input wire:model.defer="name_of_account" type="text" class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-9 ml-2" placeholder="">
                  @error('name_of_account')
                  <p class="error-msg mx-auto">{{ $message }}</p>
                  @enderror
              </div>

              <div class="row def-sp">
                  <div class="col-12">
                      <div class="pv-add-app-text">- Withdrawal request is completed within 24 hours after administrator approval.</div>
                      <div class="pv-add-app-text">-- Cancellation of application is possible only before approval, and cancellation after approval is not possible.</div>
                      <div class="pv-add-app-text">- Errors in account number input cannot be corrected after application, so please check again before proceeding.</div>
                  </div>
              </div>
              <div class="row mt-3 justify-content-end">
                  <div class="col-3 text-center px-0">

                      <button type="submit" wire:click.prevent="withdraw" class="btn-max">Application</button>
                  </div>
              </div>
              <div class="mt-21"></div>
          </div>
      </div>
  </div>

  <style>
      .error-msg {
          color: red;
      }

  </style>
