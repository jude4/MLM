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
                            <h5>Admin List</h5>
                            <div class="">
                                <a href="administrator-registration.html" class="btn btn-enrollment mt-3">Enrollment</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto">
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
                                                        <option value="status" selected>
                                                            =Status=
                                                        </option>
                                                        <option value="activation" class="text-left">
                                                            Activation
                                                        </option>
                                                        <option value="inactive" class="text-left">
                                                            inactive
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="input-group float-left w-auto mb-2">
                                                  <div class="input-group-prepend">
                                                    <select class="custom-select">
                                                        <option value="status" selected>
                                                            =Search Options=
                                                        </option>
                                                        <option value="activation" class="text-left">
                                                            Id
                                                        </option>
                                                        <option value="inactive" class="text-left">
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
                                      <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove">  
                                        <thead class="table-header-bg">
                                            <tr>
                                                <th class="border-bottom-0">No.</th>
                                                <th class="border-bottom-0">PK</th>
                                                <th class="border-bottom-0">ID</th>
                                                <th class="border-bottom-0">Name</th>
                                                <th class="border-bottom-0">Department in charge</th>
                                                <th class="border-bottom-0">state</th>
                                                <th class="border-bottom-0">last login</th>
                                                <th class="border-bottom-0">Registration date</th>
                                                <th class="border-bottom-0">correction</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                         <tr>
                                            <td>1</td>
                                            <td>30</td>
                                            <td>admin01</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>operation team</td> 
                                             <td>activation</td>  
                                             <td>2020-12-10 10:35:52</td> 
                                             <td>2020-12-10 10:35:52</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>29</td>
                                            <td>admin02</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>operation team</td> 
                                             <td>activation</td>  
                                             <td>2020-12-14 16:19:22</td> 
                                             <td>2020-12-14 16:19:22</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>28</td>
                                            <td>admin03</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>planning team</td> 
                                             <td>activation</td>  
                                             <td>2021-06-29 17:49:20</td> 
                                             <td>2021-06-29 17:49:20</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>27</td>
                                            <td>admin04</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>planning team</td> 
                                             <td>inactive</td>  
                                             <td>2021-06-29 17:49:20</td> 
                                             <td>2021-06-29 17:49:20</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                  Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>30</td>
                                            <td>admin01</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>operation team</td> 
                                             <td>activation</td>  
                                             <td>2020-12-10 10:35:52</td> 
                                             <td>2020-12-10 10:35:52</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>29</td>
                                            <td>admin02</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>operation team</td> 
                                             <td>activation</td>  
                                             <td>2020-12-14 16:19:22</td> 
                                             <td>2020-12-14 16:19:22</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>28</td>
                                            <td>admin03</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>planning team</td> 
                                             <td>activation</td>  
                                             <td>2021-06-29 17:49:20</td> 
                                             <td>2021-06-29 17:49:20</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>27</td>
                                            <td>admin04</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>planning team</td> 
                                             <td>inactive</td>  
                                             <td>2021-06-29 17:49:20</td> 
                                             <td>2021-06-29 17:49:20</td>                                          
                                            <td class="">
                                               <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>30</td>
                                            <td>admin01</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>operation team</td> 
                                             <td>activation</td>  
                                             <td>2020-12-10 10:35:52</td> 
                                             <td>2020-12-10 10:35:52</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>29</td>
                                            <td>admin02</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>operation team</td> 
                                             <td>activation</td>  
                                             <td>2020-12-14 16:19:22</td> 
                                             <td>2020-12-14 16:19:22</td>                                          
                                            <td class="">
                                               <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>28</td>
                                            <td>admin03</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>planning team</td> 
                                             <td>activation</td>  
                                             <td>2021-06-29 17:49:20</td> 
                                             <td>2021-06-29 17:49:20</td>                                          
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                   Correction
                                                </a>
                                            </td>                   
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>27</td>
                                            <td>admin04</td>                    
                                            <td>Hong Gil Dong</td> 
                                            <td>planning team</td> 
                                            <td>inactive</td>  
                                            <td>2021-06-29 17:49:20</td> 
                                            <td>2021-06-29 17:49:20</td>
                                            <td class="">
                                                <a href="admin-management-edit.html" class="btn  btn-correction">
                                                  Correction
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