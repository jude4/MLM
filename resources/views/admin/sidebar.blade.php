<!-- Sidebar start -->
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
    <div class="">
        <ul class="pcoded-item pcoded-left-item">
            <li class="active pcoded-hasmenu pcoded-trigger">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p09.png')}}" width="26px"><b>BC</b></span>
                    <span class="pcoded-mtext">Admin Management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="active">
                        
                        <a href="{{route('admin.administratorlist')}}" class="waves-effect waves-dark d-inline">
                            <span class="pcoded-micon pr-1  "><i class="fas fa-circle fa-xs d-inline"></i></span>
                            <span class="pcoded-mtext">Admin List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                     <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p10.png')}}" width="26px"><b>BC</b></span>
                    <span class="pcoded-mtext">Member Management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('admin.memberlist')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Member List</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.mlmusermanagement')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">MLM Membership Management</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p02.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">PV management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.pvaccumulationhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Total PV accumulation history</span>
                        </a>
                    </li>
                   <li class="">
                        <a href="{{route('admin.pvusagehistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Total PV usage history</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="{{route('admin.pvwithdrawalrequesthistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">PV withdrawal request history</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.pvconversionapplicationdetails')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">PV conversion application details</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.pvtransmissionapplicationdetails')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">PV transmission application details</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><img src="{{asset('assets/images/p01.png')}}" width="80%"><b>BC</b></span>
                    <span class="pcoded-mtext">point management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.elimpointapplicatondetails')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Elim Point Application Details</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.elimpointapplicatiionhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Elim Point Exchange History</span>
                        </a>
                    </li>
                     <li class="">
                        <a href="{{route('admin.elimpointtransferhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Elim point transfer history</span>
                        </a>
                    </li>
                     <li class="">
                        <a href="{{route('admin.tpointdetailsbymember')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">T point details by member</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p05.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">ELIM bot management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.tradingorderhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Trading order history</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.tradingsetting')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Trading Settings</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="#" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p03.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">Customer service center</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.noticelist')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Notice</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.faqlist')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Frequently Asked Questions</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.oneononeinquiry')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">One-on-one inquiry</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="">
                <a href="{{route('admin.profile')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p07.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">My Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                
            </li>
             <li class="">
                <a href="{{route('admin.login')}}" class="waves-effect waves-dark">
                   <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p06.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">Log out</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
        </ul>
    </div>
</nav>
<!-- Sidebar End -->