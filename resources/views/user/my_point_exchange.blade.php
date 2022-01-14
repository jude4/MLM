@extends('layouts.userlayout')

@section('content')
<!-- Start ELIM point change  section-->

<div id="elim-point-sec">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">MY POINT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="my-point">
            <div class="top-head-poin text-center mb-5">MY POINT</div>
            @livewire('user.point.my-point')

            <div class="row mt-5 mb-5 justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-11 col-11 px-0">
                    <div class="elim-text">
                        <div class="available-sub-text"> ELIM POINT</div>
                        <div class="avl-img align-self-center">
                            <img src="{{asset('image/icon/arrow.png')}}" width="50px">
                        </div>
                        <div class="available-sub-text">T - POINT</div>
                    </div>
                </div>
            </div>
           
            @livewire('user.point.my-point-exchange')
        </div>
    </div>
</div>
</div>





<!-- End ELIM point change  section-->
@endsection
