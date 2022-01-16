<div id="resale-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
@if ($editMode == true) style="display: none" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true"@endif >
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
                                        <div class="left-text">{{$reseller->elim_points+200000}} won</div>
                                        <div class="left-text">{{$reseller->earned_pv}}won</div>

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
                                        <div class="left-text">{{$reseller->earned_pv - 200000}} won</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5 mt-5">
                        <div class="col-md-3 col-sm-4 col-6">
                            <a href="#" class="btn-model-resd" wire:click='resale'>To Resell</a>
                        </div>
                        <div class="col-md-4 col-sm-5 col-6">
                            <a href="#" class="btn-model-close btn-close" aria-label="Close"
                                data-dismiss="modal">Cancellation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
