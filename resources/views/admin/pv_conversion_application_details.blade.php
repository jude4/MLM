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
                            <h5>PV conversion application details</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3" onclick="exportData()">Exel download</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto">
                            <div class="container-fluid">
                                <form>
                                    <div class="row justify-content-md-end px-2">
                                        <div class="">
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
                                            <div class="select-main-group ml-1 ">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select" id="type">
                                                        <option value="" selected>
                                                            =TYPE=
                                                        </option>
                                                        <option value="0" class="text-left">
                                                            Available PV
                                                        </option>
                                                        <option value="1" class="text-left">
                                                            resale
                                                        </option>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="select-main-group ml-1 ">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select" id="status">
                                                        <option value="" selected>
                                                            =Status=
                                                        </option>
                                                        <option value="1" class="text-left">
                                                            Approval
                                                        </option>
                                                        <option value="0" class="text-left">
                                                            atmosphere
                                                        </option>
                                                        <option value="2" class="text-left">
                                                            cancellation
                                                        </option>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="select-main-group">

                                                <div class="input-group float-left w-auto mb-2">
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select" id="field">
                                                            <option value="" selected>
                                                                =Search Options=
                                                            </option>
                                                            <option value="user_id" class="text-left">
                                                                Id
                                                            </option>
                                                            <option value="nickname" class="text-left">
                                                                nickname
                                                            </option>

                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Please select a search option." id="fieldvalue">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search" onclick="searchhistory()">Search</button>
                                                    <button type="button" class="btn btn-reset" onclick="clearsearchfield()">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-12 table-start">
                                        <p class="count-list">Total : {{ $historycount  }} Count (1/1)Page</p>
                                        <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove" id="pvconversionapplicationdetaillistdata">
                                            <thead class="table-header-bg">
                                                <tr>
                                                    <th class="border-bottom-0">No.</th>
                                                    <th class="border-bottom-0">PK</th>
                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">Nickname</th>
                                                    <th class="border-bottom-0">TYPE</th>
                                                    <th class="border-bottom-0">conversion quantity</th>
                                                    <th class="border-bottom-0">state</th>
                                                    <th class="border-bottom-0">Approval Confirmation</th>
                                                    <th class="border-bottom-0">Application date and time</th>
                                                    <th class="border-bottom-0">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody id="pvconversionapplicationdetaillist">
                                                @foreach($historydatas as $index => $history)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td>30</td>
                                                    <td>{{$history->user->user_id}}</td>
                                                    <td>{{$history->user->nickname}}</td>
                                                    @if($history->type == '0')
                                                    <td>Available PV</td>
                                                    @else
                                                    <td>resale</td>
                                                    @endif
                                                    <td>{{$history->amount}}</td>

                                                    @if($history->status == '0')
                                                    <td class="inc-text-change1">atmosphere</td>
                                                    @elseif($history->status == '1')
                                                    <td class="incas-text-changes">Approval</td>
                                                    @else
                                                    <td class="incas-text-changes text-danger">Cancellation</td>
                                                    @endif


                                                    @if($history->status == '0')
                                                    <td class="">
                                                        <a href="#" class="btn  btn-correction" onclick="approvalmodalopen('{{ $history->id }}')">
                                                            Approval </a>
                                                        <a href="#" class="btn  btn-ends" onclick="cancelmodalopen('{{ $history->id }}')">
                                                            cancellation
                                                        </a>
                                                    </td>
                                                    @else
                                                    <td>-</td>
                                                    @endif

                                                    <td>{{$history->created_at}}</td>
                                                    <td class="">
                                                        <a href="#" class="btn  btn-correction" onclick="detailmodalopen('{{ $history->id }}')">
                                                            Look
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

<!-- ------------pv-conversion detail modal----------------- -->

<div class="modal fade" id="pv-conversion-application-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header mod-disp">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-11 text-center">
                        <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Conversion Details</h4>
                    </div>
                </div>

                <div class="row justify-content-center mt-2" id="particularhistorydetail">


                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-6 text-center">
                        <a href="#" class="btn-mod-conf" data-dismiss="modal" aria-label="Close">Confirm</a>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>


<!-- Model Approval -->
<div class="modal fade" id="approval" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header mod-disp text-center">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="approvemodalclose()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="row justify-content-center">
              <div class="col-11 text-center">
                  <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Confirm Approval</h4>
              </div>
          </div>
          <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                  <div class="row justify-content-center">
                     <div class="col-11">
                          <div class="trd-pass-text">For final approval, please re-enter the administrator password.</div>
                     </div>
                  </div>  
                  
                  <div class="form-group row justify-content-center mt-5 mb-0">
                      <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                      <input type="Password" name="password" id="approvepassword" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                  </div>
  
                  <div class="form-group row justify-content-center mt-4">
                      <div class="col-11 text-left pl-4">
                          <label class="lble-chrg-inpds  text-left"for="  ">COMMENT</label>
                          <textarea name="comment" class="form-control rounded-0 inp-chrgs-boxd" id="approvecomment" rows="5"></textarea>
                      </div>
                  </div>
  
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                            <button  class="btn-mod-conf" id="toapprovebtn" onclick="approverequest()">To Approve</button>
                         </a>
                      </div>
                  </div>
                      
                 
          </div>
        </div>
      </div>
    </div>
  </div>
  

