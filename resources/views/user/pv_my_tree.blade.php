@extends('layouts.userlayout')

@section('content')

<div id="pvm-req-pg">
    <div class="bg05">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-2 col-md-0">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 align-self-center mb-4">
                            <div class="header-title text-center">
                                <h3 class="mb-0 ">PV management</h3>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-9 col-10">
                            <div class="bg03">
                                <img src="{{asset('image/bg03.png')}}" width="100%">
                            </div>
                            <div class="tot-sub-pos1">
                                 <div class="total-text1">TOTAL PV </div>
                                 <div class="total-text2 "> 10,000 won</div>
                            </div>
                            <div class="tot-sub-pos2">
                                 <div class="total-text1">Available PV </div> 
                                 <div class="total-text2 "> 7,000 won</div>
                            </div>
                            <div class="tot-sub-pos3">
                                 <div class="total-text1">Earned PV </div> 
                                 <div class="total-text2 "> 3,000 won</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>




<div id="pvm-with-req">
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <nav id="sidebar" class="box-shad ">
                    <div class="sub-sp">
                        <div class="user-icons">
                            <div class="user-imgs text-center pt-4">
                                <img src="{{asset('image/icon/user02.png')}}" width="65px">
                            </div>
                            <div class="user-nm pt-2">Gyewang01</div>
                            <div class="user-sub-nm ">Gyewang01</div>
                            <div class="exchnge-link pt-3 text-center"><a href="{{route('user.profile')}}">Go to My Information</a></div>
                        </div>
                    </div>
                    <ul class="list-unstyled components ">
                        <li class="active disn">
                            <a href="{{route('user.pvmytree')}}" >My Tree</a>
                            
                        </li>
                       
                        
                    </ul>
                </nav>
                <div id="content">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid mb-3">
                            <button type="button" id="sidebarCollapse" class="btn btn-info d-md-none d-block">
                                <i class="fas fa-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                            <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav text-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Page</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-4 text-center">
                            <a href="{{route('user.krwwithdrawalrequest')}}"class="pv-img">
                                <img src="{{asset('image/icon/top04.png')}}">
                                <div class="pv-sub-text py-2">MY PV</div>
                            </a>
                        </div>

                        <div class="col-4 text-center">
                            <a href="{{route('user.pvcheckaccumulationhistory')}}"class="pv-img">
                                <img src="{{asset('image/icon/top02.png')}}" >
                                <div class="pv-sub-text py-2">Check History</div>
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="{{route('user.pvmytree')}}"class="pv-img">
                                <img src="{{asset('image/icon/top06.png')}}" >
                                <div class="pv-sub-text py-2">MY TREE</div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <div class="box-bor my-5">

                            </div>
                        </div>
                    </div>

                    <div class="pvm-application" id="tree-structure">
                    <div class="card-block table-border-style table-responsive">
                        <div class="container-fluid px-5">           
                            <div class="row">  
                                <div class="col-12 table-start">
                                    <div class="table-top-head mb-5">MY TREE</div>
                                </div>  
                            </div>  
                            <div class="row">
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
                                            <ol class="carousel-indicators">
                                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                              <li data-target="#myCarousel" data-slide-to="1"></li>
                                              <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>   
                                             <ol class="carousel-indicators">
                                                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                                <li data-target="#multi-item-example" data-slide-to="1"></li>
                                                <li data-target="#multi-item-example" data-slide-to="2"></li>
                                            </ol>
                                            
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="main-tree-structure mt-5">        
                                                        <div class="level-1 rectangle">
                                                            <div class="level-header"></div>
                                                            <div class="level-content">
                                                                <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale">Resale</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ol class="level-2-wrapper p-0">
                                                            <li>
                                                                <div class="level-2 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale">Resale</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ol class="level-3-wrapper p-0">
                                                                    <li>
                                                                        <div class="level-3 rectangle">
                                                                            <div class="level-header"></div>
                                                                            <div class="level-content">
                                                                                <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                                    <a href="#" class="btn-resale-sec">Resale</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ol class="level-4-wrapper p-0">
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
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
                                                                                <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                                    <a href="#" class="btn-resale-sec">Resale</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ol class="level-4-wrapper p-0">
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
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
                                                                        <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale">Resale</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ol class="level-3-wrapper p-0">
                                                                    <li>
                                                                        <div class="level-3 rectangle">
                                                                            <div class="level-header"></div>
                                                                            <div class="level-content">
                                                                                <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                                <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                                    <a href="#" class="btn-resale-sec">Resale</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ol class="level-4-wrapper p-0">
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
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
                                                                                <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                                    <a href="#" class="btn-resale">Resale</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ol class="level-4-wrapper p-0">
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="level-4 rectangle">
                                                                                    <div class="level-header"></div>
                                                                                    <div class="level-content">
                                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
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
                                                <div class="item">
                                                    <div class="main-tree-structure mt-5">
                                                        <div class="level-2 rectangle">
                                                            <div class="level-header"></div>
                                                            <div class="level-content">
                                                                <div class="box-cen-text pt-4"> Gyewang01 </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> Gyewang 01 </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale">Resale</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ol class="level-6-wrapper p-0">
                                                            <li>
                                                                <div class="level-6 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="level-6 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal">Add</a>
                                                                        </div>
                                                                    </div>
                                                                </div>                                    
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <!-- <div class="item">
                                                   
                                                </div>
                                                <div class="item">
                                                    
                                                </div> -->
                                            </div>
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
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
</div>
    
