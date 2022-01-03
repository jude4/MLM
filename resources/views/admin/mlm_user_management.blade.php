@extends('layouts.adminlayout')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
       <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
            <div class="">
                <ul class="pcoded-item pcoded-left-item">
                    <li class=" pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon pl-0"><img src="assets/images/p09.png" width="26px"><b>BC</b></span>
                            <span class="pcoded-mtext">Admin Management</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                
                                <a href="administator_list.html" class="waves-effect waves-dark d-inline">
                                    <span class="pcoded-micon pr-1  "><i class="fas fa-circle fa-xs d-inline"></i></span>
                                    <span class="pcoded-mtext">Admin List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                             <span class="pcoded-micon pl-0"><img src="assets/images/p22.png" width="26px"><b>BC</b></span>
                            <span class="pcoded-mtext">Member Management</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="member_list.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon pr-1  fas-sp "><i class="fas fa-circle fa-xs d-inline"></i></span>
                                    <span class="pcoded-mtext">Member List</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="member_avatar_list.html" class="waves-effect waves-dark">
                                     <span class="pcoded-micon pr-1"><i class="fas fa-circle fa-xs d-inline"></i></span>
                                    <span class="pcoded-mtext">MLM Membership Management</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   <li class=" pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon pl-0"><img src="assets/images/p02.png" width="30px"><b>BC</b></span>
                            <span class="pcoded-mtext">PV management</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="pv-accumulation-history.html" class="waves-effect waves-dark">
                                   
                                    <span class="pcoded-mtext">Total PV accumulation history</span>
                                </a>
                            </li>
                           <li class="">
                                <a href="pv-usage-history.html" class="waves-effect waves-dark">
                                   
                                    <span class="pcoded-mtext">Total PV usage history</span>
                                </a>
                            </li>
                            
                            <li class="active">
                                <a href="pv-withdrawal-request-history.html" class="waves-effect waves-dark">
                                    
                                    <span class="pcoded-mtext">PV withdrawal request history</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pv-conversion-application-details.html" class="waves-effect waves-dark">
                                   
                                    <span class="pcoded-mtext">PV conversion application details</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pv-transmission-application-details.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">PV transmission application details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><img src="assets/images/p01.png" width="80%"><b>BC</b></span>
                            <span class="pcoded-mtext">point management</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="Elim-point-application-detail.html" class="waves-effect waves-dark">
                                    
                                    <span class="pcoded-mtext">Elim Point Application Details</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="Elim-point-exchange-history.html" class="waves-effect waves-dark">
                                    
                                    <span class="pcoded-mtext">Elim Point Exchange History</span>
                                </a>
                            </li>
                             <li class="">
                                <a href="Elim-point-transfer-history.html" class="waves-effect waves-dark">
                                     
                                    <span class="pcoded-mtext">Elim point transfer history</span>
                                </a>
                            </li>
                             <li class="">
                                <a href="t-point-details-by-member.html" class="waves-effect waves-dark">
                                    
                                    <span class="pcoded-mtext">T point details by member</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=" pcoded-hasmenu pcoded-trigger">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon pl-0"><img src="assets/images/p09.png" width="26px"><b>BC</b></span>
                            <span class="pcoded-mtext">ELIM bot management</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="trading-order-history.html" class="waves-effect waves-dark d-inline">
                                    <span class="pcoded-micon pr-1"><i class="fas fa-circle fa-xs d-inline"></i></span>
                                    <span class="pcoded-mtext">Trading order history</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="trading-setting.html" class="waves-effect waves-dark d-inline">
                                    <span class="pcoded-micon pr-1  fas-sp "><i class="fas fa-circle fa-xs d-inline"></i></span>
                                    <span class="pcoded-mtext">Trading Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-micon pl-0"><img src="assets/images/p03.png" width="30px"><b>BC</b></span>
                            <span class="pcoded-mtext">Customer service center</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="notice-list.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Notice</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="faq-list.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Frequently Asked Questions</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="one-on-one-inquiry.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">One-on-one inquiry</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="">
                        <a href="profile.html" class="waves-effect waves-dark">
                            <span class="pcoded-micon pl-0"><img src="assets/images/p07.png" width="30px"><b>BC</b></span>
                            <span class="pcoded-mtext">My Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        
                    </li>
                     <li class="">
                        <a href="index.html" class="waves-effect waves-dark">
                           <span class="pcoded-micon pl-0"><img src="assets/images/p06.png" width="30px"><b>BC</b></span>
                            <span class="pcoded-mtext">Log out</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
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


                                            <div class="row justify-content-md-end pb-3">
                                                <div class="col-12 d-flex justify-content-md-end">
                                                   
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
                                        <div class="pvm-application" id="tree-structure">
                                            <div class="card-block table-border-style table-responsive">
                                                <div class="container-fluid px-5">           
                                                     
                                                    <div class="row mb-5">
                                                        <div class="col-12">
                                                            <div class="container-fluid box-tree">
                                                                <div class="btn-pluse p-5">
                                                                    <div class="col-1 pls-min-sp">
                                                                    <button type="button" class="  btn-number btn-spd" data-type="plus" data-field="quant[1]">
                                                                      <span class="glyphicon glyphicon-plus "></span>
                                                                    </button>
                                                                    <button type="button" class="  btn-number btn-spd2" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                    <span class="glyphicon glyphicon-minus"></span>
                                                                    </button>
                                                                </div>
                                                                </div>

                                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                                    <ul class="carousel-indicators">
                                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                    </ul>  

                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <div class="main-tree-structure mt-5">
                                                                                <div class="level-1 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                        
                                                                                        <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <ol class="level-2-wrapper p-0">
                                                                                    <li>
                                                                                        <div class="level-2 rectangle">
                                                                                            <div class="level-header"></div>
                                                                                            <div class="level-content">
                                                                                                <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                                 <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ol class="level-3-wrapper p-0">
                                                                                            <li>
                                                                                                <div class="level-3 rectangle">
                                                                                                    <div class="level-header"></div>
                                                                                                    <div class="level-content">
                                                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                                         <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ol class="level-4-wrapper p-0">
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ol>
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="level-3 rectangle">
                                                                                                    <div class="level-header"></div>
                                                                                                    <div class="level-content">
                                                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                                         <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ol class="level-4-wrapper p-0">
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ol>
                                                                                            </li>
                                                                                        </ol>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="level-2 rectangle">
                                                                                            <div class="level-header"></div>
                                                                                            <div class="level-content">
                                                                                                <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                                 <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ol class="level-3-wrapper p-0">
                                                                                            <li>
                                                                                                <div class="level-3 rectangle">
                                                                                                    <div class="level-header"></div>
                                                                                                    <div class="level-content">
                                                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                                         <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ol class="level-4-wrapper p-0">
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>                                    
                                                                                                    </li>
                                                                                                </ol>
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="level-3 rectangle">
                                                                                                    <div class="level-header"></div>
                                                                                                    <div class="level-content">
                                                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                                         <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ol class="level-4-wrapper p-0">
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <div class="level-4 rectangle">
                                                                                                            <div class="level-header"></div>
                                                                                                            <div class="level-content">
                                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>                            
                                                                                                    </li>
                                                                                                </ol>
                                                                                            </li>
                                                                                        </ol>
                                                                                    </li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>

                                                                        <div class="carousel-item">
                                                                            <div class="main-tree-structure mt-5">
                                                                                <div class="level-2 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                         <div class="box-btn pt-2 pb-4 d-flex justify-content-center gyn-texts">              Gyewang 01
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <ol class="level-6-wrapper p-0">
                                                                                    <li>
                                                                                        <div class="level-6 rectangle">
                                                                                            <div class="level-header"></div>
                                                                                            <div class="level-content">
                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                    <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="level-6 rectangle">
                                                                                            <div class="level-header"></div>
                                                                                            <div class="level-content">
                                                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                                                    <a href="#" class="btn-resale-secs"  data-toggle="modal" data-target="#add-members-modal">Add</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>                                    
                                                                                    </li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon"></span>
                                                                    </a>

                                                                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                                    <span class="carousel-control-next-icon"></span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="mt-21"></div>
                                                </div>  
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