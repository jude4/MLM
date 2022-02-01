@extends('layouts.userlayout')

@section('content')
    <!-- Start trading  section-->

<div id="trad-section">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Trading History</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    @livewire('user.trade-history')
</div>




                
<!-- End trading  section-->



<!--Trad list view detail  Modal start -->
@livewire('user.modals.view-trade-details')

<!--Trad list view detail  Modal end -->



@livewire('user.modals.pause-trade')

@endsection


