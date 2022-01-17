<div class="card-block table-border-style overflow-auto">
    <div class="container-fluid">
        <form>
            <div class="row justify-content-md-end px-2">
                <div class="">
                    <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                        <div class="start-date-input">
                            <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
                        </div>
                        <div class="exchage-icon align-items-center d-flex justify-content-center">
                            ~
                        </div>
                        <div class="end-date-input">
                            <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
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
                                    =Status=
                                </option>
                                <option value="activation" class="text-left">
                                    Approval
                                </option>
                                <option value="inactive" class="text-left">
                                    atmosphere
                                </option>
                                <option value="inactive" class="text-left">
                                    cancellation
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="select-main-group">

                        <div class="input-group float-left w-auto mb-2">
                            <div class="input-group-prepend">
                                <select class="custom-select">
                                    <option value="status" selected>
                                        =Search Options=
                                    </option>
                                    <option value="activation" class="text-left">
                                        Id
                                    </option>
                                    <option value="inactive" class="text-left">
                                        nickname
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
                            <th class="border-bottom-0">ID</th>
                            <th class="border-bottom-0">Nickname</th>
                            <th class="border-bottom-0">transfer amount</th>
                            <th class="border-bottom-0">state</th>
                            <th class="border-bottom-0">Approval Confirmation</th>
                            <th class="border-bottom-0">Application date and time</th>
                            <th class="border-bottom-0">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($histories as $item)
                        <tr>
                            <td>{{ ++$count }}</td>
                            <td>{{ $item->user->pk }}</td>
                            <td>{{ $item->user->user_id }}</td>
                            <td>{{ $item->user->nickname }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>
                                @if ($item->status == 0)
                                pending
                                @elseif($item->status == 2)
                                approved
                                @else
                                cancelled
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('admin.pvtransmissionapplicationdetails.approve', $item->id) }}" class="btn  btn-correction">
                                    Approval </a>
                                <a href="{{ route('admin.pvtransmissionapplicationdetails.decline', $item->id) }}" class="btn  btn-ends">
                                    cancellation
                                </a>
                            </td>

                            <td>{{ $item->created_at }}</td>
                            <td class="">
                                <a href="#" wire:click="$emit('viewDetail', {{ $item->id }})" class="btn  btn-correction" data-toggle="modal" data-target="#pv-trasmission-application-modal">
                                    Look
                                </a>
                            </td>

                        </tr>

                        @empty
                        <tr>
                            <td colspan="8">No Record</td>
                        </tr>
                        @endforelse


                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
