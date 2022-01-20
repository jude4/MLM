<div class="col-12">
    <div class="">
        <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
            <div class="lft-sid-detail text-left">
                <div>ID</div>
                <div>nickname</div>
                <div>Incoming ID</div>
                <div>receiving nickname</div>
                <div>transfer quantity</div>
                <div>transfer fee </div>
            </div>
            <div class="lft-sid-detail text-right">
                <div>{{ $historydatas[0]->user_id }}</div>
                <div>{{ $historydatas[0]->nickname }}</div>
                <div>{{ $historydatas[0]->incoming_id }}</div>
                <div>{{ $historydatas[0]->receiving_nickname }}</div>
                <div>{{ $historydatas[0]->quantity }} won</div>
                <div>{{ $historydatas[0]->fee }} won</div>
            </div>
        </div>
    </div>
</div>