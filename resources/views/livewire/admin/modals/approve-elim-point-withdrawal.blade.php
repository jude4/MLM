

<div id="pv-withdrawal-approval-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header mod-disp text-center">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-11 text-center">
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Confirm Approval</h4>
                    </div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="trd-pass-text">
                                {{ $user->nickname ?? null }}
                                For final approval, please re-enter the administrator password.</div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-5 mb-0">
                        <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                        <input type="Password" name="password" id="approvepassword" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center mt-4">
                    <div class="col-11 text-left pl-4">
                        <label class="lble-chrg-inpds  text-left" for="  ">COMMENT</label>
                        <textarea class="form-control rounded-0 inp-chrgs-boxd" id="approvecomment" name="comment" rows="5">
                            </textarea>
                    </div>
                </div>

                <div class="row justify-content-center mt-8">
                    <div class="col-6">
                        <button class="btn-mod-conf" id="toapprovebtn" onclick="approverequest()">To Approve</button>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
