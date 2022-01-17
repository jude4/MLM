@extends('layouts.userlayout')

@section('content')
    <!-- Start ELIM Point view detail  section-->

<div id="elim-point-sec">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Elim points recharge</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container">
        <div class="point-to-charge">
            <div class="container   mt-5 my-point-tabs">
                <div>
                    <div class="top-head-charge text-center mb-2">Deposit Information</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box-shad-arou">
                            <div class="d-flex justify-content-between p-md-5 p-2">
                                <div class="lft-sid-detail text-left">
                                    <div>Price</div>
                                    <div>Virtual account number</div>
                                    <div>Name of bank</div>
                                    <div>Name of depositor</div>
                                    <div>Deposit account number</div>
                                    <div>Name of bank to deposit</div>
                                </div>
                                <div class="lft-sid-detail text-right">
                                    <div>{{ $elimPointApplication->amount }} won</div>
                                    <div>{{ $elimPointApplication->virtual_account_number }}</div>
                                    <div>{{ $elimPointApplication->bank_name }}</div>
                                    <div>{{ auth()->user()->nickname }}</div>
                                    <div>{{ $elimPointApplication->account_number }}</div>
                                    <div>{{ $elimPointApplication->our_bank }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-12">
                        <ul class="def-pay-text p-0 mt-5">
                            <li class="lis-typ">If payment is not made within 24 hours after application, cancellation will be processed.</li>
                            <li class="lis-typ">If the entered input information and actual deposit information do not match, charging is not possible.</li>
                            <li class="lis-typ">Cancellation after payment is not possible.</li>
                        </ul>
                    </div>
               </div>
              
               <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="d-flex justify-content-between  my-5">
                            <a href="#" class="btn-bottom-change" data-toggle="modal" data-target="#deposit-info-cancel">Cancel</a>
                            <a href="{{route('user.elimpointcharge')}}" class="btn-bottom-back">List</a>
                       </div>
                    </div>
               </div>
               
                 <div class="mt-21"></div>
            </div>
        </div>
    </div>
</div>




                
<!-- End ELIM Point view detail  section-->




<!--ELIM point deposite cancel   Modal start -->

<div class="modal fade pr-0" id="deposit-info-cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content look-modal">
            <div class="modal-header border-bottom-0">
               
            </div>    
            <div class="modal-body">
                <div class=" text-center mb-5">
                  <div class="stp-trad-mods"> Changes cannot be made after cancellation.</div>
                  <div class="stp-trad-sub-mods">Do you want to proceed?</div>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center mb-4">
                        <div class="col-12">
                            <a href="{{route('user.cancel.elimpointdepositinformation', ['id' => $elimPointApplication->id ])}}}" class="btn-dep-confirms">Confirm</a>
                            <a href="#" class="btn-dep-close" data-dismiss="modal" aria-label="Close">To Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ELIM point deposite cancel   Modal end -->
@endsection