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
                            <h5>Notice edit</h5>
                        </div>
                        <div class="card-block table-border-style overflow-auto">
                            <div class="col-12 px-5">
                                <form method="POST" action="{{route('admin.modify.notice')}}">
                                    @csrf
                                    <input type="text" name="id" id="" value="{{$notice->id}}" hidden>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Notice title</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="Notice." name="title" value="{{$notice->title}}">
                                    </div>                                                    
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Notice number of views</label>
                                        <input type="text" class="form-control inp-sp-tx pns-chang" id="inputMyid" placeholder="7,245" name="views" value="{{$notice->views}}">
                                    </div>                                                    
                                </div>

                                <div class="form-group row">
                                  <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Notice contents </label>
                                       <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Notice." name="content">
                                        {{$notice->content}}
                                       </textarea>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4">
                                    <i class="fas fa-caret-right"></i>
                                    <label for="inputMyid" class=" col-form-label ">Whether or not to use</label>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-7 col-12">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="used" value="1" {{$notice->used?'checked':''}}>
                                                <label class="custom-control-label" for="defaultGroupExample1">used</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-12">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="defaultGroupExample2" name="used" value="0" {{$notice->used?'':'checked'}}>
                                                <label class="custom-control-label" for="defaultGroupExample2">not used</label>
                                            </div>
                                        </div>
                                    </div>                                                            
                                </div>

                                <div class="mb-5 mt-4">
                                    <button class="btn ad-btn-save mt-3">
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