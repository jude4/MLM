<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style2.css')}}">


</head>

<body >
    <div class="limiter" id="login">
        <div class="container-login100">
            <div class="container">
                <div class="row lg-sp">
                 
                    <div class="col-md-5">
                       
                        <div class="wrap-login100">
                            <form class="login100-form validate-form"> 
                                <span class="login100-form-title "><img src="{{asset('assets/images/logo01.png')}}" width="28%"> </span> 
                                <span class="login100-form-subtitle m-b-16 mt-3">Administrator </span>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> 
                                    <label for="inputMyid" class=" col-form-label lb-txt text-black mb-0 font-weight-bold">ID</label>
                                    <input class="input100" type="text" name="Username" placeholder="Please enter the administrator ID."> 
                                    <span class="focus-input100"></span> 
                                    <span class="symbol-input100"> 
                                        <span class="glyphicon glyphicon-user"></span> 
                                    </span> 
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                <label for="inputMyid" class=" col-form-label lb-txt text-black font-weight-bold">Password</label>
                                 <input class="input100" type="password" name="pass" placeholder="Please enter a password."> 
                                 <span class="focus-input100"></span> 
                                 <span class="symbol-input100"> 
                                    <span class="glyphicon glyphicon-lock"></span> 
                                </span> 
                                </div>
                                <!-- <div class="flex-sb-m w-full p-b-30">
                                    <div class="contact100-form-checkbox"> <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> <label class="label-checkbox100" for="ckb1"> Remember me </label> </div>
                                    <div> <a href="#" class="txt1"> Forgot Password? </a> </div>
                                </div> -->
                                <div class="container-login100-form-btn p-t-25"> <a class="login100-form-btn" href="administator_list.html"> Login </a> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   




    <!-- Required Jquery -->

    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{asset('assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- menu js -->
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/js/vertical/vertical-layout.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>
