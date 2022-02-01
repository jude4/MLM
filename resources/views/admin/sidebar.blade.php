<?php
$per = session()->get('allowed_permissions');
?>

<!-- Sidebar start -->
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <ul class="pcoded-item pcoded-left-item">

                @if (array_key_exists("Admin List",$per))
                @if(request()->routeIs(['admin.administratorlist', 'admin.administratorlist', 'admin.adminmanagement']) == '1')
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
                        <li class="{{ Request::routeIs('admin.administratorlist','admin.adminmanagement') ? 'active' : '' }}">
                            <a href="{{route('admin.administratorlist')}}" class="waves-effect waves-dark d-inline">
                                <span class="pcoded-micon pr-1  "><i class="fas fa-circle fa-xs d-inline"></i></span>
                                <span class="pcoded-mtext">Admin List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (array_key_exists("Member List",$per) || array_key_exists("MLM Membership Management",$per))

                @if(request()->routeIs(['admin.memberlist','admin.mlmusermanagement', 'admin.membermodification']) == '1')
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
                        @if (array_key_exists("Member List",$per))
                        <li class="{{ Request::routeIs('admin.memberlist', 'admin.membermodification') ? 'active' : '' }}">
                            <a href="{{route('admin.memberlist')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Member List</span>
                            </a>
                        </li>
                        @endif

                        @if (array_key_exists("MLM Membership Management",$per))
                        <li class="{{ Request::routeIs('admin.mlmusermanagement') ? 'active' : '' }}">
                            <a href="{{route('admin.mlmusermanagement')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">MLM Membership Management</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif


                @if (array_key_exists("Total PV accumulation history",$per) || array_key_exists("Total PV usage history",$per) || array_key_exists("PV withdrawal request history",$per) || array_key_exists("PV conversion application details",$per) || array_key_exists("PV transmission application details",$per))

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
                        @if (array_key_exists("Total PV accumulation history",$per))
                        <li class="{{ Request::routeIs('admin.pvaccumulationhistory') ? 'active' : '' }}">
                            <a href="{{route('admin.pvaccumulationhistory')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Total PV accumulation history</span>
                            </a>
                        </li>
                        @endif

                        @if (array_key_exists("Total PV usage history",$per))
                        <li class="{{ Request::routeIs('admin.pvusagehistory') ? 'active' : '' }}">
                            <a href="{{route('admin.pvusagehistory')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Total PV usage history</span>
                            </a>
                        </li>
                        @endif

                        @if (array_key_exists("PV withdrawal request history",$per))
                        <li class="{{ Request::routeIs('admin.pvwithdrawalrequesthistory') ? 'active' : '' }}">
                            <a href="{{route('admin.pvwithdrawalrequesthistory')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">PV withdrawal request history</span>
                            </a>
                        </li>
                        @endif

                        @if (array_key_exists("PV conversion application details",$per))
                        <li class="{{ Request::routeIs('admin.pvconversionapplicationdetails') ? 'active' : '' }}">
                            <a href="{{route('admin.pvconversionapplicationdetails')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">PV conversion application details</span>
                            </a>
                        </li>
                        @endif

                        @if (array_key_exists("PV transmission application details",$per))
                        <li class="{{ Request::routeIs('admin.pvtransmissionapplicationdetails') ? 'active' : '' }}">
                            <a href="{{route('admin.pvtransmissionapplicationdetails')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">PV transmission application details</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif




                @if (array_key_exists("Elim Point Application Details",$per) || array_key_exists("Elim Point Exchange History",$per) || array_key_exists("Elim point transfer history",$per) || array_key_exists("T point details by member",$per))

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
                        @if(array_key_exists("Elim Point Application Details",$per))
                        <li class="{{ Request::routeIs('admin.elimpointapplicatondetails') ? 'active' : '' }}">
                            <a href="{{route('admin.elimpointapplicatondetails')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Elim Point Application Details</span>
                            </a>
                        </li>
                        @endif

                        @if(array_key_exists("Elim Point Exchange History",$per))
                        <li class="{{ Request::routeIs('admin.elimpointapplicatiionhistory') ? 'active' : '' }}">
                            <a href="{{route('admin.elimpointapplicatiionhistory')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Elim Point Exchange History</span>
                            </a>
                        </li>
                        @endif

                        @if(array_key_exists("Elim point transfer history",$per))
                        <li class="{{ Request::routeIs('admin.elimpointtransferhistory') ? 'active' : '' }}">
                            <a href="{{route('admin.elimpointtransferhistory')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Elim point transfer history</span>
                            </a>
                        </li>
                        @endif

                        @if(array_key_exists("T point details by member",$per))
                        <li class="{{ Request::routeIs('admin.tpointdetailsbymember') ? 'active' : '' }}">
                            <a href="{{route('admin.tpointdetailsbymember')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">T point details by member</span>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>
                @endif




                @if (array_key_exists("Trading order history",$per) || array_key_exists("Trading Settings",$per))
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

                            @if(array_key_exists("Trading order history",$per))
                            <li class="{{ Request::routeIs('admin.tradingorderhistory') ? 'active' : '' }}">
                                <a href="{{route('admin.tradingorderhistory')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Trading order history</span>
                                </a>
                            </li>
                            @endif

                            @if(array_key_exists("Trading Settings",$per))
                            <li class="{{ Request::routeIs('admin.tradingsetting') ? 'active' : '' }}">
                                <a href="{{route('admin.tradingsetting')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Trading Settings</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </li>
                @endif


                @if (array_key_exists("Notice",$per) || array_key_exists("Frequently Asked Questions",$per) || array_key_exists("One-on-one inquiry",$per))
                    @if(request()->routeIs(['admin.noticelist', 'admin.faqlist', 'admin.oneononeinquiry','admin.noticemodification','admin.faqmodification','admin.oneononeinquiryanswer']) == '1')
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

                            @if(array_key_exists("Notice",$per))
                            <li class="{{ Request::routeIs('admin.noticelist','admin.noticemodification') ? 'active' : '' }}">
                                <a href="{{route('admin.noticelist')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Notice</span>
                                </a>
                            </li>
                            @endif

                            @if(array_key_exists("Frequently Asked Questions",$per))
                            <li class="{{ Request::routeIs('admin.faqlist','admin.faqmodification') ? 'active' : '' }}">
                                <a href="{{route('admin.faqlist')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Frequently Asked Questions</span>
                                </a>
                            </li>
                            @endif

                            @if(array_key_exists("One-on-one inquiry",$per))
                            <li class="{{ Request::routeIs('admin.oneononeinquiry','admin.oneononeinquiryanswer') ? 'active' : '' }}">
                                <a href="{{route('admin.oneononeinquiry')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">One-on-one inquiry</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </li>
                @endif


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