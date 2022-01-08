@extends('layouts.userlayout')

@section('content')
<!-- Start FAQ section-->

<div id="service-center">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0">FAQ</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container mt-5">
        <div class="service-center">
            <div class="top-head-charge text-center mb-5">FAQ</div> 
            <div class="card-block table-border-style overflow-auto mt-5">
                <div class="container-fluid" id="faq-section">

                    <div class=" py-5">
                        <div class="p-md-5 p-2   mb-5">
                            <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light  rounded-nav">
                              <li class="nav-item flex-sm-fill">
                                <a id="home-tab" data-toggle="tab" href="#normal" role="tab" aria-controls="normal" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Normal</a>
                              </li>
                              <li class="nav-item flex-sm-fill">
                                <a id="profile-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Support</a>
                              </li>
                              <li class="nav-item flex-sm-fill">
                                <a id="contact-tab" data-toggle="tab" href="#deal" role="tab" aria-controls="deal" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Deal</a>
                              </li>
                              <li class="nav-item flex-sm-fill">
                                <a id="contact-tab" data-toggle="tab" href="#fees" role="tab" aria-controls="fees" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Fees</a>
                              </li>
                            </ul>

                            <div class="row mt-5">
                                <div class="col-xl-7 col-lg-6 col-md-4 col-sm-0 col-0 pr-0 mspa-star">
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
                            <div id="myTabContent" class="tab-content">
                                <div id="normal" role="tabpanel" aria-labelledby="normal-tab" class="tab-pane fade px-2 pt-2 pb-5 show active">
                                    <div class="wrapper center-block">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                          @foreach (App\Models\Faq::thatHasCategory('normal') as $index => $faq)
                                          <div class="panel panel-default mb-3">
                                            <div class="panel-heading  @if ($loop->first) active @endif" role="tab" id="heading{{$faq->category.$index}}">
                                                <h4 class="panel-title mb-0">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->category.$index}}" aria-expanded="@if ($loop->first)true @else false @endif" aria-controls="collapse{{$faq->category.$index}}">                                                         
                                                        {{$faq->question}}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{$faq->category.$index}}" class="panel-collapse collapse @if ($loop->first) in show @endif" role="tabpanel" aria-labelledby="heading{{$faq->category.$index}}">
                                                <div class="panel-body d-block">
                                                  {{$faq->answer}}
                                                </div>
                                            </div>
                                        </div>
                                          @endforeach  
                                        </div>
                                    </div>
                                </div>
                              <div id="support" role="tabpanel" aria-labelledby="support-tab" class="tab-pane fade px-4 py-5">
                                  <div id="normal" role="tabpanel" aria-labelledby="normal-tab" class="tab-pane fade px-2 pt-2 pb-5 show active">
                                    <div class="wrapper center-block">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @foreach (App\Models\Faq::thatHasCategory('support') as $index => $faq)
                                            <div class="panel panel-default mb-3">
                                              <div class="panel-heading  @if ($loop->first) active @endif" role="tab" id="heading{{$faq->category.$index}}">
                                                  <h4 class="panel-title mb-0">
                                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->category.$index}}" aria-expanded="@if ($loop->first)true @else false @endif" aria-controls="collapse{{$faq->category.$index}}">                                                         
                                                          {{$faq->question}}
                                                      </a>
                                                  </h4>
                                              </div>
                                              <div id="collapseOne" class="panel-collapse collapse @if ($loop->first) in show @endif" role="tabpanel" aria-labelledby="heading{{$faq->category.$index}}">
                                                  <div class="panel-body d-block">
                                                      {{$faq->answer}}
                                                  </div>
                                              </div>
                                          </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div id="deal" role="tabpanel" aria-labelledby="deal-tab" class="tab-pane fade px-4 py-5">
                                     <div id="normal" role="tabpanel" aria-labelledby="normal-tab" class="tab-pane fade px-2 pt-2 pb-5 show active">
                                    <div class="wrapper center-block">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @foreach (App\Models\Faq::thatHasCategory('deal') as $index => $faq)
                                            <div class="panel panel-default mb-3">
                                              <div class="panel-heading @if ($loop->first) active @endif" role="tab" id="heading{{$faq->category.$index}}">
                                                  <h4 class="panel-title mb-0">
                                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->category.$index}}" aria-expanded="@if ($loop->first)true @else false @endif" aria-controls="collapse{{$faq->category.$index}}">                                                         
                                                          {{$faq->question}}

                                                      </a>
                                                  </h4>
                                              </div>
                                              <div id="collapse{{$faq->category.$index}}" class="panel-collapse collapse @if ($loop->first) in show @endif" role="tabpanel" aria-labelledby="heading{{$faq->category.$index}}">
                                                  <div class="panel-body d-block">
                                                      {{$faq->answer}}
                                                  </div>
                                              </div>
                                          </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div id="fees" role="tabpanel" aria-labelledby="fees-tab" class="tab-pane fade px-4 py-5">
                                     <div id="normal" role="tabpanel" aria-labelledby="normal-tab" class="tab-pane fade px-2 pt-2 pb-5 show active">
                                    <div class="wrapper center-block">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                           @foreach (App\Models\Faq::thatHasCategory('fees') as $index => $faq)
                                           <div class="panel panel-default mb-3">
                                            <div class="panel-heading  @if ($loop->first) active @endif" role="tab" id="heading{{$faq->category.$index}}">
                                                <h4 class="panel-title mb-0">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->category.$index}}" aria-expanded="@if ($loop->first)true @else false @endif" aria-controls="collapse{{$faq->category.$index}}">                                                         
                                                        {{$faq->question}}

                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{$faq->category.$index}}" class="panel-collapse collapse @if ($loop->first) in show @endif" role="tabpanel" aria-labelledby="heading{{$faq->category.$index}}">
                                                <div class="panel-body d-block">
                                                    {{$faq->answer}}
                                                </div>
                                            </div>
                                        </div>
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>




                
<!-- End FAQ section-->
@endsection


@section('scripts')
<script>
    $('.panel-collapse').on('show.bs.collapse', function () {
     $(this).siblings('.panel-heading').addClass('active');
   });
 
   $('.panel-collapse').on('hide.bs.collapse', function () {
     $(this).siblings('.panel-heading').removeClass('active');
   });
   </script>
 
 <!-- ==========x==========x========== collapse script End ==========x==========x========== -->
@endsection