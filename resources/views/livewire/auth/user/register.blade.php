<div class="limiter" id="login">
    <div class="login-top-sec">
        <div class="container">
            <div class="row lg-sp">                 
                <div class="col-lg-6 col-md-7">                       
                    <div class="wrap-login">
                        <form class="login100-form validate-form " id="sign-up" method="POST" action="{{ route('register') }}">
                            @csrf

                            <span class="login100-form-subtitle m-b-8 mt-3">V-Elim </span>
                            <span class="log-sub-title">join the membership</span>
                            <div class="wrap-input100 validate-input m-b-16" > 
                                <label  class=" col-form-label lb-txt text-black mb-0 font-weight-bold">ID</label>
                                <input class="form-control input100 @error('uuid') is-invalid @enderror" disabled type="text" name="id"  placeholder="Please enter your ID." wire:model.defer='uuid'>
                                @error('uuid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                           
                            <label for="inputMyid" class=" col-form-label lb-txt text-black font-weight-bold mb-0">E-mail
                                    <span class="emil-sub-details">(You will need it to find your ID or password)</span>
                                </label>
                            <div class=" wrap-input100 validate-input m-b-16 input-group m-b-16">
                                
                                <input type="email" class="form-control input100 @error('email') is-invalid @enderror" placeholder="Please enter your e-mail." wire:model.defer='email'>
                                <div class="input-group-append">
                                    <button class=" input-group-text snd-var-code hid-code" wire:click.prevent='sendVerificatonCode'> Send verification code</button>
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
                            <div class=" wrap-input100 validate-input m-b-16 input-group m-b-16">
                                <input type="text " class="form-control input100 @error('code') is-invalid @enderror" placeholder="Please enter the verification code." wire:model.defer='code'>
                                <div class="input-group-append">
                                    <button class=" input-group-text snd-var-code hid-code" wire:click.prevent='confirmVerificationCode'> Verification code confirmation</button>
                                </div>
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            @if ($emailVerified)
                            <div class="wrap-input100 validate-input m-b-16"> 
                                <label  class=" col-form-label lb-txt text-black mb-0 font-weight-bold">Nickname</label>
                                <input class="form-control input100 @error('nickname') is-invalid @enderror" type="text"  placeholder="Please enter your nickname." wire:model.defer='nickname'>
                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                <label for="inputMyid" class=" col-form-label lb-txt text-black font-weight-bold mb-0">Password
                                 <span class="emil-sub-details">(8 or more digits, including special characters, including numbers)</span>
                                </label>
                                <input class="form-control input100 @error('password') is-invalid @enderror" type="Password"  placeholder="Please enter a password." wire:model.defer='password'> 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input class="form-control input100 mt-2 @error('password_confirmation') is-invalid @enderror" type="password"  placeholder="Please re-enter your password." wire:model.defer='password_confirmation'>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <div class=" flex-sin-pg  w-full p-b-30">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100 @error('agreement') is-invalid @enderror" id="ckb1" type="checkbox" name="remember-me" wire:model.defer='agreement'> 
                                    <label class="label-checkbox100 "> I agree to the Terms of Service </label>
                                    @error('agreement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="ml-3"> <a href="#" class="look-btn-detail"> Look </a> </div>
                            </div>
                            <div class="login-sec-btn p-t-25 ">
                                 <button class="login-btn-frt" wire:click.prevent='register'> Join the membership</button>
                            </div>
                            @endif

                            <div class="log-acc-detail mt-2">return to login page <a href="{{route('login')}}"class="log-ac-join"><img src="{{asset('image/icon/back.png')}}" class="mr-1" width="23px">Login</a></div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>