<!-- -----------add button modal start----------------- -->

<div class="modal fade pr-0" id="add-mlm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content " id="search-modal">
            <div class="modal-header border-bottom-0 mord-head">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>    
            <div id="serch-modal" class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Add MLM Member</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
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
</div>


<!-- -----------add button modal end----------------- -->

<!--resale Modal start -->
<div class="modal fade pr-0" id="resale-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content resale-modal">
            <div class="modal-header border-bottom-0 top-reas-modal">
            
            </div>    
            <div class="modal-body">
                <div class=" text-center">
                    <h4 class="to-re-chang">To Resell</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4 resel-mod">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="bor-box">
                                <div class="left-righ d-flex justify-content-between p-3">
                                    <div class="left-side text-left">
                                        <div class="left-text">ELIM points</div>
                                        <div class="left-text">Earned PV</div>
                                        
                                    </div>
                                    <div class="right-side text-right">
                                        <div class="left-text">250,000 won</div>
                                        <div class="left-text">250,000 won</div>
                                     
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                         <div class="box-bord text-center"></div>
                                    </div>
                                </div>
                               <div class="left-righ d-flex justify-content-between mb-3 p-3">
                                    <div class="left-side text-left">
                                        <div class="left-text">Remaining accumulated PV</div>
                                    </div>
                                    <div class="right-side text-right">
                                        <div class="left-text">50,000 won</div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5 mt-5">
                        <div class="col-md-3 col-sm-4 col-6">
                            <a href="#" class="btn-model-resd">To Resell</a>
                        </div>
                        <div class="col-md-4 col-sm-5 col-6">
                            <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">Cancellation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--resale   Modal end -->


<!--add MLM Member  Modal end -->
<div class="modal fade pr-0" id="add-mlm-member-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content resale-modal">
            <div class="modal-header border-bottom-0 top-reas-modal">
            
            </div>    
            <div class="modal-body">
                <div class=" text-center">
                    <h4 class="to-re-chang">Add New MLM Members</h4>
                </div>
                <div class="d-flex flex-column  mt-4 ">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID</label>
                                    <input type="email" class="form-control add-mod-inp"  placeholder="Please enter your ID.">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nickname</label>
                                    <input type="email" class="form-control add-mod-inp"  placeholder="Please enter your nickname.">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password <span class="psw-mds-text">(8 or more digits, including special characters, including numbers)</span></label>
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


<!--add MLM Member  Modal end -->


<div class="modal fade pr-0" id="add-user-mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header border-bottom-0 ">
            
            </div>    
            <div class="modal-body">
                <div class=" text-center">
                    <h4 class="to-re-chang">The member is added to MY TREE.</h4>
                </div>
                <div class="d-flex flex-column  mt-4 ">
                   <div class="row justify-content-center">
                        <div class="col-11 text-center">
                            <div class="conf-texts-mod">Are you sure you want to register?</div>
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

@section('scripts')
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- ==========x==========x========== Start sidebar JS ==========x==========x========== -->
       <script>
           $(document).ready(()=>{
         
         $('#open-sidebar').click(()=>{
            
             // add class active on #sidebar
             $('#sidebar').addClass('active');
             
             // show sidebar overlay
             $('#sidebar-overlay').removeClass('d-none');
           
          });
         
         
          $('#sidebar-overlay').click(function(){
            
             // add class active on #sidebar
             $('#sidebar').removeClass('active');
             
             // show sidebar overlay
             $(this).addClass('d-none');
           
          });
         
       });
       </script>


<!--  ==========x==========x========== START DATATABLE  JS ==========x==========x========== --> 
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
 <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  


 <script>  
$('table').DataTable();  
</script>

<!-- ==========x==========x========== END DATATABLE  JS ==========x==========x========== -->
   <!-- ==========x==========x==========  END SIDEBAR JS==========x==========x========== -->


   <!-- ---------------sidebar script start-------------- -->
<script>
   $(document).ready(function () {
           $('#sidebarCollapse').on('click', function () {
               $('#sidebar').toggleClass('active');
           });
       });
</script>


<!-- ---------------sidebar script end-------------- -->
@endsection