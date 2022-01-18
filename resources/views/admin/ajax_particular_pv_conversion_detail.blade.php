<div class="col-12">
    <div class="">
        <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
            <div class="lft-sid-detail text-left">
                <div>ID</div>
                <div>nickname</div>
                <div>Application amount</div>
                <div>conversion fee</div>
                <div>Quantity after </div>
                <div>Quantity after conversion </div>


            </div>
            <div class="lft-sid-detail text-right">
                <div>{{ $historydatas[0]->user_id }}</div>
                <div>{{ $historydatas[0]->nickname }}</div>
                <div>{{ $historydatas[0]->amount }} won</div>
                <div>{{ $historydatas[0]->fee }} won</div>
                <div>{{ $historydatas[0]->amount }} won</div>
                <div>{{ $historydatas[0]->quantity_after_conversion }} ELIM POINTs</div>
            </div>
        </div>
    </div>
</div>