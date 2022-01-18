<div  id="add-mlm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    @if ($editMode == true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true"@endif
    >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content " id="search-modal">
            <div class="modal-header border-bottom-0 mord-head">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="serch-modal" class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Add MLM Member</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
                    {{-- <div class="row justify-content-center mb-2">
                        <div class="col-11 text-left">
                            <div class="first-select-option mr-1  mb-2">
                                <select name="" id="id">
                                    <option class="opt" value="ID">ID</option>
                                    <option value="nickname">Nickname</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row justify-content-center mb-4 ">
                        <div class="col-md-3 col-sm-11 col-11 text-left mr-md-2 mr-0 pl-md-0 pl-3">
                            <div class="first-select-option mr-1  mb-2">
                                <select name="" id="id"  wire:model.defer='by'>
                                    <option class="" value="user_id" selected>ID</option>
                                    <option value="nickname">Nickname</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8 col-8 ml-md-2 ml-sm-0 pr-1 pl-0">
                            <input type="text" class="form-control search-pro-pv-input" placeholder="USER" wire:model.defer='search'>
                        </div>
                        <div class="col-2 px-0 text-right mt-2">
                            <button class="search-modal-btn" wire:click='search()'>Search</button>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class=col-12>
                            <div class="card-block table-border-style ">
                                <div class="container-fluid px-2">
                                    <div class="row">
                                        <div class="col-12 table-start">
                                            <table class="table modal-table-transfer dt-responsive ">
                                                <thead class="table-header-bg">
                                                    <tr>
                                                        <th class="borders-0">ID</th>
                                                        <th class="border-bottom-0">nickname</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input mr-4" type="checkbox"
                                                                    value="" id="defaultCheck{{$user->id}}" wire:model='selected.{{$user->id}}'>
                                                                <label class="form-check-label ml-4 add-mod"
                                                                    for="defaultCheck{{$user->id}}">
                                                                    {{$user->user_id}}
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>{{$user->nickname}}</td>
                                                    </tr>
                                                    @endforeach
                                                    


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-4 mt-3">
                        <div class="col-11">
                            <div class="mod-btn d-flex justify-content-between">
                                <a href="#" class="btn-model-register" data-toggle="modal" data-target="#add-mlm-member-modal" wire:click="$emit('addUser', '{{$addId}}')">New registration</a>
                                <a href="#" class="btn-model-select" data-toggle="modal" data-target="#add-user-mod" wire:click='addUsers'>Addition</a>
                                <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">To
                                    Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // setInterval(() => {
        //     $('table').DataTable();
        // }, 500);  
    </script>
</div>