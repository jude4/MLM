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
                                <div class="total-text2 "> {{Auth::user()->totalPv()}} won</div>
                            </div>
                            <div class="tot-sub-pos2">
                                <div class="total-text1">Available PV </div>
                                <div class="total-text2 "> {{number_format(Auth::user()->available_pv)}} won</div>
                            </div>
                            <div class="tot-sub-pos3">
                                <div class="total-text1">Earned PV </div>
                                <div class="total-text2 "> {{number_format(Auth::user()->earned_pv)}} won</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>