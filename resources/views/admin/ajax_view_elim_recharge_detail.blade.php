<div class="row justify-content-center">
    <div class="col-11 text-center">
        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">View deposit information</h4>
    </div>
</div>
<div class="row justify-content-center mt-3">
    <div class="col-12">
        <div class="box-shad-arou">
            <div class="d-flex justify-content-between p-md-3 p-2 ">
                <div class="lft-sid-detail text-left">
                    <div>recharge amount</div>
                    <div>virtual account number</div>
                    <div>name of bank</div>
                </div>
                <div class="lft-sid-detail text-right">
                    <div>{{$recharge[0]->amount ?? null}} won</div>
                    <div>{{$recharge[0]->virtual_account_number ?? null}}</div>
                    <div>{{$recharge[0]->bank_name ?? null}}</div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-12">
        <div class="">
            <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                <div class="lft-sid-detail text-left">
                    <div>ID</div>
                    <div>nickname</div>
                    <div>Name of depositor</div>
                    <div>deposit account number</div>
                    <div>Name of bank to deposit</div>

                </div>
                <div class="lft-sid-detail text-right">
                    <div>{{$recharge[0]->user->user_id ?? null}}</div>
                    <div>{{$recharge[0]->user->nickname ?? null}}</div>
                    <div>{{$recharge[0]->name_of_depositor ?? null}}</div>
                    <div>{{$recharge[0]->account_number ?? null}}</div>
                    <div>{{$recharge[0]->bank_name ?? null}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-5">
    <div class="col-6 text-center">
        <a href="#" class="btn-mod-conf" data-dismiss="modal">Confirm</a>
    </div>
</div>