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
                            <h5>Trading order history</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3" onclick="exportData()">EXCEL Download</a>
                            </div>

                        </div>

                        @livewire('admin.trading-order-history')
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>



<!-- ------------trading order detail modal----------------- -->
@livewire('admin.modals.trade-order-details')

@livewire('admin.modals.pursue-trading')

<!-- ------------trading cancel modal----------------- -->
@livewire('admin.modals.cancel-trade')

<!-- ------------pause modal----------------- -->
@livewire('admin.modals.pause-trade')

<!-- ------------Restart modal----------------- -->
@livewire('admin.modals.restart-trade')

@endsection

<script>
    function exportData() {
        var table = document.getElementById("trading_order_table");
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
        link.setAttribute("download", "trading_order_history.csv");
        document.body.appendChild(link);
        link.click();
    }

    function searchhistory() {
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
            url: "{{route('admin.search.trading_order_history')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $('#trading_order_table').dataTable().fnDestroy();
                    $("#trading_order_history_data").html(response.msg);
                    $('#trading_order_table').dataTable();
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

    function pausetrademodalopen(id, type) {
        $("#trading-order-pause-modal").modal('show');
        $("#pausebtn").attr('data-id', id);
        $("#pausebtn").attr('data-type', type);
    }

    function pausetrade() {
        var password = $("#approvepassword").val();

        if (password == '') {
            toastr.error("Please add password");
            return false;
        }

        _data = {};
        _data['id'] = $('#pausebtn').attr('data-id');
        _data['type'] = $('#pausebtn').attr('data-type');
        _data['password'] = password;
        _data['status'] = 1;

        $.ajax({
            type: "POST",
            url: "{{route('admin.trade_action')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#approvepassword").val('');
                    $("#trading-order-pause-modal").modal('hide');
                } else {
                    toastr.error(response.msg);
                }
            }
        });
    }

    function restarttrademodalopen(id, type) {
        $("#trading-restart-modal").modal('show');
    }
</script>