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
                            <h5>PV conversion application details</h5>
                            <div class="">
                                <a href="#" class="btn btn-enrollment mt-3">Exel download</a>
                            </div>

                        </div>

                        <div class="card-block table-border-style overflow-auto">
                            <div class="container-fluid">  
                                <form>                                                       
                                    <div class="row justify-content-md-end px-2">
                                        <div class="">
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
                                            <div class="select-main-group ml-1 ">
                                            <div class="first-select-option mr-1 float-left mb-2">
                                                <select class="custom-select">
                                                    <option value="status" selected>
                                                     =TYPE=
                                                    </option>
                                                    <option value="activation" class="text-left">
                                                   Available PV
                                                    </option>
                                                    <option value="inactive" class="text-left">
                                                    resale
                                                    </option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="select-main-group ml-1 ">
                                            <div class="first-select-option mr-1 float-left mb-2">
                                                <select class="custom-select">
                                                    <option value="status" selected>
                                                     =Status=
                                                    </option>
                                                    <option value="activation" class="text-left">
                                                   Approval
                                                    </option>
                                                    <option value="inactive" class="text-left">
                                                    atmosphere
                                                    </option>
                                                    <option value="inactive" class="text-left">
                                                    cancellation
                                                    </option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                            <div class="select-main-group">
                                                
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
                                                           nickname
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
                                                <th class="border-bottom-0">Nickname</th>
                                                <th class="border-bottom-0">TYPE</th>
                                                <th class="border-bottom-0">conversion quantity</th>
                                                <th class="border-bottom-0">state</th>
                                                <th class="border-bottom-0">Approval Confirmation</th>
                                                <th class="border-bottom-0">Application date and time</th>
                                                <th class="border-bottom-0">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>30</td>
                                            <td>USER01</td>               
                                            <td>Hong Gil Dong</td>
                                            <td>Available PV</td>  
                                            <td>500,000</td> 
                                            <td class="incas-text-changes">Approval</td>
                                            <td>-</td>   
                                            <td>2020-12-10 10:35:52</td>                                                    
                                            <td class="">
                                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#pv-conversion-application-modal">
                                                  Look
                                                </a>
                                            </td> 
                                                                                               
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>30</td>
                                            <td>USER02</td>               
                                            <td>Um Hong-gil</td>
                                             <td>resale</td>     
                                            <td>1,00,000</td> 
                                             <td class="inc-text-change1">atmosphere</td>
                                             <td class="">
                                                <a href="#" class="btn  btn-correction" >
                                                Approval                                                               </a>
                                                <a href="#" class="btn  btn-ends" >
                                                cancellation
                                                </a>
                                            </td>     
                                            <td>2020-12-10 10:35:52</td>                                                    
                                            <td class="">
                                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#pv-conversion-application-modal">
                                                  Look
                                                </a>
                                            </td>                                                                                                                           
                                        </tr>
                                           <tr>
                                            <td>1</td>
                                            <td>30</td>
                                            <td>USER01</td>               
                                            <td>Hong Gil Dong</td>
                                            <td>Available PV</td>  
                                            <td>500,000</td> 
                                            <td class="incas-text-changes">Approval</td>
                                            <td>-</td>   
                                            <td>2020-12-10 10:35:52</td>                                                    
                                            <td class="">
                                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#pv-conversion-application-modal">
                                                  Look
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

<!-- ------------pv-conversion detail modal----------------- -->

<div class="modal fade" id="pv-conversion-application-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Conversion Details</h4>
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
                              <div>conversion fee</div>
                              <div>Quantity after </div>
                              <div>Quantity after conversion </div>
                              
                              
                          </div>
                          <div class="lft-sid-detail text-right">
                              <div>USER01</div>
                              <div>Hong Gil Dong</div>
                              <div>10,000 won</div>
                              <div>500,000 won</div>
                              <div>500,000 ELIM POINTs</div>
                               
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