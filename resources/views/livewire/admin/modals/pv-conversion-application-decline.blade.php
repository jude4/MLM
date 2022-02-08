<div id="pv-conversion-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 
@if ($editMode == true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" 
@else class="modal fade pr-0 in" aria-hidden="true"
@endif>
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header mod-disp">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cancelmodalclose()">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="row justify-content-center">
                  <div class="col-11 text-center">
                      <h4 class="modal-title trd-top-end text-center" id="exampleModalLongTitle">Cancel Confirmation</h4>
                  </div>
              </div>
              <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                  <div class="row justify-content-center">
                      <div class="col-11">
                          <div class="trd-pass-text">After the administrator cancels, the user application is immediately withdrawn.</div>
                          <div class="trd-pass-text">After final confirmation, please re-enter the administrator password.</div>
                      </div>
                  </div>

                  <div class="form-group row justify-content-center mt-5 mb-0">
                      <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                      <input type="text" id="cancelpassword" name="cancelpassword" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                      </div>
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                          <button class="btn-mod-end" id="tocancelbtn" onclick="cancelrequest()">Cancel</button>
                          </a>
                      </div>
                  </div>


              </div>
          </div>
      </div>
  </div>
</div>