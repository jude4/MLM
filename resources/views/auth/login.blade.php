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
                    <div class="col-md-6">                       
                        <div class="wrap-login">
                            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <span class="login100-form-subtitle m-b-8 mt-3">V-Elim </span>
                                <span class="log-sub-title">Log in</span>
                                <div class="wrap-input100 validate-input m-b-16" > 
                                    <label  class=" col-form-label lb-txt text-black mb-0 font-weight-bold">ID</label>
                                    <input class="form-control input100 @error('email') is-invalid @enderror" type="email" value="{{ old('id') }}"  placeholder="Please enter your EMAIL." name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" >
                                	<label for="inputMyid" class=" col-form-label lb-txt text-black font-weight-bold mb-0">Password</label>
                                 	<input class="form-control input100 @error('password') is-invalid @enderror" type="password"  placeholder="Please enter a password." name="password">
                                    @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror 
                                </div>
                                <div class="d-sm-flex justify-content-between w-full p-b-30">
                                    <div class="contact100-form-checkbox">
                                    	<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    	<label class="label-checkbox100 "> Log in automatically </label>
                                    </div>
                                    <div class="mt-sm-2 mt-0 d-flex"><a href="{{route('user.findid')}}" class="forgot-txt1"> Find ID /  </a> <a href="{{route('user.findpassword')}}" class="forgot-txt1">&nbsp; Find Password </a> </div>
                                </div>
                                <div class="login-sec-btn p-t-25">
                                 	<button class="login-btn-frt"> Login </button>
                                </div>
                                <div class="log-acc-detail mt-2">Don't have an account yet? <a href="{{route('register')}}"class="log-ac-join">Sign Up</a></div>
                               
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


