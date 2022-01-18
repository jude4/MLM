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

            <div class="row justify-content-center mt-5">
                <div class="col-md-10 col-12   h-20">
                    <div class="box-bor-detail ">
                        <div class="point-chr-text my-3">Send</div>

                        <div class="form-group row mt-4">
                            <label
                                class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">ID
                                to send</label>
                            <input type="text"
                                class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mb-1"
                                placeholder="">
                            <a href="#" class="btn-max" data-toggle="modal" data-target="#search-modal">search</a>

                        </div>

                        <div class="form-group row mt-4">
                            <label
                                class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">
                                Transfer quantity</label>
                            <input type="text"
                                class="form-control pro-pv-input col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mb-1"
                                placeholder="">
                            <a href="#" class="btn-max ">MAX</a>
                            <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
                        </div>
                    </div>
                </div>
                
                @livewire('user.send-elim-point')
            </div>
        </div>
    </div>
</div>
</div>





<!-- End ELIM point change  section-->


<!-- -----------search modal start----------------- -->
@livewire('user.modals.search-member')


<!-- -----------search modal end----------------- -->
@endsection

@section('scrips')
<!--  ==========x==========x========== START DATATABLE  JS ==========x==========x========== -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>


<script>
    $('table').DataTable();  
</script>

<!-- ==========x==========x========== END DATATABLE  JS ==========x==========x========== -->
@endsection