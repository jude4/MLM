@extends('layouts.adminlayout')

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Bas
                        0.ic table card start -->
                    <div class="card ml-md-5 def-cart-sp">
                        <div class="card-header">
                            <h5>
                                Member Edit
                            </h5>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="col-12 px-md-5 px-3">
                                <form>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                type</label>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-7 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio"
                                                            class="custom-control-input"
                                                            id="defaultGroupExample1"
                                                            name="groupOfDefaultRadios" checked="">
                                                        <label class="custom-control-label"
                                                            for="defaultGroupExample1">Normal</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio"
                                                            class="custom-control-input "
                                                            id="defaultGroupExample2"
                                                            name="groupOfDefaultRadios">
                                                        <label class="custom-control-label"
                                                            for="defaultGroupExample2">MLM</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid"
                                                class=" col-form-label ">Membership Status</label>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-7 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio"
                                                            class="custom-control-input"
                                                            id="defaultGroupExample1"
                                                            name="groupOfDefaultRadios" checked="">
                                                        <label class="custom-control-label"
                                                            for="defaultGroupExample1">Active</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio"
                                                            class="custom-control-input "
                                                            id="defaultGroupExample2"
                                                            name="groupOfDefaultRadios">
                                                        <label class="custom-control-label"
                                                            for="defaultGroupExample2">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                ID</label>
                                            <input type="text"
                                                class="form-control inp-sp-tx inp-bg-sp"
                                                id="inputMyid" placeholder="USER01">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                password</label>
                                            <input type="Password"
                                                class="form-control inp-sp-tx inp-bg-sp"
                                                id="inputMyid" placeholder="">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid"
                                                class=" col-form-label ">nickname</label>
                                            <input type="text"
                                                class="form-control inp-sp-tx inp-bg-sp"
                                                id="inputMyid" placeholder="Hong Gil Dong">
                                        </div>


                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                Email</label>
                                            <input type="text"
                                                class="form-control inp-sp-tx inp-bg-sp"
                                                id="inputMyid"
                                                placeholder="0x7636541260B944A4238D50687daB3418585a3536">
                                        </div>
                                        <div class=" col-xl-3 col-lg-6 col-md-6 ">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">image
                                                file</label>
                                            <input type="file" name="img[]" class="file"
                                                accept="image/*">
                                            <div class="input-group ">
                                                <input type="text" class="form-control ff-con"
                                                    placeholder="" id="file">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div
                                                class="input-group-append pt-md-3 mt-md-3  pt-1 mt-0">
                                                <button type="button"
                                                    class="browse btn btn-file-selects">Select
                                                    file</button>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Upbit
                                                ACCESS KEY</label>
                                            <input type="text"
                                                class="form-control inp-sp-tx inp-bg-sp pos-sv"
                                                id="inputMyid" placeholder="">
                                            <img src="assets/images/post.png" class="pos-scg"
                                                width="30px">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Upbit
                                                SECRET KEY</label>
                                            <input type="text"
                                                class="form-control inp-sp-tx inp-bg-sp pos-sv"
                                                id="inputMyid" placeholder="">
                                            <img src="assets/images/post.png" class="pos-scg"
                                                width="30px">
                                        </div>
                                    </div>
                                    <div class="mb-5 mt-4">
                                        <a href="#" class="btn ad-btn-save mt-3">
                                            Save
                                        </a>

                                        <a href="member_list.html" class="btn btn-list mt-3 ml-3">
                                            List
                                        </a>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <!-- Main-body end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- -----------------to modify avtar modal--------------- -->


<div class="modal fade" id="to_change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content mod-sub">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-title text-center">
                <div class="mod-head">Changing your avatar</div>
            </div>
            <div class="d-flex flex-column text-center">
                <div class="row mt-4">
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m01.png">
                        </div>
                    </div>
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m02.png">
                        </div>
                    </div>
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m03.png">
                        </div>
                    </div>
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m04.png">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m05.png">
                        </div>
                    </div>
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m04.png">
                        </div>
                    </div>
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m01.png">
                        </div>
                    </div>
                    <div class=" col-3 ">
                        <div class="mod-img">
                            <img src="assets/images/m02.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-2 justify-content-center">
                    <div class="col-4">
                        <a href="#" class="btn  btn-select mt-3"> select
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn  btn-cancel mt-3"> cancel
                        </a>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
</div>


<!-- -----------------Increase or Decrease button modal--------------- -->

