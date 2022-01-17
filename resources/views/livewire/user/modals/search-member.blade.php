{{-- <div class="modal fade pr-0" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
<div id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" @if ($editMode==true) style="display: block" class="modal fade pr-0 show in" aria-modal="true" @else class="modal fade pr-0 in" aria-hidden="true" @endif>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content " id="search-modal">
            <div class="modal-header border-bottom-0 mord-head">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="serch-modal" class="modal-body">
                <div class="form-with-title text-center">
                    <h4>Search for members</h4>
                </div>
                <div class="d-flex flex-column text-center mt-4">
                    <div class="row justify-content-center mb-2">
                        <div class="col-11 text-left">
                            <div class="first-select-option mr-1  mb-2">
                                <select name="" id="id" wire:model.defer="by">
                                    <option class="opt" value="user_id">ID</option>
                                    <option value="nickname">nickname</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-3 col-sm-11 col-11 text-left mr-md-2 mr-0 pl-md-0 pl-3">
                            <div class="second-select-option mr-1  mb-2">
                                <select name="" id="id">
                                    <option class="" value="ID">=Search Options=</option>
                                    <option class="" value="ID">ID</option>
                                    <option value="nickname">nickname</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8 col-8 ml-md-2 ml-sm-0 pr-1 pl-0">
                            <input type="text" wire:model.defer='search' class="form-control search-pro-pv-input" placeholder="USER">

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
                                                    @forelse($users as $user)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" wire:model='selected.{{$user->id}}' id="defaultCheck1" checked>

                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    {{ $user->user_id }}
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>{{ $user->nickname }}</td>
                                                    </tr>

                                                    @empty
                                                    <tr>
                                                        <td colspan="2">No Record</td>
                                                    </tr>
                                                    @endforelse

                                            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4 mt-3">
                        <div class="col-md-3 col-sm-3 col-3">
                            <a href="#" data-dismiss="modal" wire:click="$emit('setUserId', {{ $userId }})" class="btn-model-select">Select</a>


                        </div>
                        <div class="col-md-4 col-sm-5 col-6">
                            <a href="#" class="btn-model-close btn-close" aria-label="Close" data-dismiss="modal">to close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
