<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> V-Elim </title>
<!-- ==========x==========x========== START UI BOOTSTRAP CSS ==========x======== -->

	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
<!-- ==========x==========x========== END UI BOOTSTRAP CSS ==========x========== -->

<!-- ==========x==========x========== START COMMON CSS ==========x===== -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<!-- ==========x==========x========== END COMMONCSS ==========x======== -->	

<!-- ==========x==========x========== START FONT ==========x==========x========= -->
	<link rel="stylesheet" type="text/css" href="{{asset('font/inter/inter-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/nunito-sans/nunitosans.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/roboto/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/noto-sans/noto-sans.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/font-awesome-pro-master/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font/bootstrap-icons/bootstrap-icon.css')}}">
<!-- ==========x==========x========== END FONT ==========x==========x========== -->
</head>
<body>

<!-- START Login Page-->

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
                                    <input class="input100" type="text" name="id"  placeholder="Please enter your ID." value="{{App\Models\User::generateUUID()}}">                                
                                </div>
                               
                                <label for="inputMyid" class=" col-form-label lb-txt text-black font-weight-bold mb-0">E-mail
                                        <span class="emil-sub-details">(You will need it to find your ID or password)</span>
                                    </label>
                                <div class=" wrap-input100 validate-input m-b-16 input-group m-b-16">
                                    
                                    <input type="email" class="form-control input100" placeholder="Please enter your e-mail.">
                                    <div class="input-group-append">
                                        <button class=" input-group-text snd-var-code hid-code"> Send verification code</button>
                                    </div>
                                </div>
                                <div class=" wrap-input100 validate-input m-b-16 input-group m-b-16">
                                    <input type="text " class="form-control input100" placeholder="Please enter the verification code.">
                                    <div class="input-group-append">
                                        <button class=" input-group-text snd-var-code hid-code"> Verification code confirmation</button>
                                    </div>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16"> 
                                    <label  class=" col-form-label lb-txt text-black mb-0 font-weight-bold">Nickname</label>
                                    <input class="input100" type="text"  placeholder="Please enter your nickname.">                                
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                    <label for="inputMyid" class=" col-form-label lb-txt text-black font-weight-bold mb-0">Password
                                     <span class="emil-sub-details">(8 or more digits, including special characters, including numbers)</span>
                                    </label>
                                    <input class="input100" type="Password"  placeholder="Please enter a password."> 
                                    <input class="input100 mt-2" type="text"  placeholder="Please re-enter your password."> 
                                </div>



                                <div class=" flex-sin-pg  w-full p-b-30">
                                    <div class="contact100-form-checkbox">
                                    	<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> 
                                    	<label class="label-checkbox100 "> I agree to the Terms of Service </label>
                                    </div>
                                    <div class="ml-3"> <a href="#" class="look-btn-detail"> Look </a> </div>
                                </div>
                                <div class="login-sec-btn p-t-25 ">
                                 	<button class="login-btn-frt"> Join the membership</button>
                                </div>
                                <div class="log-acc-detail mt-2">return to login page <a href="{{route('login')}}"class="log-ac-join"><img src="{{asset('image/icon/back.png')}}" class="mr-1" width="23px">Login</a></div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





<!-- END OF INDEX PAGE -->


<!-- ==========x==========x========== START JS ==========x==========x========== -->
	
	<script src="{{asset('js/jquery-latest.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<!-- ==========x==========x========== END JS ==========x==========x========== -->	

</body>
</html>


