<div id="add-user-mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
@if ($editMode == true) style="display: none" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true"@endif>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header border-bottom-0 ">

            </div>
            <div class="modal-body">
                <div class=" text-center">
                    <h4 class="to-re-chang">The member is added to MY TREE.</h4>
                </div>
                <div class="d-flex flex-column  mt-4 ">
                    <div class="row justify-content-center">
                        <div class="col-11 text-center">
                            <div class="conf-texts-mod">Are you sure you want to register?</div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5 mt-5">
                        <div class="col-md-3 col-sm-3 col-5">
                            <a href="#" class="btn-model-resd" wire:click='initiate'>Confirm</a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-5">
                            <a href="#" class="btn-model-close btn-close" aria-label="Close"
                                data-dismiss="modal">Cancellation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
