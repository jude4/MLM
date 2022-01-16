<div  id="add-mlm-member-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    @if ($editMode == true) style="display: none" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true"@endif
    >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content resale-modal">
            <div class="modal-header border-bottom-0 top-reas-modal">

            </div>
            <div class="modal-body">
                <div class=" text-center">
                    <h4 class="to-re-chang">Add New MLM Members</h4>
                </div>
                <div class="d-flex flex-column  mt-4 ">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <form>
                                <div class="form-group">
                                    {{-- <label for="exampleInputEmail1">ID</label> --}}
                                        <input class="form-control add-mod-inp @error('uuid') is-invalid @enderror" disabled type="text" name="id"  placeholder="Please enter your ID." wire:model.defer='uuid'>
                                @error('uuid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control add-mod-inp @error('email') is-invalid @enderror" placeholder="Please enter your e-mail." wire:model.defer='email'>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nickname</label>
                                        <input class="form-control add-mod-inp @error('nickname') is-invalid @enderror" type="text"  placeholder="Please enter your nickname." wire:model.defer='nickname'>
                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password <span class="psw-mds-text">(8 or more
                                            digits, including special characters, including numbers)</span></label>
                                <input class="form-control add-mod-inp @error('password') is-invalid @enderror" type="Password"  placeholder="Please enter a password." wire:model.defer='password'> 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                </div>
                                <div class="form-group">
                                        <input class="form-control add-mod-inp mt-2 @error('password_confirmation') is-invalid @enderror" type="password"  placeholder="Please re-enter your password." wire:model.defer='password_confirmation'>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                </form>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5 mt-5">
                        <div class="col-md-3 col-sm-3 col-5">
                            <a href="#" class="btn-model-resd"  wire:click='addMember'>Addition</a>
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