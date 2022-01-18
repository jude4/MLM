
<div>
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


     <div class="row justify-content-md-end pb-3">
         <div class="col-12 d-flex justify-content-md-end">

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
                                 name
                             </option>

                         </select>
                     </div>
                     <input wire:model="search" type="text" class="form-control" placeholder="Please select a search option.">
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
                     <th class="border-bottom-0">E-mail</th>
                     <th class="border-bottom-0">ELIM POINT balance</th>
                     <th class="border-bottom-0">T-POINT balance</th>
                     <th class="border-bottom-0">Available PV</th>
                     <th class="border-bottom-0">Earned PV</th>
                     <th class="border-bottom-0">State</th>
                     <th class="border-bottom-0">Registration date</th>
                     <th class="border-bottom-0">Tree Structure</th>
                 </tr>
             </thead>
             <tbody>
                 @forelse ($users as $index => $user)
                 <tr>
                     <td>{{$index+1}}</td>
                     <td>30</td>
                     <td>{{$user->type == 0? 'Normal': 'MLM'}}</td>
                     <td>{{$user->user_id}}</td>
                     <td>{{$user->nickname}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->elim_points}}</td>
                     <td>{{$user->t_points}}</td>
                     <td>{{$user->available_pv == 0? '-': $user->available_pv}}</td>
                     <td>{{$user->earned_pv == 0? '-': $user->earned_pv}}</td>
                     <td>{{$user->status?'active':'inactive'}}</td>
                     <td>{{$user->created_at}}</td>
                     <td class="">
                         <a href="{{route('admin.member-tree-sturcture', ['id' => $user->id])}}" class="btn  btn-correction">
                             View Tree
                         </a>
                     </td>
                 </tr>
                 @empty
                 <tr>
                 <td colspan="13">No Record</td>
                 </tr>
                 @endforelse
             </tbody>
             <tfoot>

             </tfoot>
         </table>
     </div>
 </div>
</div>