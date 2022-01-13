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
                            <h5>Total PV accumulation history</h5>
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


                                    <div class="row justify-content-end">
                                        <div class="col-12 d-flex justify-content-md-end">
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select" id="type">
                                                        <option value="" selected>
                                                            =Accumulation Type=
                                                        </option>
                                                        <option value="sale bonus" class="text-left">
                                                            sale bonus
                                                        </option>
                                                        <option value="rank bonus" class="text-left">
                                                            rank bonus
                                                        </option>
                                                        <option value="nickname" class="text-left">
                                                            nickname
                                                        </option>
                                                        <option value="group bonus" class="text-left">
                                                            group bonus
                                                        </option>
                                                        <option value="resale bonus" class="text-left">
                                                            resale bonus
                                                        </option>
                                                    </select>
                                                </div>



                                                <div class="input-group float-left w-auto mb-2">
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select" id="field">
                                                            <option value="" selected>
                                                                =Search Options=
                                                            </option>
                                                            <option value="user_id" class="text-left">
                                                                ID
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
                                        <p class="count-list">Total : {{ $historycount }} Count (1/1)Page</p>
                                        <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove img-size" id="pvaccumulationhistorylist">
                                            <thead class="table-header-bg">
                                                <tr>
                                                    <th class="border-bottom-0">No.</th>
                                                    <th class="border-bottom-0">PK</th>
                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">nickname</th>
                                                    <th class="border-bottom-0">Earning type</th>
                                                    <th class="border-bottom-0">Earning Bonuses (Available)</th>
                                                    <th class="border-bottom-0">Earn Bonus (Accumulate)</th>
                                                    <th class="border-bottom-0">Accumulation date and time</th>

                                                </tr>
                                            </thead>
                                            <tbody id="pvaccumulationhistorydata">
                                                @foreach ($historydatas as $index => $historydata)
                                                <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>30</td>
                                                    <td>{{ $historydata->user->user_id }}</td>
                                                    <td>{{ $historydata->user->nickname }}</td>
                                                    <td>{{ $historydata->earning_type }}</td>
                                                    <td>{{ $historydata->available_earned_bonus }}</td>
                                                    <td>{{ $historydata->accumulated_earned_bonus }}</td>
                                                    <td>{{ $historydata->created_at }}</td>
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
    function exportData() {
        var table = document.getElementById("pvaccumulationhistorylist");
        var rows = [];
        for (var i = 0, row; row = table.rows[i]; i++) {
            column1 = row.cells[0].innerText;
            column2 = row.cells[1].innerText;
            column3 = row.cells[2].innerText;
            column4 = row.cells[3].innerText;
            column5 = row.cells[4].innerText;
            column6 = row.cells[5].innerText;
            column7 = row.cells[6].innerText;
            column8 = row.cells[7].innerText;

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
        link.setAttribute("download", "pvaccumulationhistory.csv");
        document.body.appendChild(link);
        link.click();
    }




    function searchhistory() {
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
        _data['type'] = type;
        _data['field'] = field;
        _data['fieldvalue'] = fieldvalue;
        _data['startdate'] = startdate;
        _data['enddate'] = enddate;

        $.ajax({
            type: "GET",
            url: "{{route('admin.search.pvaccumulationhistory')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#pvaccumulationhistorydata").html(response.msg);
                }
            }
        });
    }

    function clearsearchfield(){
        $("#type").val('');
        $("#field").val('');
        $("#fieldvalue").val('');
        $("#startdate").val('');
        $("#enddate").val('');
    }

</script>