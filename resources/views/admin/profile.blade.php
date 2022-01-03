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
                            <h5>
                              My Profile

                            </h5>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="col-12 px-5">
                                <form>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Id</label>
                                        <input type="text" class="form-control inp-sp-tx inp-bg-sp" id="inputMyid" placeholder="admin04">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Name</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="Hong Gil Dong">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin mobile number</label>
                                            <div class="phone-list">
                                                <div class="input-group phone-input">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-mob" data-toggle="dropdown" aria-expanded="false"><span class="type-text mb-tds">KOR +82</span> <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a class="changeType" href="javascript:;" data-type-value="phone">Phone</a></li>
                                                            <li><a class="changeType" href="javascript:;" data-type-value="fax">Fax</a></li>
                                                            <li><a class="changeType" href="javascript:;" data-type-value="mobile">Mobile</a></li>
                                                        </ul>
                                                    </span>
                                                    <input type="hidden" name="phone[1][type]" class="type-input" value="" />
                                                    <input type="text" name="phone[1][number]" class="form-control " placeholder="01012345678" />
                                                </div>
                                                
                                            </div>
                                    </div>
                                
                                </div>

                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Manager's Department</label>
                                        <input type="text" class="form-control inp-sp-tx inp-bg-sp" id="inputMyid" placeholder="operation team">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Password</label>
                                        <input type="Password" class="form-control inp-sp-tx" id="inputMyid" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="mb-5 mt-4">
                                    <a href="#" class="btn ad-btn-save mt-3">
                                       Save
                                    </a>

                                    <a href="#" class="btn btn-list mt-3 ml-3">
                                        List
                                    </a>
                                </div>
                            </form>
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
@endsection