    <div id="trading-order-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mod-disp">
                    <h4 class="modal-title seg-top-titles" id="exampleModalLongTitle">Segment trading</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-10 col-11">
                                <div class="box-bord">
                                    <div class="d-flex justify-content-between p-3">
                                        <div class="bot-head-text align-self-center">{{ $section->currency }}</div>
                                        <div class="text-right">
                                            <div class="bot-head-subs-text">73,586,000</div>
                                            <div class="bot-head-subs-text">-0.3</div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle bot-head-subn-text" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i>170
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">170</a></li>
                                                    <li><a href="#">2850</a></li>
                                                    <li><a href="#">4025</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">Starting Price</label>
                                    <input type="text" value="{{ $section->starting_price }}" class="form-control lbl-inp-mod-righ" placeholder="{{ $section->starting_price }}">
                                </div>

                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">Transaction amount by segment</label>
                                    <input type="text" value="{{ $section->amount_by_segment }}" class="form-control lbl-inp-mod-righ" placeholder="2,000,000 ">
                                </div>

                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">Selling Yield (%)</label>
                                    <input type="text" value="{{ $section->percentage_yield }}" class="form-control lbl-inp-mod-righ" placeholder="1">
                                </div>

                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">Number Of Segments</label>
                                    <input type="text" value="{{ $section->number_of_segments }}" class="form-control lbl-inp-mod-righ" placeholder="6">
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-10 col-11">
                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">1st selling price</label>
                                    <input type="text" value="{{ $section->first_selling_price ?? '-' }}" class="form-control lbl-inp-mod-righ" placeholder="1,696">
                                </div>
                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">2nd selling price</label>
                                    <input type="text" value="{{ $section->second_selling_price ?? '-' }}" class="form-control lbl-inp-mod-righ" placeholder="1712">
                                </div>
                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">3rd selling price</label>
                                    <input type="text" value="{{ $section->third_selling_price ?? '-' }}" class="form-control lbl-inp-mod-righ" placeholder="1729">
                                </div>
                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">4th selling price</label>
                                    <input type="text" value="{{ $section->fourth_selling_price ?? '-' }}" class="form-control lbl-inp-mod-righ" placeholder="1,696">
                                </div>
                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">5th selling price</label>
                                    <input type="text" value="{{ $section->fifth_selling_price ?? '-' }}" class="form-control lbl-inp-mod-righ" placeholder="1,763">
                                </div>
                                <div class="form-group  mt-2 mb-0">
                                    <label class="lbl-mod-text">6th selling price</label>
                                    <input type="text" value="{{ $section->sixth_selling_price ?? '-' }}" class="form-control lbl-inp-mod-righ" placeholder="1,780">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <a href="#" data-dismiss="modal" class="btn-mod-conf">Confirm</a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
