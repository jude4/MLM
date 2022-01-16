<div class="card-block table-border-style overflow-auto">
    <div class="container-fluid">
        <form>
            <div class="row justify-content-md-end px-2">
                <div class="">
                    <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                        <div class="start-date-input">
                            <input type="date" wire:model="startDate" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
                        </div>
                        <div class="exchage-icon align-items-center d-flex justify-content-center">
                            ~
                        </div>
                        <div class="end-date-input">
                            <input type="date" wire:model="endDate" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
                        </div>
                    </div>
                </div>

            </div>


            <div class="row justify-content-md-end">
                <div class="col-12 d-flex justify-content-md-end">
                    <div class="select-main-group ml-1 ">
                        <div class="first-select-option mr-1 float-left mb-2">
                            <select class="custom-select">
                                <option value="status" selected>
                                    =Member Type=
                                </option>
                                <option value="activation" class="text-left">
                                    General Membership
                                </option>
                                <option value="inactive" class="text-left">
                                    MLM member
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="select-main-group">


                        <div class="input-group float-left w-auto mb-2">
                            <div class="input-group-prepend">
                                <select class="custom-select" wire:model.defer="searchBy">
                                    <option value="status" selected>
                                        =Search Options=
                                    </option>
                                    <option value="id" class="text-left">
                                        Id
                                    </option>
                                    <option value="name" class="text-left">
                                        name
                                    </option>

                                </select>

                            </div>
                            <input type="text" wire:model="search" class="form-control" placeholder="Please select a search option.">
                        </div>

                        <div class="btn-group mb-2 ml-2">
                            <button type="button" class="btn btn-search">Search</button>
                            <button type="button" class="btn btn-reset">Initialization</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-12 table-start">
                <p class="count-list">Total : 14 Count (1/1)Page</p>
                <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove">
                    <thead class="table-header-bg">
                        <tr>
                            <th class="border-bottom-0">No.</th>
                            <th class="border-bottom-0">PK</th>
                            <th class="border-bottom-0">Member type</th>
                            <th class="border-bottom-0">ID</th>
                            <th class="border-bottom-0">Nickname</th>
                            <th class="border-bottom-0">transfer quantity</th>
                            <th class="border-bottom-0">Detail</th>
                            <th class="border-bottom-0">Exchange date and time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($histories as $history)
                        <tr>
                            <td>{{ ++$count }}</td>

                            <td>{{ $history->pk }}</td>
                            <td>
                           {{ $history->type }}
                            </td>
                            <td>{{ $history->user->user_id }}</td>
                            <td>{{ $history->user->nickname }}</td>
                            <td>{{ $history->exchange_quantity }}</td>
                            <td class="">
                                <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#Elim-point-transfer-detail-modal">


                                    Look
                                </a>
                            </td>
                            <td>{{ $history->created_at }}</td>
                        </tr>

                        @empty
                        <tr>No Record</tr>
                        @endforelse

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
