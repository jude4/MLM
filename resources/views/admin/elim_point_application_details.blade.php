@extends('layouts.adminlayout')

@section('content')

@livewire('admin.elim-point-recharge-details')





{{-- view deposit --}}
@livewire('admin.modals.view-elim-recharge-detail')


@endsection



<script>

function exportData() {
        var table = document.getElementById("point_recharge_detail");
        var rows = [];
        for (var i = 0, row; row = table.rows[i]; i++) {
            column1 = row.cells[0].innerText;
            column2 = row.cells[1].innerText;
            column3 = row.cells[2].innerText;
            column4 = row.cells[3].innerText;
            column5 = row.cells[4].innerText;
            column6 = row.cells[5].innerText;
            column7 = row.cells[6].innerText;
            column8 = row.cells[9].innerText;

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
        link.setAttribute("download", "elim_point_list.csv");
        document.body.appendChild(link);
        link.click();
    }



  function openapprovemodal(id){
    $("#Elim-point-approval-modal").modal('show');
    $("#toapprovebtn").attr('data-id', id);
  }

  function opencancelmodal(id){
    $("#Elim-point-cancel-modal").modal('show');
    $("#tocancelbtn").attr('data-id', id);
  }

  function viewelimpointapplicationdetail(id) {
    _data = {};
    _data['id'] = id;

    $.ajax({
      type: "GET",
      url: "{{route('admin.view_elim_recharge_detail')}}",
      data: _data,
      dataType: "json",
      success: function(response) {
        if (response.status == 200) {
          $("#Elim-point-transfer-detail-modal").modal('show');
          $("#elim_recharge_detail").html(response.msg);
        }
      }
    });
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
            url: "{{route('admin.elim_recharge_action')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#elim_recharge_detail_data").html(response.msg);
                    $("#Elim-point-approval-modal").modal('hide');
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
            url: "{{route('admin.elim_recharge_action')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#elim_recharge_detail_data").html(response.msg);
                    $("#Elim-point-cancel-modal").modal('hide');
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }

    function searchpointrecharge() {
        var status = $("#status").val();
        var type = $("#type").val();
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
        _data['type'] = type;
        _data['field'] = field;
        _data['fieldvalue'] = fieldvalue;
        _data['startdate'] = startdate;
        _data['enddate'] = enddate;

        $.ajax({
            type: "GET",
            url: "{{route('admin.search.elim_point_recharge_search')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#elim_recharge_detail_data").html(response.msg);
                }
            }
        });
    }

    function clearsearchfield(){
        $("#status").val('');
        $("#type").val('');
        $("#field").val('');
        $("#fieldvalue").val('');
        $("#startdate").val('');
        $("#enddate").val('');
    }
</script>