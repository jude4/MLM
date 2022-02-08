@extends('layouts.userlayout')

@section('content')
    <!-- Start ELIM Point view detail  section-->

<div id="service-center">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0">Notice</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container mt-5">
        <div class="service-center">
            <div class="top-head-charge text-center mb-5">Notice</div> 
            <div class="card-block table-border-style overflow-auto mt-5">
                <div class="container-fluid">  
                    <form>      
                        <div class="row ">
                            <div class="col-xl-8 col-lg-7 col-md-5 col-sm-0 col-0 pr-0">
                            </div>
                            <div class="col-md-2 col-sm-3 col-5  mb-3 pl-md-0 pl-sm-3">
                                <select class="custom-select" name="type" id="type">
                                    <option value="Contents" selected>
                                        Contents
                                    </option>
                                    <option value="Subject" class="text-left">
                                        Subject
                                    </option>                                        
                                </select>
                            </div>
                        </div>                                                 
                        <div class="row ">
                            <div class="col-md-3 col-sm-12 col-12">
                                <p class="count-lists text-left">Total : {{$noticecount}} Count (1/5)Page</p>
                            </div>
                            <div class="col-md-9 col-sm-12 col-12 text-md-right">
                                <div class="select-main-group d-md-flex justify-content-end">
                                    <div class="input-group  w-auto mb-2">
                                        <div class="input-group-prepend">
                                            <select class="custom-select" name="title" id="title">
                                                <option value="Title" selected>
                                                  Title
                                                </option>                                      
                                            </select>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" id="serachvalue" name="searchvalue">
                                    </div>
                                    <div class="btn-group mb-2 ml-2">
                                        <button type="button" class="btn btn-service-search" onclick="searchnotice()">Search</button>     
                                    </div>  
                                   
                                </div>
                            </div>
                            <div class="col-10">
                                <p class="serachvaluemsg text-right">Please insert search value</p>
                            </div>
                        </div>  
                    </form>
                    <div class="row mt-4 mb-20">  
                        <div class="col-12 table-start">  
                          <table class="table dt-responsive " id="NoticeTable">  
                            <thead class="table-header-bg">
                                <tr class="text-center">
                                    <th class="border-bottom-0">TDX.</th>
                                    <th class="border-bottom-0">Title</th>
                                    <th class="border-bottom-0">Views</th>
                                    <th class="border-bottom-0">Registration Date</th>
                                    <th class="border-bottom-0">View</th>
                                </tr>
                            </thead>
                            <tbody id="noticedetail">
                             @foreach ($notices as $index => $notice)
                             <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$notice->title}}</td>
                                <td>{{$notice->views}}</td>                    
                                <td>{{$notice->created_at}}</td>  
                                <td>
                                    <a href="{{route('user.servicecenterdetail', ['id' => $notice->id])}}" class="btn-service-listd">    view
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
</div>




                
<!-- End ELIM Point view detail  section-->
@endsection

@section('scripts')
    <!-- ==========x==========x========== data table script start ==========x==========x========== -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  

  <script>  
$('table').DataTable();  
</script>

<script>
    function searchnotice(){
        var type = $("#type").val();
        var serachvalue = $("#serachvalue").val();

        if(serachvalue == ''){
            $(".serachvaluemsg").show();
            return false;
        }

        $(".serachvaluemsg").hide();

        _data = {};
        _data['type'] = type;
        _data['serachvalue'] = serachvalue;

        $.ajax({
            type: "GET",
            url: "{{route('user.search_notice')}}",
            data: _data,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $('#NoticeTable').dataTable().fnDestroy();
                    $("#noticedetail").html(response.msg);
                    $('#NoticeTable').dataTable();
                     
                }
            }
        });
    }
</script>

<!-- ==========x==========x========== data table script End ==========x==========x========== -->
@endsection