@foreach ($allocated_permissions as $module => $permissions)
<div class="ard-man-txt">{{ $module }}</div>
@foreach($permissions as $permission => $permission_data)
<div class="row p-2">
    <div class="col-sm-1 col-1 pr-md-0 sp-nd">
        <div class="form-check frn-ch">
            <input class="form-check-input ch-inp" type="checkbox" value="{{ $permission_data['id'] }}" name="allowpermission[]">

        </div>
    </div>
    <div class="col-lg-5 col-md-10 col-sm-10 col-10 pl-md-0 pr-0">

        <input type="text" class="form-control  inp-sp-txs" placeholder="{{ $permission}}">
    </div>
    <div class="col-lg-6 col-md-10 col-sm-10 col-11 pl-md-0  ass-cat">
        <div class="inp-sp-txd">
            @php
            $pid = $permission_data['id'];
            @endphp
            <div class="row p-2">
                <div class="col-xl-3 col-lg-3 col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="read_{{ $pid }}" name="pr_{{$pid}}" value="0" @if (!$permission_data['is_write']) checked @endif>
                        <label class="form-check-label" for="read_{{ $pid }}">
                            read
                        </label>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="write_{{ $pid }}" name="pr_{{$pid}}" value="1" @if ($permission_data['is_write']) checked @endif>
                        <label class="form-check-label" for="write_{{ $pid }}">
                            write
                        </label>
                    </div>
                </div>
                <div class="col-xl-5 col-4 text-right">

                    <a href="javascript:void(0)" class="btn ad-btn-save btn-sv" onclick="changepermission('{{ $pid }}')">
                        Save
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach