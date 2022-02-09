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
                    <div class="card ml-md-5 def-cart-sp">
                        <div class="card-header">
                            <h5>
                                Admin Edit

                            </h5>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="col-12 px-5">
                                <form method="POST" action="{{route('admin.edit.admin')}}">
                                    @csrf
                                    <input hidden type="text" name="id" id="" value="{{$admin->id}}">
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Id</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="admin04" name="admin_id" value="{{$admin->admin_id}}">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Name</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="Hong Gil Dong" name="name" value="{{$admin->name}}">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin mobile number</label>
                                            <div class="phone-list">
                                                <div class="input-group phone-input">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-mob" data-toggle="dropdown" aria-expanded="false"><span class="type-text  mb-tds">KOR +82</span> <span class="caret"></span></button>
                                                    </span>
                                                    <input type="hidden" name="phone[1][type]" class="type-input" value="" />
                                                    <input type="text" name="mobile" value="{{$admin->mobile}}" class="form-control" placeholder="01012345678" />
                                                    {{-- phone[1][number] --}}
                                                </div>
                                                
                                            </div>
                                    </div>
                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Manager's Department</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="Sales Team" name="department" value="{{$admin->department}}">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Admin Password</label>
                                        <input type="password" class="form-control inp-sp-tx" id="inputMyid" placeholder="" name="password">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">

                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">Manager's status</label>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-7 col-12">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="status" value="active" {{$admin->status?'checked':''}}>
                                                    <label class="custom-control-label" for="defaultGroupExample1">Active</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12">
                                                <div class="custom-control custom-radio ">
                                          <input type="radio" class="custom-control-input " id="defaultGroupExample2" name="status" value="inactive" {{$admin->status?'':'checked'}} >
                                          <label class="custom-control-label" for="defaultGroupExample2" >Inactive</label>
                                        </div>
                                            </div>
                                        </div>
                                        

                                        <!-- Group of default radios - option 2 -->
                                        
                                    </div>
                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <i class="fas fa-caret-right"></i>
                                        <label for="inputMyid" class=" col-form-label ">admin notes</label>
                                        <input type="text" class="form-control inp-sp-tx" id="inputMyid" placeholder="Sales Department Team Leader / Hong Gil-dong" name="notes" value="{{$admin->notes}}">
                                    </div>
                                    
                                
                                </div>
                                <div class="mb-5 mt-4">
                                    <button href="#" class="btn ad-btn-save mt-3">
                                       Save
                                    </button>

                                    <a href="{{route('admin.administratorlist')}}" class="btn btn-list mt-3 ml-3">
                                        List
                                    </a>
                                </div>
                            </form>
                            </div>

                            <div class="sub-cart px-md-5 px-3 pt-md-5 pt-3">
                                <div class="row ">
                                    <div class="col-10">
                                        <div class="adm-sub-menu">Admin menu management</div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-5">
                                        <div class="non-prv-box">
                                            <div class="non-prv-txt text-left">
                                                non-privileged menu
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="man-bor-box mb-5" id="unallocated_permissions">
                                                    @foreach ($datas['unallocated_permissions'] as $module => $permissions)


                                                    <div class="ard-man-txt">{{ $module }}</div>
                                                    @foreach($permissions as $permission => $permission_data)
                                                    <div class="row p-2">
                                                        <div class="col-sm-1 col-1">
                                                            <div class="form-check frn-ch">
                                                                <input class="form-check-input ch-inp" type="checkbox" name="permissionmenu[]" value="{{ $permission_data['id']}}" id="flexCheckDefault">

                                                            </div>
                                                        </div>
                                                        <div class=" col-lg-10 col-md-10 col-sm-10 col-10  ">

                                                            <input type="text" class="form-control  inp-sp-tx"  placeholder="admin list" value="{{ $permission }}">
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endforeach
                                                    
                                                </div>
                                                <input type="hidden" class="permission-input-id" id="adminid" value="{{ $datas['admin_id'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 align-self-center text-right">

                                        <div class="row">
                                            <div class="col-md-10 col-12 pl-0">
                                                <a href="javascript:void(0)" class="btn btn-outline-primary btn-greater" onclick="add_permission()">
                                                    >
                                                </a>
                                            </div>
                                            <div class="col-md-10 col-12 mt-2 pl-0 ">
                                                <a href="javascript:void(0)" class="btn btn-outline-primary btn-greater" onclick="remove_permission()">
                                                    < </a>
                                            </div>
                                        </div>
                                        <div class="row mt-3">

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-7 col-md-6">
                                        <div class="non-prv-box">
                                            <div class="non-prv-txt">
                                                Permissions menu
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="man-bor-box mb-5" id="allocatedpermission">
                                                @foreach ($datas['allocated_permissions'] as $module => $permissions)
                                                    <div class="ard-man-txt">{{ $module }}</div>
                                                    @foreach($permissions as $permission => $permission_data)
                                                    <div class="row p-2">
                                                        <div class="col-sm-1 col-1 pr-md-0 sp-nd">
                                                            <div class="form-check frn-ch">
                                                                <input class="form-check-input ch-inp" type="checkbox" value="{{ $permission_data['id'] }}" name="allowpermission[]">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-10 col-sm-10 col-10 pl-md-0 pr-0">

                                                            <input type="text" class="form-control  inp-sp-txs"  placeholder="{{ $permission}}">
                                                        </div>
                                                        <div class="col-lg-6 col-md-10 col-sm-10 col-11 pl-md-0  ass-cat">
                                                            <div class="inp-sp-txd">
                                                                    @php
                                                                        $pid = $permission_data['id'];
                                                                    @endphp
                                                                <div class="row p-2">
                                                                    <div class="col-xl-3 col-lg-3 col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" id="read_{{ $pid }}" name="pr_{{$pid}}"  value="0" @if (!$permission_data['is_write']) checked @endif>
                                                                            <label class="form-check-label" for="read_{{ $pid }}">
                                                                                read
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" id="write_{{ $pid }}"  name="pr_{{$pid}}"  value="1" @if ($permission_data['is_write']) checked @endif>
                                                                            <label class="form-check-label" for="write_{{ $pid }}">
                                                                                write
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-5 col-4 text-right">
                                                                   
                                                                        <a href="javascript:void(0)" class="btn ad-btn-save btn-sv" onclick="changepermission('{{ $pid }}')">
                                                                            Save
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @endforeach
                                                   
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="error-msg">If you have modified the menu information in your account, please log in again to apply the changed permissions.</div>
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
@endsection


