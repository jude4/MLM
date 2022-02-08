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
                            <h5>FAQ list</h5>
                            @if($permission == 1)
                            <div class="">
                                <a href="{{route('admin.faqregister')}}" class="btn btn-enrollment mt-3">Enrollment</a>
                            </div>
                            @endif

                        </div>

                        <div class="card-block table-border-style overflow-auto mt-5">
                            <div class="container-fluid">  
                            <form>
                                    <div class="row justify-content-md-end">
                                        <div class="px-3">
                                            <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                                                <label class="text-black pr-3 fontweight500">Registration Date Period Search</label>
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
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select" id="status">
                                                        <option value="" selected>=Category=
                                                        </option>
                                                        <option value="normal" class="text-left">
                                                        Normal
                                                        </option>
                                                        <option value="support" class="text-left">
                                                         support
                                                        </option>
                                                        <option value="deal" class="text-left">
                                                         deal
                                                        </option>
                                                        <option value="fees" class="text-left">
                                                         fees
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select" id="type">
                                                        <option value="" selected>
                                                            =Used=
                                                        </option>
                                                        <option value="1" class="text-left">
                                                         used
                                                        </option>
                                                        <option value="0" class="text-left">
                                                          not used
                                                        </option>
                                                    </select>
                                                </div>


                                                <div class="input-group float-left w-auto mb-2">
                                                  <div class="input-group-prepend">
                                                    <select class="custom-select" id="field">
                                                        <option value="" selected>
                                                           =Search Options=
                                                        </option>
                                                        <option value="question" class="text-left">
                                                          title
                                                        </option>
                                                        <option value="question" class="text-left">
                                                          Contents
                                                        </option>
                                                        
                                                    </select>
                                                  </div>
                                                  <input type="text" class="form-control" placeholder="Please select a search option." id="fieldvalue">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search" onclick="searchfaq()">Search</button>
                                                    <button type="button" class="btn btn-reset"  onclick="clearsearchfield()">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="row">  
                                    <div class="col-12 table-start">
                                    <p class="count-list">Total : {{ $faqcount }} Count (1/1)Page</p>   
                                      <table class="table-bordered table-hover dt-responsive border-bottom-0 border-remove img-size" id="faqlist">  
                                        <thead class="table-header-bg">
                                            <tr>
                                                <th class="border-bottom-0">No.</th>
                                                <th class="border-bottom-0">PK</th>
                                                 <th class="border-bottom-0">category</th>
                                                <th class="border-bottom-0">Notice title</th>
                                                <th class="border-bottom-0">Whether or not to use</th>
                                                <th class="border-bottom-0">Registration date</th>
                                                <th class="border-bottom-0">correction</th>
                                            </tr>
                                        </thead>
                                        <tbody id="faqdetail">
         
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
    function clearsearchfield() {
        $("#status").val('');
        $("#type").val('');
        $("#field").val('');
        $("#fieldvalue").val('');
        $("#startdate").val('');
        $("#enddate").val('');
    }


    function searchfaq() {
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
            url: "{{route('admin.search.faq')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $('#faqlist').dataTable().fnDestroy();
                    $("#faqdetail").html(response.msg);
                    $('#faqlist').dataTable();
                }
            }
        });
    }
</script>