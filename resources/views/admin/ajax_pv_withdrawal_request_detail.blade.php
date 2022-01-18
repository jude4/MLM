<div class="col-12">
    <div class="">
        <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
            <div class="lft-sid-detail text-left">
                <div>ID</div>
                <div>nickname</div>
                <div>Application amount</div>
                <div>Account Number</div>
                <div>Name of bank </div>
                <div>Name of account </div>
                <div>holder</div>

            </div>
            <div class="lft-sid-detail text-right">
                <div>{{ $historydatas[0]->user_id }}</div>
                <div>{{ $historydatas[0]->nickname }}</div>
                <div>{{ $historydatas[0]->amount }}</div>
                <div>{{ $historydatas[0]->account_number }}</div>
                <div>{{ $historydatas[0]->bank_name }}</div>
                <div>{{ $historydatas[0]->name_of_account }}</div>
                <div>{{ $historydatas[0]->name_of_account }}</div>
            </div>
        </div>
    </div>
</div>