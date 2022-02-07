@extends('layouts.userlayout')

@section('content')
    <!-- Start Profile section-->


<div id="pvm-req-pg">
	<div class="bg05">
        <div class="header-title text-center">
            <h3 class="mb-0">My Info</h3>
        </div>
    </div>
</div>

<div id="profile-page">
    <div class="container mt-5">
        <div class="row mt-4 row justify-content-center mb-5">
            <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
                <div class="prfile-heading ">
                   PROFILE
                </div>
            </div>
        </div>
        @livewire('user.profile-picture')
        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
                <div class="el-pon-bor">
                    <div class="row justify-content-center">
                        <div class="col-5 text-left">
                            <div class="elm-pon-title">ELIM Point</div>
                            <div class="elm-pon-title">T - Point</div>


                        </div>
                        <div class="col-5 text-right">
                            <div class="elm-pon-title">{{Auth::user()->elim_points}}</div>
                            <div class="elm-pon-title">{{Auth::user()->t_points}}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <a href="{{route('user.mypointlist')}}" class="pon-detail-btn">Point details</a>
                </div>
            </div>
        </div>
        <form method="POST" action="{{route('user.profile.update')}}">
            @csrf
        <div class="row justify-content-center mt-4">
           <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
                <div class="form-group">
                    <label class="txt-td" for="usr">ID</label>
                    <input type="text" class="form-control pro-pg-input" placeholder="{{Auth::user()->user_id}}" disabled>
                </div>
                <div class="form-group">
                    <label  class="txt-td" for="usr">Email</label>
                    <input type="text" class="form-control pro-pg-input" placeholder="{{Auth::user()->email}}" disabled>
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">password</label>
                    <input type="password" class="form-control pro-pg-inputs" name="password" placeholder="Password will be changed upon input" >
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">nickname</label>
                    <input type="text" class="form-control pro-pg-inputs" name="nickname" placeholder="{{Auth::user()->nickname}}" value="{{Auth::user()->nickname}}">
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">Upbit ACCESS KEY</label>
                    <input type="text" class="form-control pro-pg-inputs" name="upbit_access_key" value="{{Auth::user()->upbit_access_key}}" >
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">Upbit SECRET KEY</label>
                    <input type="text" class="form-control pro-pg-inputs" name="upbit_secret_key" value="{{Auth::user()->upbit_secret_key}}" >
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5 mt-4">
            <button class="pro-save-btn mr-2">Save</button>
            <a href="#" class="pro-close-btn ml-2">To Close</a>
        </div>   
        <div class="mb-21"></div>
    </form>
    </div>
</div>


<!-- Start Profile end-->
@endsection