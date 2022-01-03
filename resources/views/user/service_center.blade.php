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
                                <select class="custom-select">
                                    <option value="status" selected>
                                        Contents
                                    </option>
                                    <option value="activation" class="text-left">
                                        Writer
                                    </option>                                        
                                </select>
                            </div>
                        </div>                                                 
                        <div class="row ">
                            <div class="col-md-3 col-sm-12 col-12">
                                <p class="count-lists text-left">Total : 5 Count (1/5)Page</p>
                            </div>
                            <div class="col-md-9 col-sm-12 col-12 text-md-right">
                                <div class="select-main-group d-md-flex justify-content-end">
                                    <div class="input-group  w-auto mb-2">
                                        <div class="input-group-prepend">
                                            <select class="custom-select">
                                                <option value="status" selected>
                                                  Title
                                                </option>
                                                <option value="activation" class="text-left">
                                                    
                                                </option>                                        
                                            </select>
                                        </div>
                                        <input type="text" class="form-control" placeholder="">
                                        </div>

                                    <div class="btn-group mb-2 ml-2">
                                        <button type="button" class="btn btn-service-search">Search</button>     
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </form>
                    <div class="row mt-4 mb-20">  
                        <div class="col-12 table-start">  
                          <table class="table dt-responsive ">  
                            <thead class="table-header-bg">
                                <tr class="text-center">
                                    <th class="border-bottom-0">TDX.</th>
                                    <th class="border-bottom-0">Title</th>
                                    <th class="border-bottom-0">Views</th>
                                    <th class="border-bottom-0">Registration Date</th>
                                </tr>
                            </thead>
                            <tbody>
                             <tr>
                                <td>10</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>           
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr> 
                            <tr>
                                <td>08</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr> 
                            <tr>
                                <td>07</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr> 
                            <tr>
                                <td>06</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr> 
                            <tr>
                                <td>05</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr>  
                            <tr>
                                <td>04</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr>  
                            <tr>
                                <td>03</td>
                                <td>This is the notice page.</td>
                                <td>71,464</td>                    
                                <td>2021-10-07</td>                            
                            </tr>                           
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


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  

  <script>  
$('table').DataTable();  
</script>

<!-- ==========x==========x========== data table script End ==========x==========x========== -->
@endsection