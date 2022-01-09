<!-- Start top navbar  section-->
<div id="top-nav-sec">
    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container-fluid justify-content-between">
            <div class="row">
                <div class="col-12 px-0 px-md-3">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand d-md-none d-block" href="{{route('user.dashboard')}}">
                            <img src="{{asset('image/logo02.png')}}" alt="">
                        </a> 
                          
                     
                        <div class="collapse navbar-collapse top-nav-spac smal-scr-scrol" id="navbarSupportedContent">
                            <div class="mt-5 d-md-none d-block">
                                <div class="row justify-content-center">
                                    <div class="col-11 p-2">
                                        <div class="sml-scree-box">
                                            <div class="text-center sp-smd-text">{{Auth::user()->nickname}}</div>
                                            <div class="text-center sp-smd-texts">{{Auth::user()->nickname}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between p-4">
                                    <a href="{{route('user.profile')}}" class="my-infos-text">My Info</a>
                                    <a href="{{route('user.krwwithdrawalrequest')}}" class="my-mang-text">PV management</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="my-mang-out">Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                      </form>
                                </div>

                                <div class="px-4 pt-2">
                                    <div class="box-bot-lin">
                                    </div>
                                </div>
                            </div>
                            <a class="navbar-brand d-md-block d-none" href="{{route('user.dashboard')}}">
                            <img src="{{asset('image/logo02.png')}}" alt="">
                        </a> 

                           <!--  --------------large screen display top menubar----------- -->

                            <div class="d-md-block d-none  text-center larg-scr">
                                <ul class="navbar-nav m-auto py-4 py-md-0 px-3 d-inline-flex">
                                    <li class="nav-item pl-4 pl-md-0  bor-mob-sec active ">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Trading</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('user.trading')}}">Trading</a>
                                            <a class="dropdown-item" href="{{route('user.tradinghistory')}}">Trading History</a>  
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0  bor-mob-sec">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ranking</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('user.ranking')}}">Ranking Inquiry</a>
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0  bor-mob-sec">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Point</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('user.mypoint')}}">My Point</a>
                                            <a class="dropdown-item" href="{{route('user.elimpointcharge')}}">ELIM points recharge</a>     
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0   bor-mob-sec">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customer Service Center</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('user.servicecenter')}}">Notice</a>
                                            <a class="dropdown-item" href="{{route('user.faq')}}">Frequently Asked Questions</a>
                                            <a class="dropdown-item" href="{{route('user.firstinquiry')}}">1:1 inquiry</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="rig-menu-dis  d-md-inline-block d-none">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                <img class="dropbtn" src="{{asset('image/users-drp01.png')}}" width="40px">
                                                 <div class="d-inline-block us-name-text ml-2">{{Auth::user()->nickname}}</div>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('user.profile')}}">My Info</a>
                                                <a class="dropdown-item" href="{{route('user.krwwithdrawalrequest')}}">PV management</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Log out</a>
                                            </div>
                            </div> 
                             <!--  --------------small screen display top menubar----------- -->
                            <div class="d-md-none d-block">
                                <ul class="navbar-nav m-auto py-4 py-md-0 px-3 ">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 bor-mob-sec  active">
                                        <img src="{{asset('image/menu-icon/m01.png')}}" width="35px" >
                                        <a href="{{route('user.dashboard')}}" class="nav-link  p-0">Home</a>
                                        <div class="mt-3"></div>
                                       
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 bor-mob-sec mt-3">
                                        <img src="{{asset('image/menu-icon/m02.png')}}" width="35px">
                                        <a  class="nav-link dropdown-toggle nn" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Trading</a>
                                        <div class="dropdown-menu drb-spcs">
                                            <a class="dropdown-item drb-spc p-2" href="{{route('user.trading')}}">Trading</a>
                                            <a class="dropdown-item drb-spd p-2" href="{{route('user.tradinghistory')}}">Trading History</a>  
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 bor-mob-sec mt-3">
                                        <img src="{{asset('image/menu-icon/m03.png')}}" width="35px">
                                        <a  class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ranking</a>
                                        <div class="dropdown-menu drb-spcs">
                                            <a class="ranking.html drb-spc p-2" href="{{route('user.ranking')}}">Ranking Inquiry</a>
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 bor-mob-sec mt-3">
                                        <img src="{{asset('image/menu-icon/m04.png')}}" width="35px">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Point</a>
                                        <div class="dropdown-menu drb-spcs">
                                            <a class="dropdown-item drb-spc p-2" href="{{route('user.mypoint')}}">My Point</a>
                                            <a class="dropdown-item drb-spd p-2" href="{{route('user.elimpointcharge')}}">ELIM points recharge</a>     
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 bor-mob-sec mt-3">
                                        <img src="{{asset('image/menu-icon/m05.png')}}" width="35px">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customer Service Center</a>
                                        <div class="dropdown-menu drb-spcs">
                                            <a class="dropdown-item drb-spc p-2" href="{{route('user.servicecenter')}}">Notice</a>
                                            <a class="dropdown-item drb-spc p-2" href="{{route('user.faq')}}">Frequently Asked Questions</a>
                                            <a class="dropdown-item drb-spd p-2" href="{{route('user.firstinquiry')}}">1:1 inquiry</a>
                                            
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="per-mob-text px-3 ">
                                    <a href="#" classs="">Terms of Service</a>
                                </div>
                                <div class="per-mob-text px-3 pt-1">
                                    <a href="#" classs="">Privacy policy</a>
                                </div>
                            </div>
                        </div>   
                    </nav>   
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end top navbar  section-->