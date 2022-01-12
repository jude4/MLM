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
                            <h5>Admin List</h5>
                            <div class="">
                                <a href="{{route('admin.administratorregistration')}}" class="btn btn-enrollment mt-3">Enrollment</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto">
                            <div class="container-fluid">
                                <form>

                                    <div class="row justify-content-md-end">
                                        <div class="px-3">
                                            <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                                                <div class="start-date-input">
                                                    <input type="date" class="form-control" id="startdate" aria-describedby="date-design-prepend">
                                                </div>
                                                <div class="exchage-icon align-items-center d-flex justify-content-center">
                                                    ~
                                                </div>
                                                <div class="end-date-input">
                                                    <input type="date" class="form-control" id="enddate" aria-describedby="date-design-prepend">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-md-end">
                                        <div class="col-12 d-flex justify-content-md-end">
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select" id="status" onchange="searchadmin()">
                                                        <option value="" selected>
                                                            =Status=
                                                        </option>
                                                        <option value="1" class="text-left">
                                                            Activation
                                                        </option>
                                                        <option value="0" class="text-left">
                                                            inactive
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="input-group float-left w-auto mb-2">
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select" id="field">
                                                            <option value="" selected>
                                                                =Search Options=
                                                            </option>
                                                            <option value="admin_id" class="text-left">
                                                                Id
                                                            </option>
                                                            <option value="name" class="text-left">
                                                                Name
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Please select a search option." id="fieldvalue">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search" onclick="searchadmin()">Search</button>
                                                    <button type="button" class="btn btn-reset" onclick="clearsearchfield()">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-12 table-start">
                                        <p class="count-list">Total : {{$admincount}} Count (1/1)Page</p>
                                        <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove">
                                            <thead class="table-header-bg">
                                                <tr>
                                                    <th class="border-bottom-0">No.</th>
                                                    <th class="border-bottom-0">PK</th>
                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">Name</th>
                                                    <th class="border-bottom-0">Department in charge</th>
                                                    <th class="border-bottom-0">state</th>
                                                    <th class="border-bottom-0">last login</th>
                                                    <th class="border-bottom-0">Registration date</th>
                                                    <th class="border-bottom-0">correction</th>
                                                </tr>
                                            </thead>
                                            <tbody id="admindata">
                                                @foreach ($admins as $index => $admin)
                                                <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>30</td>
                                                    <td>{{$admin->admin_id}}</td>
                                                    <td>{{$admin->name}}</td>
                                                    <td>{{$admin->department}}</td>
                                                    <td>{{$admin->status?'active':'inactive'}}</td>
                                                    <td>{{$admin->last_login}}</td>
                                                    <td>{{$admin->created_at}}</td>
                                                    <td class="">
                                                        <a href="{{route('admin.adminmanagement', ['id' => $admin->id])}}" class="btn  btn-correction">
                                                            Correction
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
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
    function searchadmin() {
        var status = $("#status").val();
        var field = $("#field").val();
        var fieldvalue = $("#fieldvalue").val();
        var startdate = $("#startdate").val();
        var enddate = $("#enddate").val();

        if (startdate != '' && enddate == '') {
            toastr.error("Please select to date");
            return false;
        } else if (enddate != '' && startdate == '') {
            toastr.error("Please select from date");
            return false;
        }

        if (fieldvalue != '' && field == '') {
            toastr.error("Please select search option");
            return false;
        } else if (field != '' && fieldvalue == '') {
            toastr.error("Please add search value");
            return false;
        }

        _data = {};
        _data['status'] = status;
        _data['field'] = field;
        _data['fieldvalue'] = fieldvalue;
        _data['startdate'] = startdate;
        _data['enddate'] = enddate;

        $.ajax({
            type: "GET",
            url: "{{route('admin.search.administrator')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#admindata").html(response.msg);
                }
            }
        });
    }

    function clearsearchfield(){
        $("#status").val('');
        $("#field").val('');
        $("#fieldvalue").val('');
        $("#startdate").val('');
        $("#enddate").val('');
    }
</script>