 <div class="card-block table-border-style overflow-auto">
     <div class="container-fluid">
         <form>
             <div class="row justify-content-md-end px-2">
                 <div class="">
                     <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                         <div class="start-date-input">
                             <input type="date" wire:model="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
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
                                     =trading status=
                                 </option>
                                 <option value="activation" class="text-left">
                                     Proceeding
                                 </option>
                                 <option value="inactive" class="text-left">
                                     end
                                 </option>
                                 <option value="inactive" class="text-left">
                                     Pause
                                 </option>
                             </select>
                         </div>
                     </div>
                     <div class="select-main-group">
                         <div class="first-select-option mr-1 float-left mb-2">
                             <select class="custom-select">
                                 <option value="status" selected>
                                     =Trading Type=
                                 </option>
                                 <option value="activation" class="text-left">
                                     chase transaction
                                 </option>
                                 <option value="inactive" class="text-left">
                                     segment trading
                                 </option>
                             </select>
                         </div>

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
                                         name
                                     </option>

                                 </select>
                             </div>
                             <input type="text" class="form-control" wire:model="search" placeholder="Please select a search option.">
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
                             <th class="border-bottom-0">Trading type</th>
                             <th class="border-bottom-0">subject</th>
                             <th class="border-bottom-0">trading status</th>
                             <th class="border-bottom-0">Detail</th>
                             <th class="border-bottom-0">state change</th>
                             <th class="border-bottom-0">start date</th>
                         </tr>
                     </thead>
                     <tbody>
                         @forelse($histories as $index => $history)
                         <tr>
                             <td>{{ ++$index }}</td>
                             <td>{{ $history->user->pk ?? '-' }}</td>
                             <td>{{ $history->user->user_id }}</td>
                             <td>{{ $history->user->nickname }}</td>
                             <td>{{ $history->subject }}</td>
                             <td>{{ $history->currency }}</td>
                             <td>
                                 @if ($history->state == 0)
                                 Processing
                                 @elseif ($history->state == 1)
                                 Paused
                                 @else
                                 Completed
                                 @endif
                             </td>
                             <td class="">
                                 @if ($history->subject == 'section trade')
                                 <a href="#" wire:click="$emit('sectionTradeForm', '{{ $history->id }}')" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-detail-modal">
                                     Look
                                 </a>
                                 @else
                                 <a href="#" wire:click="$emit('pursueTradeForm', '{{ $history->id }}')" class="btn  btn-correction" data-toggle="modal" data-target="#chase-trading-modal">
                                     Look
                                 </a>

                                 @endif
                             </td>
                             <td class="">
                                 @if ($history->subject == 'section trade')
                                 <a href="#" wire:click="$emit('pauseSectionTrade', '{{ $history->id }}')" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-pause-modal">
                                     Pause
                                 </a>
                                 @else
                                 <a href="#" wire:click="$emit('pausePursueTrade', {{ $history->id }})" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-pause-modal">
                                     Pause
                                 </a>

                                 @endif
                                 @if ($history->subject == 'section trade')
                                 <a href="#" wire:click="$emit('endSectionTrade', '{{ $history->id }}')" class="btn  btn-ends" data-toggle="modal" data-target="#trading-cancel-modal">
                                     End
                                 </a>

                                 @else
                                 <a href="#" wire:click="$emit('endPursueTrade', '{{ $history->id }}')" class="btn  btn-ends" data-toggle="modal" data-target="#trading-cancel-modal">
                                     End
                                 </a>

                                 @endif

                             </td>
                             <td>{{ $history->created_at }}</td>

                         </tr>

                         @empty
                         <tr>
                             <td colspan="10">No Record</td>
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
