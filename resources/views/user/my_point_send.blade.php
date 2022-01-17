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

                        <div class="form-group row mr-sp">
                            <label
                                class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Transmission
                                fee</label>
                            <input type="text"
                                class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-1"
                                placeholder="">
                            <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
                        </div>
                        <div class="form-group row mr-sp">
                            <label
                                class="inp-pv col-xl-3 col-lg-12  col-md-12 col-12 pr-0 align-self-center text-xl-center text-lg-left">Balance
                                after transfer</label>
                            <input type="text"
                                class="form-control pro-pv-inputs col-xl-7 col-lg-9 col-md-9 col-sm-11 col-11 ml-2 mr-md-4 mr-2 "
                                placeholder="">
                            <div class="sub-mx-text pl-md-0 pl-3">ELIM POINT</div>
                        </div>

                        <div class="row def-spd ">

                            <div class="col-md-11 col-12 ml-xl-4 ml-0">
                                <div class="pv-add-app-text">- Transfer cannot be canceled after application.</div>
                            </div>
                        </div>
                        <div class="row my-5 justify-content-center">
                            <div class="col-3 text-center px-0">
                                <a href="#" class="btn-max">Send</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<!-- End ELIM point change  section-->


<!-- -----------search modal start----------------- -->

<div class="modal fade pr-0" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content " id="search-modal">
            <div class="modal-header border-bottom-0 mord-head">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="serch-modal" class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Search for members</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
                    <div class="row justify-content-center mb-2">
                        <div class="col-11 text-left">
                            <div class="first-select-option mr-1  mb-2">
                                <select name="" id="id">
                                    <option class="opt" value="ID">ID</option>
                                    <option value="nickname">nickname</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-3 col-sm-11 col-11 text-left mr-md-2 mr-0 pl-md-0 pl-3">
                            <div class="second-select-option mr-1  mb-2">
                                <select name="" id="id">
                                    <option class="" value="ID">=Search Options=</option>
                                    <option class="" value="ID">ID</option>
                                    <option value="nickname">nickname</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8 col-8 ml-md-2 ml-sm-0 pr-1 pl-0">
                            <input type="text" class="form-control search-pro-pv-input" placeholder="USER">
                        </div>
                        <div class="col-2 px-0 text-right mt-2">
                            <a href="#" class="search-modal-btn">Search</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class=col-12>
                            <div class="card-block table-border-style ">
                                <div class="container-fluid px-2">
                                    <div class="row">
                                        <div class="col-12 table-start">
                                            <table class="table modal-table-transfer dt-responsive ">
                                                <thead class="table-header-bg">
                                                    <tr>
                                                        <th class="borders-0">ID</th>
                                                        <th class="border-bottom-0">Nickname</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="defaultCheck1" checked>
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER01
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Hong Gil Dong</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER02
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Hong Gil Dong</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER03
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Hong Gil Dong</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    USER04
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Hong Gil Dong</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4 mt-3">
                        <div class="col-md-3 col-sm-3 col-3">
                            <a href="#" class="btn-model-select">Select</a>
                        </div>
                        <div class="col-md-4 col-sm-5 col-6">
                            <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">to
                                close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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