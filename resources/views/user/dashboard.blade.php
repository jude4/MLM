@extends('layouts.userlayout')

@section('content')
    <!-- Start main  section-->

<div id="main-sec">
    <div class="bg05">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-2 col-md-0">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 align-self-center mb-4">
                            <div class="header-title text-center">
                                <h4 class="mb-0 d-md-none d-block">gyewang01<span class="top-sub-nms">Gyewang 01</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-9 col-12">
                            <div class="bg03">
                                <img src="{{asset('image/bg03.png')}}" width="100%">
                            </div>
                            <div class="tot-sub-pos1">
                                 <div class="total-text1">Elim - Point : {{number_format(auth()->user()->elim_points)}}</div>
                                 <div class="btn-place"><a href="{{route('user.trading')}}">Place an order</a></div>
                                 
                            </div>
                            <div class="tot-sub-pos2">
                                 <div class="total-text1">T-Point : {{number_format(auth()->user()->t_points)}} </div>
                                 <div class="btn-place"><a href="{{route('user.tradinghistory')}}">Order History</a></div> 
                                
                            </div>
                             <div class="tot-sub-pos3">
                                 <div class="total-text1"></div>
                                 <div class="btn-manage"><a href="{{route('user.krwwithdrawalrequest')}}">PV Management</a></div> 
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>




