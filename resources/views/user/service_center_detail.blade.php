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
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="ser-star-txt mb-3">V-Elim Service Started.</div>
                    <div class="d-flex justify-content-between bor-box">
                        <div class="detail-man d-flex justify-content-between">
                            <div class="mr-md-5 mr-2">Manager</div>
                            <div>2021-10-07</div>
                        </div>
                        <div class="detail-views text-right">71,464 views</div>                         
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-4">
                <div class="col-12">
                    <div class="form-outline">
                        
                        <textarea class="form-control enter-area" id="textAreaExample2" rows="8" placeholder="
Please enter your details."></textarea>
                       
                    </div>   
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="las-bor-box"></div>
                </div>
            </div>

            <div class="text-right mb-20">
                <a href="service-center.html" class="btn-service-listd">List</a>
            </div>
            <div class="mt-21"></div>
        </div>
    </div>
</div>




                
<!-- End ELIM Point view detail  section-->
@endsection