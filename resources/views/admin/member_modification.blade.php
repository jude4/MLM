@extends('layouts.adminlayout')

<style>
    .edit-user-select {
    padding: 7px 20px;
    display: table;
    color: #000000;
    background-color: #C4C4C4;
    border: 1px solid #000000;
    border-radius: 6px;
}

.edit-user-select input[type="file"] {
    display: none;
}
</style>
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
                                <form method="post" action="{{route('admin.update.member')}}" enctype="multipart/form-data">
                                     @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <input type="hidden" name="old_image" value="{{$user->image}}">
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                type</label>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-7 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input" id="defaultGroupExample10" name="membertype"  @if($user->type == 'General Member')
                                                        checked
                                                        @endif value="0">
                                                        <label class="custom-control-label" for="defaultGroupExample10">Normal</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input " id="defaultGroupExample20" name="membertype"  @if($user->type == 'MLM Member')
                                                        checked
                                                        @endif value="1">
                                                        <label class="custom-control-label" for="defaultGroupExample20">MLM</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Membership Status</label>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-7 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="status" @if ($user->status)
                                                        checked
                                                        @endif value="1">
                                                        <label class="custom-control-label" for="defaultGroupExample1">Active</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input " name="status" id="defaultGroupExample2" @if (!$user->status)
                                                        checked
                                                        @endif
                                                        value="0">
                                                        <label class="custom-control-label" for="defaultGroupExample2">Inactive</label>
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
                                            <input type="text" name="memberid" class="form-control inp-sp-tx inp-bg-sp" id="inputMyid" placeholder="USER01" value="{{$user->user_id}}">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                password</label>
                                            <input type="Password" name="password" class="form-control inp-sp-tx inp-bg-sp" id="inputMyid" placeholder="">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">nickname</label>
                                            <input type="text" name="nickname" class="form-control inp-sp-tx inp-bg-sp" id="inputMyid" placeholder="Hong Gil Dong" value="{{$user->nickname}}">
                                        </div>


                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Member
                                                Email</label>
                                            <input type="text" name="email" class="form-control inp-sp-tx inp-bg-sp" id="inputMyid" placeholder="0x7636541260B944A4238D50687daB3418585a3536" value="{{$user->email}}">
                                        </div>
                                        <div class=" col-xl-3 col-lg-6 col-md-6 ">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">image file</label>
                                            
                                            <div class="input-group ">
                                                <input type="text" class="form-control ff-con" placeholder="" id="filename" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-12 mt-2">
                                            <label class="mx-5 mt-4 edit-user-select"> SELECT
                                                <input type="file" size="60" id="file-upload" name="image" onchange="filenameget()">
                                            </label>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Upbit
                                                ACCESS KEY</label>
                                            <input type="text" name="upbitaccesskey" class="form-control inp-sp-tx inp-bg-sp pos-sv" id="upbitaccesskey" placeholder="" value="{{$user->upbit_access_key}}">
                                            <img src="{{asset('assets/images/post.png')}}" class="pos-scg" width="30px" onclick="copyaccesskey()">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Upbit
                                                SECRET KEY</label>
                                            <input type="text" name="upbitsecretkey" class="form-control inp-sp-tx inp-bg-sp pos-sv" id="upbitscretkey" placeholder="" value="{{$user->upbit_secret_key}}">
                                            <img src="{{asset('assets/images/post.png')}}" class="pos-scg" width="30px" onclick="copyscretkey()">
                                        </div>
                                    </div>
                                    <div class="mb-5 mt-4">
                                        <button type="submit" class="btn ad-btn-save mt-3">
                                            Save
                                        </button>

                                        <a href="{{route('admin.memberlist')}}" class="btn btn-list mt-3 ml-3">
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




@endsection


<script>
    function filenameget(){
        var name = $('#file-upload')[0].files[0].name;
        $("#filename").val(name);
    }

    function copyToClipboard(text) {
        var sampleTextarea = document.createElement("textarea");
        document.body.appendChild(sampleTextarea);
        sampleTextarea.value = text; //save main text in it
        sampleTextarea.select(); //select textarea contenrs
        document.execCommand("copy");
        document.body.removeChild(sampleTextarea);
    }


    function copyaccesskey(){
        var copyText = document.getElementById("upbitaccesskey");
        copyToClipboard(copyText.value);
    }

    function copyscretkey(){
        var copyText = document.getElementById("upbitscretkey");
        copyToClipboard(copyText.value);
    }

    
</script>


