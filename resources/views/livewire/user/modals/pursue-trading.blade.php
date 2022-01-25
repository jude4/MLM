<div id="trad-pursue-mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
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
                    <h4>Chase Transaction</h4>
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
                                <label class="lbl-mod-text">Total trading and operating capital</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="2,000,000">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Selling Yield (%)</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="2,000,000 ">
                            </div>
                             <div class="d-flex justify-content-between mt-2 mb-4">
                                <div class="per-sub-text">0.5%</div>
                                <div class="per-sub-text">0.6%</div>
                                <div class="per-sub-text">0.7%</div>
                                <div class="per-sub-text">0.8%</div>
                                <div class="per-sub-text">0.9%</div>
                                <div class="per-sub-texts">1%</div>
                                <div class="per-sub-text">1.5%</div>
                                <div class="per-sub-text">2%</div>
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="2,000,000 ">
                            </div>
                             <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-texts">10%</div>
                                <div class="per-sub-text">20%</div>
                                <div class="per-sub-text">30%</div>
                                <div class="per-sub-text">40%</div>
                                <div class="per-sub-text">50%</div>   
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">1st purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="73,586,000">
                            </div>


                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">2nd purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="400,000">
                            </div>
                             <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-text">10%</div>
                                <div class="per-sub-texts">20%</div>
                                <div class="per-sub-text">30%</div>
                                <div class="per-sub-text">40%</div>
                                <div class="per-sub-text">50%</div>   
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">2nd purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="73,000,000">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">3rd purchase amount</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="600,000">
                            </div>
                             <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-text">10%</div>
                                <div class="per-sub-text">20%</div>
                                <div class="per-sub-texts">30%</div>
                                <div class="per-sub-text">40%</div>
                                <div class="per-sub-text">50%</div>   
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">3rd purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="72,820,000">
                            </div>


                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">4th purchase quantity</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="800,000">
                            </div>
                             <div class="d-flex justify-content-between mt-2 mb-0">
                                <div class="per-sub-text">10%</div>
                                <div class="per-sub-text">20%</div>
                                <div class="per-sub-text">30%</div>
                                <div class="per-sub-texts">40%</div>
                                <div class="per-sub-text">50%</div>   
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">4th purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod" placeholder="72,300,000">
                            </div>                               
                            <div class="d-flex justify-content-between my-4">
                                <a href="#" class="btn-mod-place-ord">Place an order</a>
                                <a rel="modal:close" href="#" class="btn-mod-cancle" data-dismiss="modal" aria-label="Close">Cancellation</a>
                            </div>
                       </div>
                        <div class="col-md-6 col-sm-10 col-11">
                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">1st average purchase price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,586,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">1st selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="74,321,860">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Average purchase price in the second chase</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,100,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">2nd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,831,000">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Average purchase price at the 3rd chase</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="72,940,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">3rd selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,669,400">
                            </div>

                            <div class="form-group  mt-2 mb-0">
                                <label class="lbl-mod-text">Average purchase price at the 4th chase</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="72,510,000">
                            </div>
                            <div class="form-group  mt-2 mb-4">
                                <label class="lbl-mod-text">4th selling price</label>
                                <input type="text" class="form-control lbl-inp-mod-righ" placeholder="73,235,100">
                            </div>
                                                           
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>