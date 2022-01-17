<nav id="sidebar" class="box-shad ">
    <div class="sub-sp">
        <div class="user-icons">
            <div class="user-imgs text-center pt-4">
                <img src="{{asset(Auth::user()->profilePicture())}}" width="65px">
            </div>
            <div class="user-nm pt-2">{{Auth::user()->user_id}}</div>
            <div class="user-sub-nm ">{{Auth::user()->nickname}}</div>
            <div class="exchnge-link pt-3 text-center"><a href="{{route('user.profile')}}">Go to My Information</a></div>
        </div>
    </div>
    <ul class="list-unstyled components">
        <li class="{{Route::is('user.krwwithdrawalrequest', 'user.krwapplicationlist')?'active':''}}">
            <a href="#WithdrawalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Withdrawal in Korean Won</a>
            <ul class="collapse list-unstyled {{Route::is('user.krwwithdrawalrequest', 'user.krwapplicationlist')?'sub-display':''}}" id="WithdrawalSubmenu">
                <li class="{{Route::is('user.krwwithdrawalrequest')?'active':''}}">
                    <a href="{{route('user.krwwithdrawalrequest')}}">Withdrawal Request</a>
                </li>
                <li class="{{Route::is('user.krwapplicationlist')?'active':''}}">
                    <a href="{{route('user.krwapplicationlist')}}">Application List</a>
                </li>
            </ul>
        </li>
        <li class="{{Route::is('user.pvtransfer', 'user.pvtransferrequestlist')?'active':''}}">
            <a href="#MemberSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Member-To-Member Transfer</a>
            <ul class="collapse list-unstyled {{Route::is('user.pvtransfer', 'user.pvtransferrequestlist')?'sub-display':''}}" id="MemberSubmenu">
                <li class="{{Route::is('user.pvtransfer')?'active':''}}">
                    <a href="{{route('user.pvtransfer')}}">Request for transmission</a>
                </li>
                <li class="{{Route::is('user.pvtransferrequestlist')?'active':''}}">
                    <a href="{{route('user.pvtransferrequestlist')}}">Application list</a>
                </li>
                
            </ul>
        </li>
        <li class="{{Route::is('user.pvexchangeavailableelimpoint', 'user.pvexchangeaccumulaionelimpoint')?'active':''}}">
            <a href="#ELIMSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ELIM point conversion</a>
            <ul class="collapse list-unstyled {{Route::is('user.pvexchangeavailableelimpoint', 'user.pvexchangeaccumulaionelimpoint')?'sub-display':''}}" id="ELIMSubmenu">
                <li class="{{Route::is('user.pvexchangeavailableelimpoint')?'active':''}}">
                    <a href="{{route('user.pvexchangeavailableelimpoint')}}">Available PV sales application</a>
                </li>
                <li class="{{Route::is('user.pvexchangeaccumulaionelimpoint')?'active':''}}">
                    <a href="{{route('user.pvexchangeaccumulaionelimpoint')}}">Apply for resale of accumulated PV</a>
                </li>
                <li>
                    <a href="pv-transfer-request-list.html">Application list</a>
                </li>
                
            </ul>
        </li>
    </ul>
</nav>