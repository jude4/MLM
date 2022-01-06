<div class="limiter" id="login">
    <div class="login-top-sec">
        <div class="container">
            <div class="row lg-sp">
                <div class="col-lg-6 col-md-7">
                    <div class="wrap-login">
                        <form class="login100-form validate-form " id="sign-up" method="POST" action="{{route('user.findidresult')}}">
                            @csrf
                            <span class="login100-form-subtitle m-b-8 mt-3">V-Elim </span>
                            <span class="log-sub-title">Find ID</span>


                            <label for="inputMyid"
                                class=" col-form-label lb-txt text-black font-weight-bold mb-0 mt-2">Email
                                Authentication
                            </label>
                            <div class=" wrap-input100 validate-input m-b-16 input-group m-b-16">

                                <input type="email " class="form-control input100 @error('email') is-invalid @enderror"
                                    placeholder="Please enter your e-mail." wire:model.defer='email' name="email">
                                <div class="input-group-append">
                                    <button class=" input-group-text snd-var-code hid-code" wire:click.prevent='sendVerificatonCode'> Send verification
                                        code</button>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @if($emailMessage!='')
                                    <div>
                                        <span class="text-success" role="alert">
                                            <small><strong>{{ $emailMessage }}</strong></small>
                                        </span>
                                    </div>
                            @endif
                            <div class=" wrap-input100 validate-input m-b-16 input-group m-b-16 wrp-time">
                                <input type="text " class="form-control input100 @error('code') is-invalid @enderror"
                                    placeholder="Please enter the verification code." wire:model.defer='code'>
                                <div class="input-group-append">
                                    <button class=" input-group-text snd-var-code hid-code" wire:click.prevent='confirmVerificationCode'> Verification code
                                        confirmation</button>

                                </div>
                                <div class="veri-otp">
                                    <p class="mb-0"> 03.00 </p>
                                </div>
                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!-- <div class="fnd-id-time">03:00</div> -->
                            </div>

                            @if ($emailVerified)
                            <div class="login-sec-btn p-t-25 mt-3">
                                <button class="login-btn-frt"> Find ID</button>
                            </div>
                            @endif

                            <div class="log-acc-detail mt-2">return to login page <a href="{{route('login')}}"
                                    class="log-ac-join"><img src="{{asset('image/icon/back.png')}}" class="mr-1"
                                        width="23px">Login</a></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>