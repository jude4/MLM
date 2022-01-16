<nav id="sidebar" class="box-shad ">
    <div class="sub-sp">
        <div class="user-icons">
            <div class="user-imgs text-center pt-4">
                <img src="{{asset(Auth::user()->profilePicture())}}" width="65px">
            </div>
            <div class="user-nm pt-2">Gyewang01</div>
            <div class="user-sub-nm ">Gyewang01</div>
            <div class="exchnge-link pt-3 text-center"><a href="{{route('user.profile')}}">Go to My Information</a></div>
        </div>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="#WithdrawalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Withdrawal in Korean Won</a>
            <ul class="collapse list-unstyled sub-display" id="WithdrawalSubmenu">
                <li class="active">
                    <a href="{{route('user.krwwithdrawalrequest')}}">Withdrawal Request</a>
                </li>
                <li>
                    <a href="{{route('user.krwapplicationlist')}}">Application List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#MemberSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Member-To-Member Transfer</a>
            <ul class="collapse list-unstyled" id="MemberSubmenu">
                <li>
                    <a href="{{route('user.pvtransfer')}}">Request for transmission</a>
                </li>
                <li>
                    <a href="{{route('user.pvtransferrequestlist')}}">Application list</a>
                </li>
                
            </ul>
        </li>
        <li>
            <a href="#ELIMSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ELIM point conversion</a>
            <ul class="collapse list-unstyled" id="ELIMSubmenu">
                <li>
                    <a href="{{route('user.pvexchangeavailableelimpoint')}}">Available PV sales application</a>
                </li>
                <li>
                    <a href="{{route('user.pvexchangeaccumulaionelimpoint')}}">Apply for resale of accumulated PV</a>
                </li>
                <li>
                    <a href="pv-transfer-request-list.html">Application list</a>
                </li>
                
            </ul>
        </li>
    </ul>
</nav>