<div class="modal fade" id="increase_decrease" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content mod-sub">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-title text-center">
                <div class="mod-head">increase or decrease points</div>
            </div>
            <div class="d-flex flex-column text-center">
                <form>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Admin Id</label>
                            <input type="text" class="form-control inp-sp-tx mod-inc-inp" id="inputMyid"
                                placeholder="admin03">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">password</label>
                            <input type="Password" class="form-control inp-sp-tx " id="inputMyid"
                                placeholder="Please enter the administrator password.">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">point selection</label>
                            <select class="custom-select my-1 mr-sm-2 in-first opt-txt"
                                id="inlineFormCustomSelectPref">
                                <option selected="" class="option">GRBP</option>
                                <option class="option" value="1">One</option>
                                <option class="option" value="2">Two</option>
                                <option class="option" value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row  justify-content-center mb-2">

                        <div class="col-11 text-left ">
                            <label for="inputMyid" class=" col-form-label">increase or decrease </label>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">Payments
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label " for="flexRadioDefault1">Deduction
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-6  ">

                        </div>
                    </div>

                    <div class="form-group row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Point history </label>
                            <input type="Password" class="form-control inp-sp-tx " id="inputMyid" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Points </label>
                            <input type="Password" class="form-control inp-sp-tx " id="inputMyid" placeholder="">
                        </div>
                    </div>
                </form>
                <div class="row mt-3 mb-2 justify-content-center mb-2">
                    <div class="col-sm-4 col-6">
                        <a href="#" class="btn  btn-approval mt-3"> Approval
                        </a>
                    </div>
                    <div class="col-sm-4 col-6">
                        <a href="#" class="btn  btn-close mt-3"> close

                        </a>
                    </div>

                </div>




            </div>
        </div>
    </div>
</div>
</div>



<!-- -----------------vouchar stake button modal--------------- -->

<div class="modal fade" id="voucher_staking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content mod-sub">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-title text-left">
                <div class="mod-head ml-3">Gift-card staking</div>
            </div>
            <div class="d-flex flex-column text-center">

                <form>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">
                            <label for="inputMyid" class=" col-form-label">Amount ($)</label>
                            <input type="text" class="form-control inp-sp-tx " id="inputMyid" placeholder="1200">
                        </div>
                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">
                            <label for="inputMyid" class=" col-form-label">Annual interest rate(%)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="1.0%">
                        </div>
                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Peroid(day)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-dets" id="inputMyid"
                                placeholder="">
                        </div>
                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Expected interest(GRBP)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="000 GRBP">
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center">
                    <div class="col-11 text-left snd">
                        <ul class="detail-stak ml-3">
                            <li>Staking is possible from a minimum of 7 days.</li>
                            <li>Staking interest is paid in GRBP.</li>
                            <li>If you stop staking, only the original amount will be returned.</li>
                        </ul>

                    </div>
                </div>


                <div class="row mt-3 mb-2 btn-spn">
                    <div class="col-md-6 col-sm-6 col-6 text-left">
                        <a href="#" class="btn  btn-exchn mt-3" onclick="myFunction()" data-toggle="modal"
                            data-target="#abort_stop"> Staking
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 text-right">
                        <a href="#" class="btn  btn-can mt-3"> Cancel
                        </a>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
</div>



<!-- -----------------exchange button modal--------------- -->

<div class="modal fade" id="exchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content mod-sub">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-title text-left">
                <div class="mod-head ml-3">Redeem a Gift Voucher</div>
            </div>
            <div class="d-flex flex-column text-center">
                <div class="row mt-4 justify-content-center">
                    <div class=" col-11 text-center">
                        <img src="assets/images/crd01.png" width="100%">
                        <div class="exch-mod-txt">5000 USD Gift Certificate</div>
                        <div class="ex-ins-dt"> Issuance date 2021-11-01</div>
                    </div>
                </div>
                <form>

                    <div class="form-group row  justify-content-center mb-2">

                        <div class="col-11 text-left ">
                            <label for="inputMyid" class=" col-form-label">exchange form </label>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">coin
                                        </label>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Exchange Coin</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="GRB">
                        </div>
                    </div>

                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Current Price</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="420 GRB">
                        </div>
                    </div>





                </form>



                <div class="row mt-3 mb-2 btn-spn">
                    <div class="col-md-6 col-sm-6 col-6 text-left">
                        <a href="#" class="btn  btn-exchn mt-3"> Exchange
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 text-right">
                        <a href="#" class="btn  btn-can mt-3"> Cancel
                        </a>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
</div>


<!-- -----------------stop stake button modal--------------- -->

<div class="modal fade" id="stop_staking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content mod-sub">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-title text-left">
                <div class="mod-head ml-3">Gift-card staking Stop</div>
            </div>
            <div class="d-flex flex-column text-center">

                <form>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">
                            <label for="inputMyid" class=" col-form-label">Amount ($)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="1200">
                        </div>
                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Annual interest rate(%)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="1.0%">
                        </div>
                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Peroid(day)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="365 Days">
                        </div>
                    </div>
                    <div class="form-group  row justify-content-center mb-2">
                        <div class="col-11  text-left">

                            <label for="inputMyid" class=" col-form-label">Expected interest(GRBP)</label>
                            <input type="text" class="form-control inp-sp-tx ex-inp-det" id="inputMyid"
                                placeholder="000 GRBP">
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center">
                    <div class="col-11 text-left snd">
                        <ul class="detail-stak">
                            <li>Staking is possible from a minimum of 7 days.</li>
                            <li>Staking interest is paid in GRBP.</li>
                            <li>If you stop staking, only the original amount will be returned.</li>
                        </ul>
                    </div>
                </div>


                <div class="row mt-3 mb-2 btn-spn">
                    <div class="col-md-6 col-sm-6 col-6 text-left">
                        <a href="#" class="btn  btn-exchn mt-3"> Stop
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 text-right">
                        <a href="#" class="btn  btn-can mt-3"> Cancel
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection