 <div class="card-block table-border-style overflow-auto">
     <div class="container-fluid">
         <form>
             <div class="row justify-content-md-end px-2">
                 <div class="">
                     <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                         <label class="text-black pr-3 fontweight500">Search by date of application</label>
                         <div class="start-date-input">
                             <input type="text" class="form-control datepicker" id="startdate" aria-describedby="date-design-prepend" readonly>
                         </div>
                         <div class="exchage-icon align-items-center d-flex justify-content-center">
                             ~
                         </div>
                         <div class="end-date-input">
                             <input type="text" class="form-control datepicker" id="enddate" aria-describedby="date-design-prepend" readonly>
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
                                 <option value="2" class="text-left">
                                     Approval
                                 </option>
                                 <option value="0" class="text-left">
                                     atmosphere
                                 </option>
                                 <option value="1" class="text-left">
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
                             <button type="button" class="btn btn-reset" onclick="clearsearchfield()">Initialization</button>
                         </div>
                     </div>
                 </div>
             </div>
         </form>

         <div class="row">
             <div class="col-12 table-start">
                 <p class="count-list">Total : {{$historycount}} Count (1/1)Page</p>
                 <table class="table-bordered table-hover dt-responsive border-bottom-0 border-remove" id="pvwithdrawalhistorylist">
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
                    $('#pvwithdrawalhistorylist').dataTable().fnDestroy();
                     $("#pvwithdrawalrequesthistorydata").html(response.msg);
                     $('#pvwithdrawalhistorylist').dataTable();
                 }
             }
         });
     }

     function clearsearchfield() {
         $("#status").val('');
         $("#field").val('');
         $("#fieldvalue").val('');
         $("#startdate").val('');
         $("#enddate").val('');
     }

     function approvemodalclose() {
         $("#approvepassword").val('');
         $("#approvecomment").val('');
     }

     function cancelmodalclose() {
         $("#cancelpassword").val('');
         $("#cancelcomment").val('');
     }

     function approvalmodalopen(id) {
         $("#pv-withdrawal-approval-modal").modal('show');
         $("#toapprovebtn").attr('data-id', id);
     }

     function cancelmodalopen(id) {
        $("#cancelpassword").attr('type', 'password');
         $("#pv-withdrawal-cancel-modal").modal('show');
         $("#tocancelbtn").attr('data-id', id);
     }

     function approverequest() {
         var password = $("#approvepassword").val();

         if (password == '') {
             toastr.error("Please add password");
             return false;
         }

         _data = {};
         _data['id'] = $('#toapprovebtn').attr('data-id');
         _data['password'] = password;
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
                     $("#approvepassword").val('');
                     $("#approvecomment").val('');
                     $("#pv-withdrawal-approval-modal").modal('hide');
                     $("#pvwithdrawalrequesthistorydata").html(response.msg);
                     approvemodalclose();
                 } else {
                     toastr.error(response.msg);
                 }
             }
         });
     }

     function cancelrequest() {
         var password = $("#cancelpassword").val();

         if (password == '') {
             toastr.error("Please add password");
             return false;
         }
         _data = {};
         _data['id'] = $('#tocancelbtn').attr('data-id');
         _data['password'] = password;
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
                     $("#cancelpassword").val('');
                     $("#cancelcomment").val('');
                     $("#pv-withdrawal-cancel-modal").modal('hide');
                     $("#pvwithdrawalrequesthistorydata").html(response.msg);
                     cancelmodalclose();
                 } else {
                     toastr.error(response.msg);
                 }
             }
         });
     }

     function detailmodalopen(id) {
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
                 } else {
                     toastr.error(response.msg);
                 }
             }
         });
     }
 </script>