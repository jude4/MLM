<div id="trad-section-mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
@if ($editMode==true) 
style="display: block" 
class="modal fade pr-0 show in" 
aria-modal="true" 
@else 
class="modal fade pr-0 in" 
aria-hidden="true" 
@endif
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content look-modal">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>    
            <div class="modal-body">
                <div class=" text-left">
                    <h4>Segment Trading</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4 mod-trd-sec">
                    <div class="row justify-content-center">
                       <div class="col-md-6 col-sm-10 col-11">
                            <div class="box-bord">
                                <div class="d-flex justify-content-between p-3">
                                    <div class="bot-head-text align-self-center">BTC</div>
                                    <div class="text-right">
                                        <div class="bot-head-sub-text">73,586,000</div>
                                        <div class="bot-head-sub-text">-0.3</div>
                                        <div class="bot-head-sub-text">221,000</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Starting Price</label>
                                <input type="number" class="form-control lbl-inp-mod"  wire:model.defer='starting_price'>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Transaction amount by segment</label>
                                <input type="number" class="form-control lbl-inp-mod"  wire:model.defer='amount_by_segment'>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Selling Yield (%)</label>
                                <input type="number" class="form-control lbl-inp-mod" placeholder="%" wire:model.defer='percentage_yield'> 
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 0.5)">0.5%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 0.6)">0.6%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 0.7)">0.7%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 0.8)">0.8%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 0.9)">0.9%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 1.0)">1%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 1.5)">1.5%</div>
                                <div style="cursor: pointer" class="per-sub-text" wire:click="$set('percentage_yield', 2.0)">2%</div>
                            </div>
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Number Of Segments</label>
                                <input type="number" max="6" min="1" class="form-control lbl-inp-mod" wire:model='number_of_segments'>
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <button wire:click="placeOrder" class="btn-mod-place-ord">Place an order</button>
                                <a id="closemodal" href="#" class="btn-mod-cancle" data-dismiss="modal" aria-label="Close">Cancellation</a>
                            </div>
                       </div>
                        <div class="col-md-6 col-sm-10 col-11">
                            @if ($number_of_segments >= 1)
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st selling price</label>
                                <input type="number" class="form-control lbl-inp-mod-righ" wire:model='first_selling_price'>
                            </div>
                            @endif
                            @if ($number_of_segments >= 2)
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">2nd selling price</label>
                                <input type="number" class="form-control lbl-inp-mod-righ" wire:model='second_selling_price'>
                            </div>
                            @endif
                            @if ($number_of_segments >= 3)
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">3rd selling price</label>
                                <input type="number" class="form-control lbl-inp-mod-righ" wire:model='third_selling_price'>
                            </div>
                            @endif
                            @if ($number_of_segments >= 4)
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">4th selling price</label>
                                <input type="number" class="form-control lbl-inp-mod-righ" wire:model='fourth_selling_price'>
                            </div>
                            @endif
                            @if ($number_of_segments >= 5)
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">5th selling price</label>
                                <input type="number" class="form-control lbl-inp-mod-righ" wire:model='fifth_selling_price'>
                            </div>
                            @endif
                            @if ($number_of_segments >= 6)
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">6th selling price</label>
                                <input type="number" class="form-control lbl-inp-mod-righ" wire:model='sixth_selling_price'>
                            </div>   
                            @endif                           
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>