<!-- Model Cancellation -->
<div class="modal fade" id="cancellation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header mod-disp">
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cancelmodalclose()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center">
              <div class="col-11 text-center">
                  <h4 class="modal-title trd-top-end text-center" id="exampleModalLongTitle">Cancel Confirmation</h4>
              </div>
          </div>
          <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                  <div class="row justify-content-center">
                     <div class="col-11">
                          <div class="trd-pass-text">After final confirmation, please re-enter the administrator password.</div>
                     </div>
                  </div>  
                  
                  <div class="form-group row justify-content-center mt-5 mb-0">
                      <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                      <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="" id="cancelpassword" name="cancelpassword">
                  </div>
                  <div class="form-group row justify-content-center mt-4">
                      <div class="col-11 text-left pl-4">
                          <label class="lble-chrg-inpds  text-left"for="  ">COMMENT</label>
                          <textarea class="form-control rounded-0 inp-chrgs-boxd" id="cancelcomment" rows="5"></textarea>
                      </div>
                  </div>
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                            <button class="btn-mod-end" id="tocancelbtn" onclick="cancelrequest()">Cancel</button>
                         </a>
                      </div>
                  </div>
                      
                 
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

<script>

    function approvemodalclose(){
        $("#approvepassword").val('');
        $("#approvecomment").val('');
    }

    function cancelmodalclose(){
        $("#cancelpassword").val('');
        $("#cancelcomment").val('');
    }



    function approvalmodalopen(id) {
        $("#approval").modal('show');
        $("#toapprovebtn").attr('data-id', id);
    }

    function cancelmodalopen(id) {
        $("#cancellation").modal('show');
        $("#tocancelbtn").attr('data-id', id);
    }

    function approverequest(){
        var password = $("#approvepassword").val();
        var comment = $("#approvecomment").val();

        if(password == ''){
            toastr.error("Please add password");
            return false;
        }

        if(comment == ''){
            toastr.error("Please add comment");
            return false;
        }
        _data = {};
        _data['id'] = $('#toapprovebtn').attr('data-id');
        _data['password'] = password;
        _data['comment'] = comment;
        _data['status'] = 1;

        $.ajax({
            type: "POST",
            url: "{{route('admin.pvconversionapplicationaction')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#approval").modal('hide');
                    $("#pvconversionapplicationdetaillist").html(response.msg);
                    approvemodalclose();
                }else{
                    toastr.error(response.msg);
                }
            }
        });
    }

    function cancelrequest(){

        var password = $("#cancelpassword").val();
        var comment = $("#cancelcomment").val();

        if(password == ''){
            toastr.error("Please add password");
            return false;
        }

        if(comment == ''){
            toastr.error("Please add comment");
            return false;
        }
        _data = {};
        _data['id'] = $('#tocancelbtn').attr('data-id');
        _data['password'] = password;
        _data['comment'] = comment;
        _data['status'] = 2;
      

        $.ajax({
            type: "POST",
            url: "{{route('admin.pvconversionapplicationaction')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#cancellation").modal('hide');
                    $("#pvconversionapplicationdetaillist").html(response.msg);
                    cancelmodalclose();
                }else{
                    toastr.error(response.msg);
                }
            }
        });
    }



    function exportData() {
        var table = document.getElementById("pvconversionapplicationdetaillistdata");
        var rows = [];
        for (var i = 0, row; row = table.rows[i]; i++) {
            column1 = row.cells[0].innerText;
            column2 = row.cells[1].innerText;
            column3 = row.cells[2].innerText;
            column4 = row.cells[3].innerText;
            column5 = row.cells[4].innerText;
            column6 = row.cells[5].innerText;
            column7 = row.cells[6].innerText;
            column8 = row.cells[8].innerText;

            /* add a new records in the array */
            rows.push(
                [
                    column1,
                    column2,
                    column3,
                    column4,
                    column5,
                    column6,
                    column7,
                    column8
                ]
            );

        }
        csvContent = "data:text/csv;charset=utf-8,";
        rows.forEach(function(rowArray) {
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "pvconversionapplicationdetail.csv");
        document.body.appendChild(link);
        link.click();
    }


    function searchhistory() {
        var type = $("#type").val();
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
        _data['type'] = type;
        _data['status'] = status;
        _data['field'] = field;
        _data['fieldvalue'] = fieldvalue;
        _data['startdate'] = startdate;
        _data['enddate'] = enddate;

        $.ajax({
            type: "GET",
            url: "{{route('admin.search.pvconversionapplicationdetail')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#pvconversionapplicationdetaillist").html(response.msg);
                }
            }
        });
    }


    function clearsearchfield() {
        $("#status").val('');
        $("#type").val('');
        $("#field").val('');
        $("#fieldvalue").val('');
        $("#startdate").val('');
        $("#enddate").val('');
    }

    function detailmodalopen(id) {
        _data = {};
        _data['id'] = id;

        $.ajax({
            type: "GET",
            url: "{{route('admin.particularpvconversiondetail')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#pv-conversion-application-modal").modal('show');
                    $("#particularhistorydetail").html(response.msg);
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }
</script>