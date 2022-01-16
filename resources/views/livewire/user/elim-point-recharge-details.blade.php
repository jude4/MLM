    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row justify-content-center mt-12">
            @forelse($rechargeLists as $item)

            <div class="col-12 mt-12">
                <div class="box-bor">
                    <div class="d-flex justify-content-between py-2">
                        <div class="">
                            <div class="left-side-pon-text">{{ $item->amount }} </div>
                            <div class="left-side-sub-text"> ELIM POINT </div>
                        </div>
                        <div class="align-self-center pr-4 d-flex d-inline-block ">
                            @if ($item->status == $PENDING)
                            <div class="tab-atmo-text">Pending</div>
                            @elseif ($item->status == $CACELLATION)
                            <div class="tab-can-text">Cancellation</div>
                            @else
                            <div class="tab-approval-text">Approval</div>
                            @endif
                            <a href="{{route('user.elimpointdepositinformation', $item->id)}}" class="btn-right-short-change">Deposit Information</a>
                        </div>
                    </div>
                </div>
            </div>


            @empty

            @endforelse
        </div>


        <div class="mt-20"></div>

    </div>
