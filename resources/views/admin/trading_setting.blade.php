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
                            <h5>Trading Settings</h5>
                        </div>
                        <div class="card-block table-border-style overflow-auto">
                            <div class="col-12 px-5">
                                <form method="POST" action="{{route('admin.settradingsetting')}}">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Section transaction fee</label>
                                        <input type="text" class="form-control inp-sp-tx d-inline" id="inputMyid" name="section_transaction_fee" value="{{$setting->section_transaction_fee}}"  placeholder="">
                                        
                                    </div> 
                                    <div class="col-xl-1  p-lg-0 pl-3 align-self-end">
                                        <div class="t-poins-texts ">T POINT</div>
                                    </div>

                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Pursuit transaction fee</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" name="pursuit_transaction_fee" value="{{$setting->pursuit_transaction_fee}}"  placeholder="">
                                    </div> 
                                    <div class="col-xl-1  p-lg-0 pl-3 align-self-end">
                                        <div class="t-poins-texts ">T POINT</div>
                                    </div>                                                   
                                </div>

                                
                                

                                <div class="mb-5 mt-4">
                                    <button href="#" class="btn ad-btn-save mt-3">
                                       Save
                                    </button>

                                    <a href="{{route('admin.noticelist')}}" class="btn btn-list mt-3 ml-3">
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