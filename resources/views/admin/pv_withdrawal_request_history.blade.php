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
                                        @foreach($historydatas as $index => $history)
                                         <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>30</td>
                                            <td>{{$history->user->user_id}}</td>                    
                                            <td>{{$history->user->nickname}}</td> 
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
                                                    <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#pv-withdrawal-approval-modal">
                                                    Approval                                                               </a>
                                                    <a href="#" class="btn  btn-ends" data-toggle="modal" data-target="#pv-withdrawal-cancel-modal">
                                                    cancellation
                                                    </a>
                                                </td> 
                                            @else
                                            <td>-</td>  
                                            @endif

                                            <td>{{$history->created_at}}</td>                                                    
                                            <td class="">
                                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#pv-withdrawal-detail-modal">
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


<!-- ------------cancel modal----------------- -->

<div class="modal fade" id="pv-withdrawal-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                      <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                  </div>
                  <div class="form-group row justify-content-center mt-4">
                      <div class="col-11 text-left pl-4">
                          <label class="lble-chrg-inpds  text-left"for="  ">COMMENT</label>
                          <textarea class="form-control rounded-0 inp-chrgs-boxd" id="exampleFormControlTextarea1" rows="5"></textarea>
                      </div>
                  </div>
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                            <a href="#" class="btn-mod-end">Cancel</a>
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
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                      <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                  </div>
  
                  <div class="form-group row justify-content-center mt-4">
                      <div class="col-11 text-left pl-4">
                          <label class="lble-chrg-inpds  text-left"for="  ">COMMENT</label>
                          <textarea class="form-control rounded-0 inp-chrgs-boxd" id="exampleFormControlTextarea1" rows="5"></textarea>
                      </div>
                  </div>
  
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                            <a href="#" class="btn-mod-conf">To Approve</a>
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
         
          <div class="row justify-content-center mt-2">
              <div class="col-12">
                  <div class="">
                      <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                          <div class="lft-sid-detail text-left">
                              <div>ID</div>
                              <div>nickname</div>
                              <div>Application amount</div>
                              <div>Account Number</div>
                              <div>Name of bank </div>
                              <div>Name of account  </div>
                              <div>holder</div>
                              
                          </div>
                          <div class="lft-sid-detail text-right">
                              <div>USER01</div>
                              <div>Hong Gil Dong</div>
                              <div>123-456-78910</div>
                              <div>500,000 won</div>
                              <div>Our bank</div>
                               <div>Hong Gil Dong</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center mb-5">
              <div class="col-6 text-center">
                   <a href="#" class="btn-mod-conf">Confirm</a>
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
</script>