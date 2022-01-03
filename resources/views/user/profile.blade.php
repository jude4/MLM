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
        <div class="row mt-4 row justify-content-center mb-5">
            <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
                <div class="row">
                    <div class="col-4 text-left">
                        <div class="pro-user-img">
                            <img src="{{asset('image/icon/user.png')}}" width="85px">
                        </div>
                    </div>
                    <div class="col-8 text-right">
                        <div class="btn-section mb-4">
                            <a href="#" class="img-exchange-btn">Image Change</a>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="img-initial-btn">Image initialization</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
                <div class="el-pon-bor">
                    <div class="row justify-content-center">
                        <div class="col-5 text-left">
                            <div class="elm-pon-title">ELIM Point</div>
                            <div class="elm-pon-title">T - Point</div>


                        </div>
                        <div class="col-5 text-right">
                            <div class="elm-pon-title">25,000</div>
                            <div class="elm-pon-title">87,000</div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <a href="{{route('user.mypointlist')}}" class="pon-detail-btn">Point details</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
           <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
                <div class="form-group">
                    <label class="txt-td" for="usr">ID</label>
                    <input type="text" class="form-control pro-pg-input" placeholder="Gyewang01">
                </div>
                <div class="form-group">
                    <label  class="txt-td" for="usr">Email</label>
                    <input type="text" class="form-control pro-pg-input" placeholder="Gyewang01@gmail.com">
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">password</label>
                    <input type="password" class="form-control pro-pg-inputs" >
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">nickname</label>
                    <input type="password" class="form-control pro-pg-inputs" placeholder="Gyewang01">
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">Upbit ACCESS KEY</label>
                    <input type="password" class="form-control pro-pg-inputs" >
                </div>
                <div class="form-group">
                    <label class="txt-td" for="usr">Upbit SECRET KEY</label>
                    <input type="password" class="form-control pro-pg-inputs" >
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5 mt-4">
            <a href="#" class="pro-save-btn mr-2">Save</a>
            <a href="#" class="pro-close-btn ml-2">To Close</a>
        </div>   
        <div class="mb-21"></div>
    </div>
</div>


<!-- Start Profile end-->
@endsection