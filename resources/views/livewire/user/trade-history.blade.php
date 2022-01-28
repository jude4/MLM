 <div class="container">
     <div class="trad-details">

         {{-- @foreach($currencies as $index => $currency)

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr">
                         <a href="#" class="btn-seg-trad">Segment Trading</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">{{ $currency['symbol'] }}</li>
                         <li class="{{ str_contains($currency['price_change_24h'] , '-') ? 'second-cl' : 'second-cl2' }}">{{ $currency['current_price'] }}</li>
                         <li class="{{ str_contains($currency['price_change_24h'] , '-') ? 'second-cl' : 'second-cl2' }}">{{ $currency['price_change_24h'] }}</li>
                         <li class="{{ str_contains($currency['price_change_24h'] , '-') ? 'second-cl' : 'second-cl2' }}">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     {{ $currency['total_volume'] }}
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">{{ $currency['low_24h'] }}</a></li>
                                     <li><a href="#">{{ $currency['high_24h'] }}</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">{{ $currency['low_24h'] }}-{{ $currency['high_24h'] }} ({{ $currency['price_change_24h']  }}%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>
                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar {{ str_contains($currency['price_change_24h'] , '-') ? 'prog-colr' : 'prog-col-rd' }} " role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>

                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         @endforeach --}}

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-seg-trad">Segment Trading</a>
                         <a href="#" class="btn-pause-trad">Pause</a>
                     </div>

                     <ul class="main-axs">
                         <li class="first-cl">BTC</li>
                         <li class="second-cl">73,586,000</li>
                         <li class="second-cl">-0.3</li>
                         <li class="second-cl">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     221,000
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">7358600-7811302 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:-20000</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause">Re-start</a>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause">Re-start</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-chase-trad">chase transaction</a>
                         <a href="#" class="btn-pause-trad">Pause</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">MANA</li>
                         <li class="second-cl2">3,060</li>
                         <li class="second-cl2">+1.66</li>
                         <li class="second-cl2">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i></i>
                                     50
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">3060-3248 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue: 800</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-col-rd" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause">Re-start</a>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause">Re-start</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-chase-trad">chase transaction</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">ETH</li>
                         <li class="second-cl">5,408,000</li>
                         <li class="second-cl">-0.77</li>
                         <li class="second-cl">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     42,000
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr">
                         <a href="#" class="btn-seg-trad">Segment Trading</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">STORJ</li>
                         <li class="second-cl2">1,990</li>
                         <li class="second-cl2">+2.05</li>
                         <li class="second-cl2">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i></i>
                                     40
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-col-rd" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr">
                         <a href="#" class="btn-seg-trad">Segment Trading</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">PUNDIX</li>
                         <li class="second-cl">1,905</li>
                         <li class="second-cl">-1.55</li>
                         <li class="second-cl">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     30
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-chase-trad">chase transaction</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">AAVE</li>
                         <li class="second-cl">393,900</li>
                         <li class="second-cl">-1.61</li>
                         <li class="second-cl">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     6450
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-chase-trad">chase transaction</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">NU</li>
                         <li class="second-cl">1,120</li>
                         <li class="second-cl">-1.75</li>
                         <li class="second-cl">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     20
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row mb-4">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-seg-trad">Segment Trading</a>
                         <a href="#" class="btn-pause-trad">Pause</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">SOL</li>
                         <li class="second-cl">293,600</li>
                         <li class="second-cl">-1.38</li>
                         <li class="second-cl">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                     50
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-colr" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause">Re-start</a>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause">Re-start</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row mb-5">
             <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                 <div class="box-bor">
                     <div class="spd-bnr d-inline-block">
                         <a href="#" class="btn-seg-trad">Segment Trading</a>
                     </div>
                     <ul class="main-axs">
                         <li class="first-cl">ZRX</li>
                         <li class="second-cl2">1,445</li>
                         <li class="second-cl2">+0.35</li>
                         <li class="second-cl2">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-up"></i></i>
                                     5
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">2760</a></li>
                                     <li><a href="#">2850</a></li>
                                     <li><a href="#">4025</a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                     <ul class="pic-sub-detail">
                         <li class="third-cl">1070-1120 (1.0%, 6 pieces)</li>
                         <li class="third-cl">Revenue:0</li>
                     </ul>

                     <div class="progres-spac">
                         <div class="progress prog-val">
                             <div class="progress-bar prog-col-rd" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                 <div class="smal-box-bor">
                     <div class="smal-spd">
                         <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                     </div>
                     <div class="smal-spd">
                         <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                 <div class="smal-box-bor">
                     <div class="mid-cent">
                         <div class="smal-spd">
                             <a href="" class="btn-trad-view-detail" data-toggle="modal" data-target="#view-details">View Details</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-suspen-trad">Transaction Suspension</a>
                         </div>
                         <div class="smal-spd">
                             <a href="" class="btn-trad-pause" data-toggle="modal" data-target="#pause-trading">Pause</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
