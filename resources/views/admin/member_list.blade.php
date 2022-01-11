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
                            <h5>Member List</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3">Exel download</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto">
                            <div class="container-fluid">
                                <form>
                                    <div class="row justify-content-md-end px-2">
                                        <div class="">
                                            <div
                                                class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                                                <div class="start-date-input">
                                                    <input type="date" class="form-control" id="pure-date"
                                                        aria-describedby="date-design-prepend">
                                                </div>
                                                <div
                                                    class="exchage-icon align-items-center d-flex justify-content-center">
                                                    ~
                                                </div>
                                                <div class="end-date-input">
                                                    <input type="date" class="form-control" id="pure-date"
                                                        aria-describedby="date-design-prepend">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row justify-content-md-end">
                                        <div class="col-12 d-flex justify-content-md-end">
                                            <div class="select-main-group ml-1 ">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select">
                                                        <option value="status" selected>
                                                            =Member Type=
                                                        </option>
                                                        <option value="activation" class="text-left">
                                                            General Membership
                                                        </option>
                                                        <option value="inactive" class="text-left">
                                                            MLM member
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select">
                                                        <option value="status" selected>
                                                            =Status=
                                                        </option>
                                                        <option value="activation" class="text-left">
                                                            activation
                                                        </option>
                                                        <option value="inactive" class="text-left">
                                                            inactive
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="input-group float-left w-auto mb-2">
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select">
                                                            <option value="status" selected>
                                                                =Search Options=
                                                            </option>
                                                            <option value="activation" class="text-left">
                                                                Id
                                                            </option>
                                                            <option value="inactive" class="text-left">
                                                                nickname
                                                            </option>

                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        placeholder="Please select a search option.">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search">Search</button>
                                                    <button type="button" class="btn btn-reset">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-12 table-start">
                                        <p class="count-list">Total : 14 Count (1/1)Page</p>
                                        <table
                                            class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove">
                                            <thead class="table-header-bg">
                                                <tr>
                                                    <th class="border-bottom-0">No.</th>
                                                    <th class="border-bottom-0">PK</th>
                                                    <th class="border-bottom-0">Member type</th>
                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">Nickname</th>
                                                    <th class="border-bottom-0">E-mail</th>
                                                    <th class="border-bottom-0">ELIM POINT balance</th>
                                                    <th class="border-bottom-0">T-POINT balance</th>
                                                    <th class="border-bottom-0">Available PV</th>
                                                    <th class="border-bottom-0">Earned PV</th>
                                                    <th class="border-bottom-0">State</th>
                                                    <th class="border-bottom-0">Registration date</th>
                                                    <th class="border-bottom-0">Correction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $index => $user)
                                                <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>30</td>
                                                    <td>{{$user->type == 0? 'Normal': 'MLM'}}</td>
                                                    <td>{{$user->user_id}}</td>
                                                    <td>{{$user->nickname}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->elim_points}}</td>
                                                    <td>{{$user->t_points}}</td>
                                                    <td>{{$user->available_pv == 0? '-': $user->available_pv}}</td>
                                                    <td>{{$user->earned_pv == 0? '-': $user->earned_pv}}</td>
                                                    <td>{{$user->status?'active':'inactive'}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td class="">
                                                        <a href="{{route('admin.membermodification', ['id' => $user->id])}}" class="btn  btn-correction">
                                                            Correction
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td>1</td>
                                                    <td>30</td>
                                                    <td>Normal</td>
                                                    <td>USER01</td>
                                                    <td>Hong Gil Dong</td>
                                                    <td>USER01@GMAIL.COM</td>
                                                    <td>1,542,830</td>
                                                    <td>1,542,830</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>activation</td>
                                                    <td>2020-12-10 10:35:52</td>
                                                    <td class="">
                                                        <a href="member-modification.html" class="btn  btn-correction">
                                                            Correction
                                                        </a>
                                                    </td>
                                                </tr> --}}


                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>

<!-- ------------coin holding modal----------------- -->

<div class="modal fade" id="coin_holding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <div class="mod-head ml-3">Coin and point holdings by member</div>
                </div>
                <div class="d-flex flex-column text-center">

                    <form>
                        <div class="form-group  row justify-content-center mb-2 mt-4">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">BTC</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="1.2345678">
                            </div>
                        </div>

                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">ETH</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="1.2345678">
                            </div>
                        </div>
                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">USDT</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="51">
                            </div>
                        </div>
                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">BSC</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="1.2345678">
                            </div>
                        </div>
                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">GRB</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="1.2345678">
                            </div>
                        </div>
                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">GNBP</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="1.2345678">
                            </div>
                        </div>
                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3 text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">A POINT</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="5000">
                            </div>
                        </div>
                        <div class="form-group  row justify-content-center mb-2 mt-2">
                            <div class="col-3  text-left">

                                <label for="inputMyid" class=" col-form-label excd-txts">B POINT</label>

                            </div>
                            <div class="col-8  text-right">
                                <input type="text" class="form-control inp-sp-tx  text-right excd" id="inputMyid"
                                    placeholder="25000">
                            </div>
                        </div>
                    </form>



                    <div class="row mt-3 mb-2 btn-spn justify-content-center">
                        <div class="col-md-6 col-sm-6 col-6 ">
                            <a href="#" class="btn  btn-close mt-3"> Close
                            </a>
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection