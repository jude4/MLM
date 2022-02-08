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
                            <h5>PV withdrawal request history</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3" onclick="exportData()">EXCEL Download</a>
                            </div>

                        </div>
                        @livewire('admin.withdrawal-request-history')

                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>


<!-- ------------cancel modal----------------- -->
@livewire('admin.modals.decline-elim-point-withdrawal')




<!-- ------------Approval modal----------------- -->
  @livewire('admin.modals.approve-elim-point-withdrawal')



@livewire('admin.modals.view-elim-point-withdrawal')



@endsection
