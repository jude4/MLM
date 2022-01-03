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
                            <h5>Elim Point Application Details</h5>
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
                                                      =Member Type=
                                                    </option>
                                                    <option value="activation" class="text-left">
                                                    General Membership
                                                    </option>
                                                    <option value="inactive" class="text-left">
                                                    MLM member
                                                    </option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                            <div class="select-main-group">
                                                <div class="first-select-option mr-1 float-left mb-2">
                                                    <select class="custom-select">
                                                        <option value="status" selected>
                                                        =Deposit Status=
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
                                                           name
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
                                                <th class="border-bottom-0">Member type</th>                         
                                                <th class="border-bottom-0">ID</th>
                                                <th class="border-bottom-0">Nickname</th>
                                                <th class="border-bottom-0">application amount</th>
                                                <th class="border-bottom-0">state</th>
                                                <th class="border-bottom-0">View deposit information</th>
                                                <th class="border-bottom-0">Approval Confirmation</th>
                                                <th class="border-bottom-0">Application date and time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                         <tr>
                                            <td>1</td>
                                            <td>30</td>
                                             <td>MLM member</td>
                                            <td>USER01</td>               
                                            <td>Hong Gil Dong</td> 
                                            <td>500,000</td> 
                                            <td class="inc-text-changes">atmosphere</td>
                                                                                                       
                                            <td class="">
                                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#Elim-point-transfer-detail-modal">
                                                  Look
                                                </a>
                                            </td> 
                                            <td class="">
                                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#Elim-point-approval-modal">
                                                Approval                                                               </a>
                                                <a href="#" class="btn  btn-ends" data-toggle="modal" data-target="#Elim-point-cancel-modal">
                                                cancellation
                                                </a>
                                            </td>                                     
                                            <td>2020-12-10 10:35:52</td>
                                                              
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

<!-- ------------cancel modal----------------- -->

<div class="modal fade" id="Elim-point-cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <h4 class="modal-title trd-top-end text-center" id="exampleModalLongTitle">Cancel Confirmation</h4>
              </div>
          </div>
          <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                  <div class="row justify-content-center">
                     <div class="col-11">
                          <div class="trd-pass-text">After the administrator cancels, the user application is immediately withdrawn.</div>
                          <div class="trd-pass-text">After final confirmation, please re-enter the administrator password.</div>
                     </div>
                  </div>  
                  
                  <div class="form-group row justify-content-center mt-5 mb-0">
                      <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                      <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                  </div>
                  <div class="form-group row justify-content-center mt-4">
                      <div class="col-11 text-left pl-4">
                          <label class="lble-chrg-inpds  text-left"for="  ">COMMENT</label>
                          <textarea class="form-control rounded-0 inp-chrgs-boxd" id="exampleFormControlTextarea1" rows="5"></textarea>
                      </div>
                  </div>
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                            <a href="#" class="btn-mod-end">Cancel</a>
                         </a>
                      </div>
                  </div>
                      
                 
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- ------------Approval modal----------------- -->
  
  <div class="modal fade" id="Elim-point-approval-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header mod-disp text-center">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="row justify-content-center">
              <div class="col-11 text-center">
                  <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">Confirm Approval</h4>
              </div>
          </div>
          <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                  <div class="row justify-content-center">
                     <div class="col-11">
                          <div class="trd-pass-text">For final approval, please re-enter the administrator password.</div>
                     </div>
                  </div>  
                  
                  <div class="form-group row justify-content-center mt-5 mb-0">
                      <label class="lble-chrg-inpds col-lg-3 col-md-10 col-sm-10 col-10 align-self-center text-left pl-0 p-lg-1">admin password</label>
                      <input type="Password" class="form-control inp-chrgs-boxd col-lg-7 col-md-10 col-sm-10 col-10" placeholder="">
                  </div>
  
                  <div class="form-group row justify-content-center mt-4">
                      <div class="col-11 text-left pl-4">
                          <label class="lble-chrg-inpds  text-left"for="  ">COMMENT</label>
                          <textarea class="form-control rounded-0 inp-chrgs-boxd" id="exampleFormControlTextarea1" rows="5"></textarea>
                      </div>
                  </div>
  
                  <div class="row justify-content-center mt-8">
                      <div class="col-6">
                            <a href="#" class="btn-mod-conf">To Approve</a>
                         </a>
                      </div>
                  </div>
                      
                 
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <div class="modal fade" id="Elim-point-transfer-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <h4 class="modal-title seg-top-titles " id="exampleModalLongTitle">View deposit information</h4>
              </div>
          </div>
          <div class="row justify-content-center mt-3">
              <div class="col-12">
                  <div class="box-shad-arou">
                      <div class="d-flex justify-content-between p-md-3 p-2 ">
                          <div class="lft-sid-detail text-left">
                              <div>recharge amount</div>
                              <div>virtual account number</div>
                               <div>name of bank</div>
                          </div>
                          <div class="lft-sid-detail text-right">
                              <div>123-456-78910</div>
                              <div>500,000 won</div>
                               <div>Our bank</div>
                             
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center mt-2">
              <div class="col-12">
                  <div class="">
                      <div class="d-flex justify-content-between p-md-3 p-2 mb-5">
                          <div class="lft-sid-detail text-left">
                              <div>ID</div>
                              <div>nickname</div>
                              <div>Name of depositor</div>
                              <div>deposit account number</div>
                               <div>Name of bank to deposit</div>
                              
                          </div>
                          <div class="lft-sid-detail text-right">
                              <div>USER01</div>
                              <div>Hong Gil Dong</div>
                              <div>Kim Il-beon</div>
                              <div>111-122-33333</div>
                              <div>Hana Bank</div>
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