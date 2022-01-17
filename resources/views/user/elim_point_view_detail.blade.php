@extends('layouts.userlayout')

@section('content')
<!-- Start ELIM Point view detail  section-->

<div id="elim-point-sec">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Elim points recharge</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('user.elim-point-recharge', ['amount' => $amount])
</div>

<!-- End ELIM Point view detail  section-->
@endsection
