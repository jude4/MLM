@extends('layouts.userlayout') 

@section('content')
    
<!-- Start ELIM point change  section-->

<div id="rank-sect">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Ranking</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container mt-5">
        <div class="my-rank ">
            <div class="">
                <div class="row justify-content-md-end ">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="box-week mr-5 d-flex ">
                            <div class="d-text-con">Day</div>
                            <div class="week-text">one week</div>
                            <div class="week-text">one month</div>
                            <div class="mont-text">3 months</div>
                        
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
                                            <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">
                                        </div>
                                        <div class="exchage-icon align-items-center d-flex justify-content-center">
                                            ~        
                                        </div>
                                        <div class="end-date-input">
                                            <input type="date" class="form-control" id="pure-date" aria-describedby="date-design-prepend">    
                                        </div>

                                        <a href="#" class="btn-search ml-2">Search</a>

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
                            <tr>
                                <td>
                                    <img src="{{asset('image/f01.png')}}" width="40px">
                                </td>
                                <td>Danbi-chan</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr>  
                            <tr>
                                <td>
                                    <img src="{{asset('image/f02.png')}}" width="40px">
                                </td>
                                <td>bot-chan</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr>  
                            <tr>
                                <td>
                                    <img src="{{asset('image/f03.png')}}" width="40px">
                                </td>
                                <td>Mirinae Elimbot </td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr> 
                            <tr>
                                <td>4</td>
                                <td>Rose</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr> 
                            <tr>
                                <td>5</td>
                                <td>Yumi</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr> 
                            <tr>
                                <td>6</td>
                                <td>Subin Mom</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr> 
                            <tr>
                                <td>7</td>
                                <td>Dacos</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr> 
                            <tr>
                                <td>8</td>
                                <td>Botchan </td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Mirinae Elimbot  </td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr> 
                            <tr>
                                <td>10</td>
                                <td>Rose</td>
                                <td>12,725,120</td>
                                <td> 0.06%</td> 
                            </tr>    
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>




                
<!-- End ELIM point change  section-->
@endsection