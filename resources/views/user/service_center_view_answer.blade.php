@extends('layouts.userlayout')

@section('content')
    <!-- Start ELIM Point view detail  section-->

<div id="service-center">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0">1:1 inquiry</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container mt-5">
        <div class="service-center">
            <div class="top-head-charge text-center mb-5">1:1 inquiry</div> 
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="ser-star-txt mb-3">Please contact us.</div>
                    
                </div>
            </div>
            <div class="row mt-3 mb-4">
                <div class="col-12">
                    <div class="form-outline">
                        <label class="ans-con-text">Inquiries</label>
                        <textarea class="form-control enter-area" id="textAreaExample2" rows="8" placeholder=""></textarea>
                       
                    </div>   
                </div>
            </div>
            <div class="row mt-3 mb-4">
                <div class="col-12">
                    <div class="form-outline">
                        <label class="ans-con-text">Answer content</label>
                        <textarea class="form-control enter-area" id="textAreaExample2" rows="8" placeholder=""></textarea>
                       
                    </div>   
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="las-bor-box"></div>
                </div>
            </div>

            <div class="text-right ">
                
                <a href="{{route('user.firstinquiry')}}" class="btn-service-listd">List</a>
            </div>
            <div class="mt-21"></div>
        </div>
    </div>
</div>




                
<!-- End ELIM Point view detail  section-->
@endsection