<div class="container my-4 sld-sec">
    <div class="row mt-5">
        <div class="col-12 text-md-left text-center">
            <h3>My Trading</h3>
        </div>
    </div>
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        <div class="controls-top">
            <a class="btn-floating btn-left-side" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating btn-right-side" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
      
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">XRP</li>
                                        <li class="sec-head-text">3,060</li>
                                        <li class="sec-head-text">+1.66</li>
                                        <li class="sec-head-text">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-col-rd" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">BTC</li>
                                        <li class="second-cl">172.100</li>
                                        <li class="second-cl">-1.57</li>
                                        <li class="second-cl">2,750</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-colr" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="row ">
                            <div class="col-12">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">ETH</li>
                                        <li class="sec-head-text">3,060</li>
                                        <li class="sec-head-text">+1.66</li>
                                        <li class="sec-head-text">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-col-rd" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">XRP</li>
                                        <li class="sec-head-text">3,060</li>
                                        <li class="sec-head-text">+1.66</li>
                                        <li class="sec-head-text">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-col-rd" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">BTC</li>
                                        <li class="second-cl">172.100</li>
                                        <li class="second-cl">-1.57</li>
                                        <li class="second-cl">2,750</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-colr" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">ETH</li>
                                        <li class="sec-head-text">3,060</li>
                                        <li class="sec-head-text">+1.66</li>
                                        <li class="sec-head-text">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-col-rd" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
           
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row ">
                            <div class="col-12">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">XRP</li>
                                        <li class="sec-head-text">3,060</li>
                                        <li class="sec-head-text">+1.66</li>
                                        <li class="sec-head-text">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-col-rd" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">BTC</li>
                                        <li class="second-cl">172.100</li>
                                        <li class="second-cl">-1.57</li>
                                        <li class="second-cl">2,750</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-colr" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="box-bord">
                                    <ul class="top-slid">
                                        <li class="sec-head-texts">ETH</li>
                                        <li class="sec-head-text">3,060</li>
                                        <li class="sec-head-text">+1.66</li>
                                        <li class="sec-head-text">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar prog-col-rd" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="rank-sec">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-sm-12 col-12 mb-3">
                <div class="box-bor">
                    <div class="d-flex justify-content-between">
                        <div class="rank-text">This Month's rate of return Rank </div>
                        <div class="btn-more-pluse">
                            <a href="{{route('user.ranking')}}">More+</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="table-responsive table-borderless ">
                            <table class="table">
                                <tbody class="table-body ">
                                    @foreach ($thisMonthsRanking as $index => $ranking)
                                        @if ($index == 0)
                                        <tr class="cell-1 first-str" >
                                            <td>
                                                <img src="{{asset('image/f01.png')}}" width="45px">
                                                <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                    <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                </dl>                                   
                                            </td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>@ {{$ranking->yield}}%</td> 
                                        </tr> 
                                        @elseif ($index == 1)
                                        <tr class="cell-1 second-str" >
                                            <td>
                                                <img src="{{asset('image/f02.png')}}" width="45px">
                                                <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                    <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                </dl>                                   
                                            </td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>@ {{$ranking->yield}}%</td> 
                                        </tr> 
                                        @elseif ($index == 2)
                                        <tr class="cell-1 first-str" >
                                            <td>
                                                <img src="{{asset('image/f03.png')}}" width="45px">
                                                <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                    <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                </dl>                                   
                                            </td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>@ {{$ranking->yield}}%</td> 
                                        </tr>
                                        @else
                                            @if ($index%2 != 0)
                                            <tr class="cell-1 forth-str" >
                                                <td>
                                                    <div class="d-inline-block align-middle forth-strs ml-2">{{$index+1}}</div>
                                                    <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                        <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                    </dl>                                   
                                                </td>
                                                <td>{{number_format($ranking->reward)}}</td>
                                                <td>@ {{$ranking->yield}}%</td> 
                                            </tr>
                                            @else
                                            <tr class="cell-1 fifth-str" >
                                                <td>
                                                    <div class="d-inline-block align-middle forth-strs ml-2">{{$index+1}}</div>
                                                    <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                        <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                    </dl>                                   
                                                </td>
                                                <td>{{number_format($ranking->reward)}}</td>
                                                <td>@ {{$ranking->yield}}%</td> 
                                            </tr> 
                                            @endif
                                        @endif                                        
                                    @endforeach
                                    

                                      
                                    
                                    
                                    
                                    {{-- <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">6</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">travel healing</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">7</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Orange</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td>
                                    </tr> 
                                    <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">8</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">travel healing</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">9</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Soon-Im Seong</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td>
                                    </tr>
                                    <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">10</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">mini mom</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">11</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Soon-Im Seong</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td>
                                    </tr>
                                    <tr class=" forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">12</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">mini mom</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr> --}}
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-12 mb-3">
                <div class="box-bor">
                    <div class="d-flex justify-content-between">
                        <div class="rank-text">Overall Yield Rank </div>
                        <div class="btn-more-pluse">
                            <a href="{{route('user.ranking')}}">More+</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="table-responsive table-borderless ">
                            <table class="table">
                                <tbody class="table-body ">

                                    @foreach ($overallRanking as $index => $ranking)
                                        @if ($index == 0)
                                        <tr class="cell-1 first-str" >
                                            <td>
                                                <img src="{{asset('image/f01.png')}}" width="45px">
                                                <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                    <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                </dl>                                   
                                            </td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>@ {{$ranking->yield}}%</td> 
                                        </tr> 
                                        @elseif ($index == 1)
                                        <tr class="cell-1 second-str" >
                                            <td>
                                                <img src="{{asset('image/f02.png')}}" width="45px">
                                                <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                    <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                </dl>                                   
                                            </td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>@ {{$ranking->yield}}%</td> 
                                        </tr> 
                                        @elseif ($index == 2)
                                        <tr class="cell-1 first-str" >
                                            <td>
                                                <img src="{{asset('image/f03.png')}}" width="45px">
                                                <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                    <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                </dl>                                   
                                            </td>
                                            <td>{{number_format($ranking->reward)}}</td>
                                            <td>@ {{$ranking->yield}}%</td> 
                                        </tr>
                                        @else
                                            @if ($index%2 != 0)
                                            <tr class="cell-1 forth-str" >
                                                <td>
                                                    <div class="d-inline-block align-middle forth-strs ml-2">{{$index+1}}</div>
                                                    <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                        <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                    </dl>                                   
                                                </td>
                                                <td>{{number_format($ranking->reward)}}</td>
                                                <td>@ {{$ranking->yield}}%</td> 
                                            </tr>
                                            @else
                                            <tr class="cell-1 fifth-str" >
                                                <td>
                                                    <div class="d-inline-block align-middle forth-strs ml-2">{{$index+1}}</div>
                                                    <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                        <dt class="first-strs">{{$ranking->user->nickname}}</dt>   
                                                    </dl>                                   
                                                </td>
                                                <td>{{number_format($ranking->reward)}}</td>
                                                <td>@ {{$ranking->yield}}%</td> 
                                            </tr> 
                                            @endif
                                        @endif                                        
                                    @endforeach
                                    {{-- <tr class="cell-1 first-str" >
                                        <td>
                                            <img src="{{asset('image/f01.png')}}" width="45px">
                                            <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Danbi-chan</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr> 

                                    <tr class="cell-1 second-str" >
                                        <td>
                                            <img src="{{asset('image/f02.png')}}" width="45px">
                                            <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">bot-chan</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>   
                                    <tr class="cell-1 first-str" >
                                        <td>
                                            <img src="{{asset('image/f03.png')}}" width="45px">
                                            <dl class="mb-0 ml-3 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Mirinae Elimbot</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">4</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">rose</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">5</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">chyle</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr> 
                                    <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">6</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">travel healing</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">7</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Orange</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td>
                                    </tr> 
                                    <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">8</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">travel healing</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">9</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Soon-Im Seong</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td>
                                    </tr>
                                    <tr class="cell-1 forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">10</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">mini mom</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr>
                                    <tr class="cell-1 fifth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">11</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">Soon-Im Seong</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td>
                                    </tr>
                                    <tr class=" forth-str" >
                                        <td>
                                            <div class="d-inline-block align-middle forth-strs ml-2">12</div>
                                            <dl class="mb-0 ml-4 pl-2 d-inline-block align-middle coin-line">
                                                <dt class="first-strs">mini mom</dt>   
                                            </dl>                                   
                                        </td>
                                        <td>12,725,120</td>
                                        <td>@0.6%</td> 
                                    </tr> --}}
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<div id="customer-service">
    <div class="cus-bg">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-4">
                <h3>Customer Service Center</h3>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 text-center  mb-2">
                <div class="cus-img">
                     <a href="service-center.html"><img src="{{asset('image/l01.png')}}" width="100px"></a>
                    <div class="notice-text pt-3">Notice</div>
                    <div class="notice-sub-text">V-Elim's latest news Check it out now.</div>

                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 text-center  mb-2">
                <div class="cus-img">
                     <a href="{{route('user.faq')}}"><img src="{{asset('image/l02.png')}}" width="100px"></a>
                    <div class="notice-text pt-3">Frequently Asked Questions    </div>
                    <div class="notice-sub-text">Customers This is a frequently asked question.</div>

                </div>
            </div>
           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 text-center  mb-2">
                <div class="cus-img">
                    <a href="{{route('user.firstinquiry')}}"><img src="{{asset('image/l03.png')}}" width="100px"></a>
                    <div class="notice-text pt-3">1:1 inquiry</div>
                    <div class="notice-sub-text">Do you have any questions? 24 hours support is available.</div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start main  section-->
@endsection

@section('scripts')
    <!-- ==========x==========x========== Top  slider JS start==========x==========x========== -->
<!-- <script src="{{asset('carousel.js')}}"></script> -->



<!-- ==========x==========x========== Top  slider JS End ==========x==========x========== -->
@endsection
