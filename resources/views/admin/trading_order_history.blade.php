@extends('layouts.adminlayout')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="card ml-md-5">
                        <div class="card-header">
                            <h5>Trading order history</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3">Exel download</a>
                            </div>

                        </div>

                        @livewire('admin.trading-order-history')
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>



<!-- ------------trading order detail modal----------------- -->
@livewire('admin.modals.trade-order-details')

@livewire('admin.modals.pursue-trading')

<!-- ------------trading cancel modal----------------- -->
@livewire('admin.modals.cancel-trade')

<!-- ------------pause modal----------------- -->
@livewire('admin.modals.pause-trade')

<!-- ------------Restart modal----------------- -->
@livewire('admin.modals.restart-trade')

@endsection
