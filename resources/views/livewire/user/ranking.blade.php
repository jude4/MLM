<div class="container mt-5">
    <div class="my-rank ">
        <div class="">
            <div class="row justify-content-md-end ">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="box-week mr-5 d-flex ">
                        <div class="{{$searchOption == 'day'? 'd-text-con': 'week-text'}}" wire:click="showDateFor('day')">Day</div>
                        <div class="{{$searchOption == 'week'? 'd-text-con': 'week-text'}}" wire:click="showDateFor('week')">One week</div>
                        <div class="{{$searchOption == 'month'? 'd-text-con': 'week-text'}}" wire:click="showDateFor('month')">One month</div>
                        <div class="{{$searchOption == '3months'? 'd-text-con': 'mont-text'}}" wire:click="showDateFor('3months')">3 months</div>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive mb-21">
                <div class="row pt-4 pb-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="table-date-title-left">
                                    <img src="{{asset('image/rank01.png')}}" width="40px" class="mr-2"> Yield Ranking
                                </div>
                            </div>
                                <div class="col-sm-6">
                                    <div class="start-end-date-group d-flex justify-content-md-end mr-5">
                                        <div class="start-date-input">
                                            <input type="date" class="form-control" name="startDate" id="pure-date" aria-describedby="date-design-prepend" wire:model='startDate'>
                                        </div>
                                        <div class="exchage-icon align-items-center d-flex justify-content-center">
                                            ~        
                                        </div>
                                        <div class="end-date-input">
                                            <input type="date" class="form-control" name="endDate" id="pure-date" aria-describedby="date-design-prepend" wire:model='endDate'>    
                                        </div>

                                        <button href="#" class="btn-search ml-2" wire:click='search'>Search</button>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">RANK</th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Reward</th>
                            <th scope="col">Yield</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($rankings as $index => $ranking)
                                        @if ($index == 0)
                                        <tr>
                                            <td>
                                                <img src="{{asset('image/f01.png')}}" width="40px">
                                            </td>
                                            <td>{{$ranking->user->nickname}}</td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>{{$ranking->yield}}%</td> 
                                        </tr> 
                                        @elseif ($index == 1)
                                        <tr>
                                            <td>
                                                <img src="{{asset('image/f02.png')}}" width="40px">
                                            </td>
                                            <td>{{$ranking->user->nickname}}</td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td> {{$ranking->yield}}%</td> 
                                        </tr>
                                        @elseif ($index == 2)
                                        <tr>
                                            <td>
                                                <img src="{{asset('image/f03.png')}}" width="40px">
                                            </td>
                                            <td>{{$ranking->user->nickname}}</td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td> {{$ranking->yield}}%</td> 
                                        </tr>
                                        @else
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$ranking->user->nickname}}</td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td> {{$ranking->yield}}%</td> 
                                        </tr>   
                                        @endif 
                                    @empty
                                    <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr>
                                    @endforelse     
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>