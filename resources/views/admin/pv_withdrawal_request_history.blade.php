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
                            <h5>PV withdrawal request history</h5>
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
                                                           name
                                                        </option>
                                                        
                                                    </select>
                                                  </div>
                                                  <input type="text" class="form-control" placeholder="Please select a search option." id="fieldvalue">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search" onclick="searchhistory()">Search</button>
                                                    <button type="button" class="btn btn-reset"  onclick="clearsearchfield()">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="row">  
                                    <div class="col-12 table-start">
                                    <p class="count-list">Total : {{ $historycount }} Count (1/1)Page</p>   
                                      <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove" id="pvwithdrawalhistorylist">  
                                        <thead class="table-header-bg">
                                            <tr>
                                                <th class="border-bottom-0">No.</th>
                                                <th class="border-bottom-0">PK</th>
                                                <th class="border-bottom-0">ID</th>                         
                                                <th class="border-bottom-0">Nickname</th>
                                                <th class="border-bottom-0">Price</th>
                                                <th class="border-bottom-0">state</th>
                                                <th class="border-bottom-0">Approval </th>
                                                <th class="border-bottom-0"> Confirmation</th>
                                                <th class="border-bottom-0">Application date and time</th>
                                            </tr>
                                        </thead>
                                        <tbody id="pvwithdrawalrequesthistorydata">
                                       
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


<!-- ------------cancel modal----------------- -->

<div class="modal fade" id="pv-withdrawal-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                          <div class="trd-pass-text">After the administrator cancels, the user application is immediately withdrawn.</div>
                          <div class="trd-pass-text">After final confirmation, please re-enter the administrator password.</div>
                     </div>
                  </div>  
                  
                  <div class="form-group row justify-content-center mt-5 mb-0">
                      <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                      <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="" id="cancelpassword" name="cancelpassword">
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
  
  
  <!-- ------------Approval modal----------------- -->
  
  <div class="modal fade" id="pv-withdrawal-approval-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
  
  
  
  
  <div class="modal fade" id="pv-withdrawal-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Withdrawal details</h4>
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
@endsection

<script>
    function exportData() {
        var table = document.getElementById("pvwithdrawalhistorylist");
        var rows = [];
        for (var i = 0, row; row = table.rows[i]; i++) {
            column1 = row.cells[0].innerText;
            column2 = row.cells[1].innerText;
            column3 = row.cells[2].innerText;
            column4 = row.cells[3].innerText;
            column5 = row.cells[4].innerText;
            column6 = row.cells[5].innerText;
            column7 = row.cells[7].innerText;

            /* add a new records in the array */
            rows.push(
                [
                    column1,
                    column2,
                    column3,
                    column4,
                    column5,
                    column6,
                    column7
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
        link.setAttribute("download", "pvwithdrawalrequesthistory.csv");
        document.body.appendChild(link);
        link.click();
    }


    function searchhistory() {
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
            url: "{{route('admin.search.pvwithdrawalrequesthistory')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#pvwithdrawalrequesthistorydata").html(response.msg);
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

    function approvemodalclose(){
        $("#approvepassword").val('');
        $("#approvecomment").val('');
    }

    function cancelmodalclose(){
        $("#cancelpassword").val('');
        $("#cancelcomment").val('');
    }

    function approvalmodalopen(id){
        $("#pv-withdrawal-approval-modal").modal('show');
        $("#toapprovebtn").attr('data-id',id);
    }

    function cancelmodalopen(id){
        $("#pv-withdrawal-cancel-modal").modal('show');
        $("#tocancelbtn").attr('data-id',id);
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
            url: "{{route('admin.pvwithdrawalaction')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#approvepassword").val('');
                    $("#approvecomment").val('');
                    $("#pv-withdrawal-approval-modal").modal('hide');
                    $("#pvwithdrawalrequesthistorydata").html(response.msg);
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
            url: "{{route('admin.pvwithdrawalaction')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#cancelpassword").val('');
                    $("#cancelcomment").val('');
                    $("#pv-withdrawal-cancel-modal").modal('hide');
                    $("#pvwithdrawalrequesthistorydata").html(response.msg);
                    cancelmodalclose();
                }else{
                    toastr.error(response.msg);
                }
            }
        });
    }

    function detailmodalopen(id){
        _data = {};
        _data['id'] = id;

        $.ajax({
            type: "GET",
            url: "{{route('admin.pvwithdrawalrequestdetail')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#pv-withdrawal-detail-modal").modal('show');
                    $("#particularhistorydetail").html(response.msg);
                }else{
                    toastr.error(response.msg);
                }
            }
        });
    }
</script>