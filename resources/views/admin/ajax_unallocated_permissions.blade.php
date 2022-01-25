@foreach ($unallocated_permissions as $module => $permissions)


<div class="ard-man-txt">{{ $module }}</div>
@foreach($permissions as $permission => $permission_data)
<div class="row p-2">
    <div class="col-sm-1 col-1">
        <div class="form-check frn-ch">
            <input class="form-check-input ch-inp" type="checkbox" name="permissionmenu[]" value="{{ $permission_data['id']}}" id="flexCheckDefault">

        </div>
    </div>
    <div class=" col-lg-10 col-md-10 col-sm-10 col-10  ">

        <input type="text" class="form-control  inp-sp-tx"  placeholder="admin list" value="{{ $permission }}">
    </div>
</div>
@endforeach
@endforeach