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
                                    <h5>MLM Membership Management</h5>
                                    <div class="">
                                        <a href="#" class="btn btn-enrollment mt-3" onclick="exportData()">EXEL DOWNLOAD</a>
                                    </div>
                                </div>

                                <div class="card-block table-border-style overflow-auto">
                                    <div class="container-fluid">  
                                        
                                        @livewire('admin.mlm-member-tree-list')
                                        {{-- @livewire('admin.mlm-tree-structure') --}}
                                       
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


<!--add MLM Member  Modal end -->

<div class="modal fade" id="add-members-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0 mord-head">
        </div>
        <div class="modal-body">
          <div class="row justify-content-center">
              <div class="col-11 text-center">
                  <h4>Add MLM Member</h4>
              </div>
          </div>
          <div class="row justify-content-center mb-2">
              <div class="col-11 text-left">
                  <div class="first-select-option mr-1  mb-2">
                      <select name="" id="id">
                          <option class="opt" value="ID">ID</option>
                          <option value="nickname">Nickname</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center mb-4 ">
              <div class="col-md-3 col-sm-11 col-11 text-left mr-md-2 mr-0 pl-md-0 pl-3">
                  <div class="second-select-option mr-1  mb-2">
                      <select name="" id="id">
                          <option class="" value="ID">=Search Options=</option>
                          <option class="" value="ID">ID</option>
                          <option value="nickname">Nickname</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-5 col-sm-8 col-8 ml-md-2 ml-sm-0 pr-1 pl-0">
                 <input type="text" class="form-control search-pro-pv-input" placeholder="USER">
              </div>
              <div class="col-2 px-0 text-right mt-2">
                  <a href="#" class="search-modal-btn">Search</a>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class=col-12>
                  <div class="card-block table-border-style ">
                      <div class="container-fluid px-2">           
                          <div class="row">  
                              <div class="col-12 table-start">
                                  <table class="table modal-table-transfer dt-responsive ">  
                                      <thead class="table-header-bg">
                                          <tr >
                                              <th class="borders-0">ID</th>
                                              <th class="border-bottom-0">nickname</th>                                           
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="form-check">
                                                      <input class="form-check-input mr-4" type="checkbox" value="" id="defaultCheck1" checked>
                                                      <label class="form-check-label ml-4 add-mod" for="defaultCheck1">
                                                          USER01
                                                      </label>
                                                  </div>
                                             </td>
                                              <td>moonlight angel</td>                                                                
                                          </tr> 
                                          <tr>
                                              <td>
                                                  <div class="form-check">
                                                      <input class="form-check-input mr-4" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label add-mod ml-4" for="defaultCheck1">
                                                          USER02
                                                      </label>
                                                  </div>
                                             </td>
                                              <td>Conan</td>                                                                
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="form-check">
                                                      <input class="form-check-input mr-4" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label add-mod ml-4" for="defaultCheck1">
                                                          USER03
                                                      </label>
                                                  </div>
                                             </td>
                                              <td>Frog medium sake</td>                                                                
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="form-check">
                                                      <input class="form-check-input mr-4" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label add-mod ml-4" for="defaultCheck1">
                                                          USER04
                                                      </label>
                                                  </div>
                                             </td>
                                              <td>happy girl muscle man</td>                                                                
                                          </tr>
                                          
  
                                      </tbody> 
                                  </table>  
                              </div>  
                          </div>  
                      </div>  
                  </div>
              </div>
          </div>
          
          <div class="row justify-content-center mb-4 mt-3">
              <div class="col-11">
                  <div class="mod-btn d-flex justify-content-between">
                      <a href="#" class="btn-model-register" >New registration</a> 
                      <a href="#" class="btn-model-select" >Addition</a> 
                      <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">To Close</a>
                  </div>
              </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- ------------add new MLM member modal----------------- -->
  
  <div class="modal fade" id="add-mlm-new-member-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content mord-head">
        <div class="modal-header mod-disp text-center">
          
          
        </div>
        <div class="modal-body">
         <div class="row justify-content-center">
              <div class="col-11 text-center">
                  <h4 class="to-re-chang">Add New MLM Members</h4>
              </div>
          </div>
          <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
              <div class="row justify-content-center">
                  <div class="col-11">
                      <form>
                          <div class="form-group text-left">
                              <label for="exampleInputEmail1" class="tree-mod-lable">ID</label>
                              <input type="email" class="form-control add-mod-inp"  placeholder="Please enter your ID.">
                              
                          </div>
                          <div class="form-group text-left">
                              <label for="exampleInputEmail1" class="tree-mod-lable">Nickname</label>
                              <input type="email" class="form-control add-mod-inp"  placeholder="Please enter your nickname.">
                              
                          </div>
                          <div class="form-group text-left">
                              <label for="exampleInputEmail1"class="tree-mod-lable">Password <span class="psw-mds-text">(8 or more digits, including special characters, including numbers)</span></label>
                              <input type="email" class="form-control add-mod-inp"  placeholder="Please enter a password.">
                              
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control add-mod-inp"  placeholder="Please re-enter your password.">
                          </div>
                      </from>
                  </div>
              </div>
              <div class="row justify-content-center mb-5 mt-5">
                  <div class="col-md-3 col-sm-3 col-5">
                      <a href="#" class="btn-model-resd">Addition</a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-5">
                      <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">Cancellation</a>
                  </div>
              </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <!-- ------------register msg modal----------------- -->
  
  <div class="modal fade" id="register-msg-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content mord-head">
        <div class="modal-header mod-disp text-center">
        </div>
        <div class="modal-body">
         <div class="row justify-content-center">
              <div class="col-11 text-center form-title-text">
                  <h4 class="to-re-chang">MLM members will be added at that location.</h4>
                  <div class="form-with-sub-titles">Are you sure you want to register?</div>
              </div>
          </div>
          <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
              <div class="row justify-content-center">
                  <div class="col-11">
                      
                  </div>
              </div>
              <div class="row justify-content-center mb-5 mt-5">
                  <div class="col-md-3 col-sm-3 col-5">
                      <a href="#" class="btn-model-resd">Confirm</a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-5">
                      <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">Cancellation</a>
                  </div>
              </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection