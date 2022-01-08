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
                            <h5>1:1 Inquiry Answer</h5>
                        </div>
                        <div class="card-block table-border-style overflow-auto">
                            <div class="col-12 px-5">
                                <form method="POST" action="{{route('admin.reply.oneononeinquiry')}}">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">ID</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" name="id" placeholder="" value="{{$inquiry->id}}">
                                    </div>                                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Nickname</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="" value='{{$inquiry->user->nickname}}'>
                                    </div>
                                                                                        
                                </div>
                                <div class="form-group row">
                                  <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Inquiry subject</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="" value="{{$inquiry->subject}}">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                  <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Inquiry </label>
                                       <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10">
                                           {{$inquiry->inquiry}}
                                       </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Answer content </label>
                                       <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="answer">
                                           {{$inquiry->answer}}
                                       </textarea>
                                    </div>
                                </div>

                                <div class="mb-5 mt-4">
                                    <button class="btn ad-btn-save mt-3">
                                       Save
                                    </button>

                                    <a href="{{route('admin.oneononeinquiry')}}" class="btn btn-list mt-3 ml-3">
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