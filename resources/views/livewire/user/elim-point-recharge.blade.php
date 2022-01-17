  <div class="container">
      <div class="point-to-charge">
          <div class="container   mt-5 my-point-tabs">
              <div>
                  <div class="top-head-charge text-center mb-2">To Charge</div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-12">
                      <div class="box-bor">
                          <div class="text-center top-elm-text my-4">500,000 <span class="ml-2"> ELIM POINT</span></div>
                          <div class="form-group row justify-content-center mt-4 mb-0">
                              <label class="lbl-chrg-inp col-lg-3 col-md-10 col-sm-10 col-10 align-self-center pl-0 p-lg-1">Amount to be deposited</label>
                              <input type="number" wire:model.defer="amount" class="form-control inp-chrg-box col-lg-8 col-md-10 col-sm-10 col-10" placeholder="500,000 won">
                          </div>
                          <div class="form-group row justify-content-center mt-4 mb-0">
                              <label class="lbl-chrg-inp col-lg-3 col-md-10 col-sm-10 col-10 align-self-center pl-0 p-lg-1">Our account number</label>
                              <input type="number" wire:model.defer="virtual_account_number" class="form-control inp-chrg-box col-lg-8 col-md-10 col-sm-10 col-10" placeholder="123-456-78910">
                          </div>
                          <div class="form-group row justify-content-center mt-4 mb-5">
                              <label class="lbl-chrg-inp col-lg-3 col-md-10 col-sm-10 col-10 align-self-center pl-0 p-lg-1">Name of bank</label>
                              <input wire:model.defer="our_bank" type="text" class="form-control inp-chrg-box col-lg-8 col-md-10 col-sm-10 col-10" placeholder="Our bank">
                          </div>

                      </div>
                  </div>
              </div>

              <div class="row justify-content-center mt-5">
                  <div class="col-12">
                      <div class="box-bor">
                          <div class="row justify-content-center">
                              <div class="col-11 pl-md-0 pl-md-4">
                                  <div class="text-md-left text-center top-elm-text mt-4">Depositor information</div>
                              </div>
                          </div>

                          <div class="form-group row justify-content-center mt-4 mb-0">
                              <label class="lbl-chrg-inp col-lg-3 col-md-10 col-sm-10 col-10 align-self-center pl-0 p-lg-1">Name of depositor</label>
                              <input wire:model.defer="name_of_depositor" value="{{ $name_of_depositor }}" type="text" class="form-control inp-chrg-box col-lg-8 col-md-10 col-sm-10 col-10" placeholder="">


                          </div>
                          <div class="form-group row justify-content-center mt-4 mb-0">
                              <label class="lbl-chrg-inp col-lg-3 col-md-10 col-sm-10 col-10 align-self-center pl-0 p-lg-1">Deposit account number</label>
                              <input type="number" wire:model.defer="account_number" class="form-control inp-chrg-box col-lg-8 col-md-10 col-sm-10 col-10" placeholder="">


                          </div>
                          <div class="form-group row justify-content-center mt-4 mb-5">
                              <label class="lbl-chrg-inp col-lg-3 col-md-10 col-sm-10 col-10 align-self-center pl-0 p-lg-1">Name of bank to deposit</label>
                              <input type="text" wire:model.defer="bank_name" class="form-control inp-chrg-box col-lg-8 col-md-10 col-sm-10 col-10" placeholder="">

                          </div>

                      </div>
                  </div>
              </div>
              <div class="row mb-20">
                  <div class="col-12">
                      <ul class="def-pay-text p-0 mt-5">
                          <li class="lis-typ">If payment is not made within 24 hours after application, cancellation will be processed.</li>
                          <li class="lis-typ">If the entered input information and actual deposit information do not match, charging is not possible.</li>
                          <li class="lis-typ">Cancellation after payment is not possible.</li>
                      </ul>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                      <div class="d-flex justify-content-between  my-5">
                          <button type="submit" class="btn-bottom-change" wire:click="submit">To Charge</button>
                          <a href="{{ route('user.elimpointcharge') }}" class="btn-bottom-back">Go Back</a>


                      </div>
                  </div>
              </div>


          </div>
      </div>
  </div>
