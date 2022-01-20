<!-- Sidebar start -->
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
    <div class="">
        <ul class="pcoded-item pcoded-left-item">
            
              @if(request()->routeIs(['admin.administratorlist']) == '1')
               <li class="pcoded-hasmenu active pcoded-trigger">
               @else
               <li class="pcoded-hasmenu ">
               @endif 
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p09.png')}}" width="26px"><b>BC</b></span>
                    <span class="pcoded-mtext">Admin Management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::routeIs('admin.administratorlist') ? 'active' : '' }}">
                        <a href="{{route('admin.administratorlist')}}" class="waves-effect waves-dark d-inline">
                            <span class="pcoded-micon pr-1  "><i class="fas fa-circle fa-xs d-inline"></i></span>
                            <span class="pcoded-mtext">Admin List</span>
                        </a>
                    </li>
                </ul>
            </li>
               @if(request()->routeIs(['admin.memberlist','admin.mlmusermanagement']) == '1')
               <li class="pcoded-hasmenu active pcoded-trigger">
               @else
               <li class="pcoded-hasmenu ">
               @endif 

                <a href="javascript:void(0)" class="waves-effect waves-dark">
                     <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p10.png')}}" width="26px"><b>BC</b></span>
                    <span class="pcoded-mtext">Member Management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::routeIs('admin.memberlist') ? 'active' : '' }}">
                        <a href="{{route('admin.memberlist')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Member List</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.mlmusermanagement') ? 'active' : '' }}">
                        <a href="{{route('admin.mlmusermanagement')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">MLM Membership Management</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            @if(request()->routeIs(['admin.pvaccumulationhistory','admin.pvusagehistory', 'admin.pvwithdrawalrequesthistory', 'admin.pvconversionapplicationdetails', 'admin.pvtransmissionapplicationdetails']) == '1')
            <li class="pcoded-hasmenu active pcoded-trigger">
            @else
            <li class="pcoded-hasmenu ">
            @endif
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p02.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">PV management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::routeIs('admin.pvaccumulationhistory') ? 'active' : '' }}">
                        <a href="{{route('admin.pvaccumulationhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Total PV accumulation history</span>
                        </a>
                    </li>
                   <li class="{{ Request::routeIs('admin.pvusagehistory') ? 'active' : '' }}">
                        <a href="{{route('admin.pvusagehistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Total PV usage history</span>
                        </a>
                    </li>
                    
                    <li class="{{ Request::routeIs('admin.pvwithdrawalrequesthistory') ? 'active' : '' }}">
                        <a href="{{route('admin.pvwithdrawalrequesthistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">PV withdrawal request history</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.pvconversionapplicationdetails') ? 'active' : '' }}">
                        <a href="{{route('admin.pvconversionapplicationdetails')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">PV conversion application details</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.pvtransmissionapplicationdetails') ? 'active' : '' }}">
                        <a href="{{route('admin.pvtransmissionapplicationdetails')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">PV transmission application details</span>
                        </a>
                    </li>
                </ul>
            </li>
            @if(request()->routeIs(['admin.elimpointapplicatondetails','admin.elimpointapplicatiionhistory', 'admin.elimpointtransferhistory', 'admin.tpointdetailsbymember']) == '1')
            <li class="pcoded-hasmenu active pcoded-trigger">
            @else
            <li class="pcoded-hasmenu ">
            @endif
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><img src="{{asset('assets/images/p01.png')}}" width="80%"><b>BC</b></span>
                    <span class="pcoded-mtext">point management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::routeIs('admin.elimpointapplicatondetails') ? 'active' : '' }}">
                        <a href="{{route('admin.elimpointapplicatondetails')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Elim Point Application Details</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.elimpointapplicatiionhistory') ? 'active' : '' }}">
                        <a href="{{route('admin.elimpointapplicatiionhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Elim Point Exchange History</span>
                        </a>
                    </li>
                     <li class="{{ Request::routeIs('admin.elimpointtransferhistory') ? 'active' : '' }}">
                        <a href="{{route('admin.elimpointtransferhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Elim point transfer history</span>
                        </a>
                    </li>
                     <li class="{{ Request::routeIs('admin.tpointdetailsbymember') ? 'active' : '' }}">
                        <a href="{{route('admin.tpointdetailsbymember')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">T point details by member</span>
                        </a>
                    </li>
                </ul>
            </li>

            @if(request()->routeIs(['admin.tradingorderhistory','admin.tradingsetting']) == '1')
            <li class="pcoded-hasmenu active pcoded-trigger">
            @else
            <li class="pcoded-hasmenu ">
            @endif
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p05.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">ELIM bot management</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::routeIs('admin.tradingorderhistory') ? 'active' : '' }}">
                        <a href="{{route('admin.tradingorderhistory')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Trading order history</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.tradingsetting') ? 'active' : '' }}">
                        <a href="{{route('admin.tradingsetting')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Trading Settings</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            
               @if(request()->routeIs(['admin.noticelist', 'admin.faqlist', 'admin.oneononeinquiry']) == '1')
               <li class="pcoded-hasmenu active pcoded-trigger">
               @else
               <li class="pcoded-hasmenu ">
               @endif 
                <a href="#" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p03.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">Customer service center</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::routeIs('admin.noticelist') ? 'active' : '' }}">
                        <a href="{{route('admin.noticelist')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Notice</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.faqlist') ? 'active' : '' }}">
                        <a href="{{route('admin.faqlist')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Frequently Asked Questions</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.oneononeinquiry') ? 'active' : '' }}">
                        <a href="{{route('admin.oneononeinquiry')}}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">One-on-one inquiry</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="{{ Request::routeIs('admin.profile') ? 'active' : '' }}">
                <a href="{{route('admin.profile')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p07.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">My Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                
            </li>
             <li class="">
                <a href="{{route('admin.logout')}}" class="waves-effect waves-dark">
                   <span class="pcoded-micon pl-0"><img src="{{asset('assets/images/p06.png')}}" width="30px"><b>BC</b></span>
                    <span class="pcoded-mtext">Log out</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
        </ul>
    </div>
</nav>
<!-- Sidebar End -->