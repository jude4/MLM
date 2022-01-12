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
                                Admin Registration & Edit

                            </h5>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="col-12 px-5">
                                <form method="POST" id="adminadd">

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Admin Id</label>
                                            <input type="text" class="form-control inp-sp-tx" id="adminid" placeholder="Please enter your ID.">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Admin Name</label>
                                            <input type="text" class="form-control inp-sp-tx" id="adminname" placeholder="Input your name, please.">
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
                                                    <input type="text" name="phone[1][number]" class="form-control" id="phoneno" placeholder="Please enter your mobile number" />
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Manager's Department</label>
                                            <input type="text" class="form-control inp-sp-tx" id="department" placeholder="Please enter your department.">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Admin Password</label>
                                            <input type="password" class="form-control inp-sp-tx" id="password" placeholder="">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">

                                            <i class="fas fa-caret-right"></i>
                                            <label for="inputMyid" class=" col-form-label ">Admin status</label>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-7 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="adminstatus" checked value="1">
                                                        <label class="custom-control-label" for="defaultGroupExample1">Active</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-12">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input " id="defaultGroupExample2" name="adminstatus" value="0">
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
                                            <input type="text" class="form-control inp-sp-tx" id="adminnotes" placeholder="Please enter what you want to remember.">
                                        </div>


                                    </div>
                                    <div class="mb-5 mt-4">
                                        <button class="btn ad-btn-save mt-3" type="button" onclick="saveadmin()">
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


<script>
    function saveadmin() {
        var adminid = $("#adminid").val();
        var adminname = $("#adminname").val();
        var phoneno = $("#phoneno").val();
        var department = $("#department").val();
        var password = $("#password").val();
        var adminstatus = $("input[name='adminstatus']:checked").val();
        var adminnotes = $("#adminnotes").val();


        var isValid = false;
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        isValid = regex.test(password);
        var passwordlength = password.length;

        if (adminid == '') {
            toastr.error("Please Add Admin Id");
            return false;
        }

        if (adminname == '') {
            toastr.error("Please Add Admin Name");
            return false;
        }

        if (department == '') {
            toastr.error("Please Add Manager's Department");
            return false;
        }

        if (passwordlength < 8) {
            toastr.error("Please Password add must be 8 character length");
            return false;
        }

        if (isValid == false) {
            toastr.error("Please Password add must be letters numbers and special character");
            return false;
        }

        _data = {};
        _data['adminid'] = adminid;
        _data['adminname'] = adminname;
        _data['phoneno'] = phoneno;
        _data['department'] = department;
        _data['password'] = password;
        _data['adminstatus'] = adminstatus;
        _data['adminnotes'] = adminnotes;


        $.ajax({
            type: "POST",
            url: "{{route('admin.add.administrator_registration')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    toastr.success(response.msg);
                    $('#adminadd')[0].reset();
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }
</script>