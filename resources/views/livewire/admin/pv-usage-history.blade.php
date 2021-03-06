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
            

            <div class="row justify-content-end">
                <div class="col-12 d-flex justify-content-md-end">
                    <div class="select-main-group">
                        <div class="first-select-option mr-1 float-left mb-2">
                            <select class="custom-select">
                                <option value="status" selected="">
                                    =PV Type=
                                </option>
                                <option value="activation" class="text-left">
                                    available
                                </option>
                                <option value="inactive" class="text-left">
                                    accumulate
                                </option>
                                
                            </select>
                        </div>
                        <div class="first-select-option mr-1 float-left mb-2">
                            <select class="custom-select">
                                <option value="status" selected>
                                   =Type of use=
                                </option>
                                <option value="activation" class="text-left">
                                  withdraw
                                </option>
                                <option value="inactive" class="text-left">
                                 send
                                </option>
                                <option value="inactive" class="text-left">
                                    transform
                                </option>
                                <option value="inactive" class="text-left">
                                   repurchase
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
                                    ID 
                                </option>
                                <option value="inactive" class="text-left">
                                  nickname
                                </option>
                            </select>
                          </div>
                          <input type="text" class="form-control" placeholder="Please select a search option.">
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
              <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove img-size">  
                <thead class="table-header-bg">
                    <tr>
                        <th class="border-bottom-0">No.</th>
                        <th class="border-bottom-0">PK</th>
                        <th class="border-bottom-0">PV type</th>
                        <th class="border-bottom-0">ID</th>
                        <th class="border-bottom-0">nickname</th>
                        <th class="border-bottom-0">type of use</th>
                        <th class="border-bottom-0">Price</th>
                        <th class="border-bottom-0">Date of use</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($histories as $index => $history)
                           <tr>
                               <td>{{ $index+1 }}</td>
                               <td>{{ $history->id }}</td>
                               <td>{{ $history->pv_type }}</td>
                               <td>{{ $history->user->user_id }}</td>
                               <td>{{ $history->user->nickname }}</td>
                               <td>{{ $history->type }}</td>
                               <td>{{ $history->price  }}</td>
                               <td>{{ $history->created_at }}</td>
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