<script>
    function add_permission(){
        var adminid = $("#adminid").val();
        var permisssion = new Array();
        $("input[name='permissionmenu[]']:checked").each(function() {
            permisssion.push($(this).val());
        });

        if(permisssion == ''){
            toastr.error("Please select atleast one permission.");
            return false;
        }

        _data = {};
        _data['adminid'] = adminid;
        _data['permisssion'] = permisssion;


        $.ajax({
            type: "POST",
            url: "{{route('admin.add.administrator_permission')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    toastr.success(response.msg);
                    $("#unallocated_permissions").html(response.up);
                    $("#allocatedpermission").html(response.ap);
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }

    function remove_permission(){
        var adminid = $("#adminid").val();
        var permisssion = new Array();
        $("input[name='allowpermission[]']:checked").each(function() {
            permisssion.push($(this).val());
        });

        if(permisssion == ''){
            toastr.error("Please select atleast one permission.");
            return false;
        }

        _data = {};
        _data['adminid'] = adminid;
        _data['permisssion'] = permisssion;

        $.ajax({
            type: "POST",
            url: "{{route('admin.remove.administrator_permission')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    toastr.success(response.msg);
                    $("#unallocated_permissions").html(response.up);
                    $("#allocatedpermission").html(response.ap);
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }

    function changepermission(id){
        var adminid = $("#adminid").val();
        var permission = 0;
        $('[name="pr_'+id+'"]').each( function (){
            if($(this).prop('checked') == true){
                permission =  $(this).val();
            }
        });

        _data = {};
        _data['adminid'] = adminid;
        _data['permisssionid'] = id;
        _data['permisssion'] = permission;

        $.ajax({
            type: "POST",
            url: "{{route('admin.change.administrator_permission')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    toastr.success(response.msg);
                    $("#unallocated_permissions").html(response.up);
                    $("#allocatedpermission").html(response.ap);
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }
</script>