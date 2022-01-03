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
                            <h5>Notice list</h5>
                            <div class="">
                                <a href="notice-register.html" class="btn btn-enrollment mt-3">Enrollment</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto mt-5">
                            <div class="container-fluid">  
                                <form>
                                    <div class="row justify-content-md-end">
                                        <div class="px-3">
                                            <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                                                <div class="start-date-input">
                                                    <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">    
                                                </div>
                                                <div class="exchage-icon align-items-center d-flex justify-content-center">
                                                    ~        
                                                </div>
                                                <div class="end-date-input">
                                                    <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-md-end">
                                        <div class="col-12 d-flex justify-content-md-end">
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select">
                                                        <option value="used" selected>
                                                            =Used=
                                                        </option>
                                                        <option value="used1" class="text-left">
                                                        used
                                                        </option>
                                                        <option value="notused" class="text-left">
                                                          not used
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="input-group float-left w-auto mb-2">
                                                  <div class="input-group-prepend">
                                                    <select class="custom-select">
                                                        <option value="searchoption" selected>
                                                           =Search Options=
                                                        </option>
                                                        <option value="noticelist" class="text-left">
                                                          Notice title
                                                        </option>
                                                        <option value="noticelist" class="text-left">
                                                          Name
                                                        </option>
                                                        
                                                    </select>
                                                  </div>
                                                  <input type="text" class="form-control" placeholder="Please select a search option.">
                                                </div>

                                                <div class="btn-group mb-2 ml-2">
                                                    <button type="button" class="btn btn-search">Search</button>
                                                    <button type="button" class="btn btn-reset">Initialization</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="row">  
                                    <div class="col-12 table-start">
                                    <p class="count-list">Total : 14 Count (1/1)Page</p>   
                                      <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove img-size">  
                                        <thead class="table-header-bg">
                                            <tr>
                                                <th class="border-bottom-0">No.</th>
                                                <th class="border-bottom-0">PK</th>
                                                <th class="border-bottom-0">Notice title</th>
                                                <th class="border-bottom-0">Whether or not to use</th>
                                                 <th class="border-bottom-0">views</th>
                                                <th class="border-bottom-0">Registration date</th>
                                                <th class="border-bottom-0">correction</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>3235</td>
                                                <td>blahblahblah</td>
                                                <td>used</td>                               
                                                <td>25,053</td>
                                                <td>2021-07-02 08:34:34</td>
                                                 <td class="">
                                                    <a href="notice-modification.html" class="btn  btn-correction">    correction
                                                    </a>
                                                </td>                 
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
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    </div>
</div>
@endsection