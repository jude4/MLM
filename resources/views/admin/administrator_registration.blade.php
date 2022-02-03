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
                                Register & Edit Administrator
                            </h5>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="col-12 px-5">
                                <form method="POST" action="{{route('admin.register.admin')}}">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Id</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" name='admin_id' placeholder="Please enter your ID." value="{{old('admin_id')}}">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Name</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" name='name' value="{{old('name')}}" placeholder="Input your name, please.">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin mobile number</label>
                                            <div class="phone-list">
                                                <div class="input-group phone-input">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-mob" data-toggle="dropdown" aria-expanded="false"><span class="type-text  mb-tds">KOR +82</span> <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a class="changeType" href="javascript:;" data-type-value="phone">Phone</a></li>
                                                            <li><a class="changeType" href="javascript:;" data-type-value="fax">Fax</a></li>
                                                            <li><a class="changeType" href="javascript:;" data-type-value="mobile">Mobile</a></li>
                                                        </ul>
                                                    </span>
                                                    <input type="hidden" name="phone[1][type]" class="type-input" value="" />
                                                    <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Please enter your mobile number" />
                                                </div>
                                                
                                            </div>
                                    </div>
                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Manager's Department</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" name='department' value="{{old('department')}}" placeholder="Please enter your department.">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Password</label>
                                        <input type="password" class="form-control inp-sp-tx" id="inputMyid" name='password' placeholder="">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">

                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin status</label>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-7 col-12">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="active" value="1" checked>
                                                    <label class="custom-control-label" for="defaultGroupExample1">Active</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12">
                                                <div class="custom-control custom-radio ">
                                          <input type="radio" class="custom-control-input " id="defaultGroupExample2" name="active" value="0" >
                                          <label class="custom-control-label" for="defaultGroupExample2">Inactive</label>
                                        </div>
                                        </div>
                                        </div>
                                        

                                        <!-- Group of default radios - option 2 -->
                                        
                                    </div>
                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Notes</label>
                                        <input type="text" name="notes" value="{{old('notes')}}" class="form-control inp-sp-tx" id="inputMyid" placeholder="Please enter what you want to remember.">
                                    </div>
                                    
                                
                                </div>
                                <div class="mb-5 mt-4">
                                    <button class="btn ad-btn-save mt-3">
                                       Save
                                    </button>

                                    <a href="{{route('admin.administratorlist')}}" class="btn btn-list mt-3 ml-3">
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