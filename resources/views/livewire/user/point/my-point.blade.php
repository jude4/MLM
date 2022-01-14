<div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-12 col-12 mb-2">
        <div class="box-bor">
            <div class="main-point d-flex justify-content-between">
                <div class="left-side-cont  p-md-4 p-2 align-self-center">
                    <div class="left-sub-detail mb-2">ELIM POINT</div>
                    <div class="left-sub-details">{{ auth()->user()->elim_points }}</div>

                </div>
                <div class="right-side-cont p-md-4 p-2">
                    <div class="mb-4">
                        <a href="{{route('user.mypointlist')}}" class="btn-point-view">View details</a>
                    </div>
                    <div class="mb-4">
                        <a href="{{route('user.mypointexchange')}}" class="btn-point-exchange">To Exchange</a>
                    </div>
                    <div class="my-point-send">
                        <a href="my-point-send.html" class="btn-point-send">Send</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-6 col-md-8 col-sm-12 col-12 mb-2">
        <div class="box-bor2">
            <div class="main-points d-flex justify-content-between">
                <div class="left-side-cont  p-md-4 p-2 align-self-center">
                    <div class="left-sub-detail mb-2">T - POINT</div>
                    <div class="left-sub-details">{{ auth()->user()->t_points }}</div>
                </div>
                <div class="right-side-cont p-md-4 p-2 align-self-center">
                    <div class="mb-3"></div>
                    <div class="mb-4">
                        <a href="{{route('user.mypointtlist')}}" class="btn-point-view">View details</a>
                    </div>
                    <div class="mb-4">
                        <a href="{{route('user.trading')}}" class="btn-point-exchange">Go to Trading</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
