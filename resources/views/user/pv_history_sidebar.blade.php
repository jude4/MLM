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
        <li class="{{Route::is('user.pvcheckaccumulationhistory')?'active':''}}">
            <a href="{{route('user.pvcheckaccumulationhistory')}}" >PV Accumulation History</a>
            
        </li>
        <li class="{{Route::is('user.pvcheckusagehistory')?'active':''}}">
            <a href="{{route('user.pvcheckusagehistory')}}">PV Usage History</a>
            
        </li>
        
    </ul>
</nav>