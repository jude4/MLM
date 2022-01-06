<div class="row mt-4 row justify-content-center mb-5">
    <div class="col-lg-8 col-md-10 col-sm-11 col-12 ">
        <div class="row">
            <div class="col-4 text-left">
                <div class="pro-user-img">
                    <img src="{{asset(Auth::user()->profilePicture())}}" width="85px">
                </div>
            </div>
            <div class="col-8 text-right">
                <div class="btn-section mb-4">
                    <label style="cursor: pointer" for="profile_picture" href="#" class="img-exchange-btn" >Image Change</label>
                    <input type="file" name="" hidden id="profile_picture" wire:model='profilePicture'>
                </div>
                <div class="mt-4">
                    <a style="cursor: pointer" class="img-initial-btn" wire:click='initialize'>Image initialization</a>
                </div>
            </div>
        </div>
    </div>
</div>