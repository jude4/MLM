 <div class="pvm-request overflow-auto">
     <div class="pvm-application">
         <div class="card-block table-border-style table-responsive">
             <div class="container-fluid px-lg-5 px-md-0 px-2">
                 <div class="row mb-20">
                     <div class="col-12 table-start">
                         <div class="table-top-head mb-5">Transfer request list</div>
                         <table class="table table-hover dt-responsive  ">
                             <thead class="table-header-bg">
                                 <tr>
                                     <th class="borders-0">No</th>
                                     <th class="border-bottom-0">Transfer Request Quantity</th>
                                     <th class="borders-0">State</th>
                                     <th class="borders-0">Application Date</th>
                                     <th class="borders-0">Detail</th>
                                 </tr>
                             </thead>
                             <tbody>
                             @forelse($histories as $item)
                                 
                                 <tr>
                                     <td>{{ ++$count }}</td>
                                     <td>{{ $item->amount }}</td>
                                     <td>
                                        @if ($item->status == 3)
                                            completed
                                        @elseif($item->status == 0)
                                            pending
                                        @else
                                            cancelled
                                        @endif
                                     </td>
                                     <td>{{ $item->created_at }}</td>
                                     <td><a href="#" wire:click="$emit('viewDetail', {{ $item->id }})" class="look-btn" data-toggle="modal" data-target="#look-transfer"><u>Look</u></a></td>
                                 </tr>
                             @empty
                                 <tr>
                                 <td colspan="5">No Record</td>
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
     </div>
 </div>
