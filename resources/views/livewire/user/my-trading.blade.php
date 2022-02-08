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
                                        <li class="sec-head-texts">{{ $currencies[0]->symbol }}</li>
                                        <li class="{{ str_contains($currencies[0]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[0]->openPrice }}</li>
                                        <li class="{{ str_contains($currencies[0]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[0]->priceChangePercent }}</li>
                                        <li class="{{ str_contains($currencies[0]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar {{ str_contains($currencies[0]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <li class="sec-head-texts">{{ $currencies[1]->symbol }}</li>
                                        <li class="{{ str_contains($currencies[1]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[1]->openPrice }}</li>
                                        <li class="{{ str_contains($currencies[1]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[1]->priceChangePercent }}</li>
                                        <li class="{{ str_contains($currencies[1]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar {{ str_contains($currencies[1]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <li class="sec-head-texts">{{ $currencies[2]->symbol }}</li>
                                        <li class="{{ str_contains($currencies[2]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[2]->openPrice }}</li>
                                        <li class="{{ str_contains($currencies[2]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[2]->priceChangePercent }}</li>
                                        <li class="{{ str_contains($currencies[2]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar {{ str_contains($currencies[2]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                       <li class="sec-head-texts">{{ $currencies[3]->symbol }}</li>
                                       <li class="{{ str_contains($currencies[3]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[3]->openPrice }}</li>
                                       <li class="{{ str_contains($currencies[3]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[3]->priceChangePercent }}</li>
                                       <li class="{{ str_contains($currencies[3]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                   </ul>
                                   <ul class="left-des">
                                       <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                       <li class="thr-left">Revenue:0</li>
                                   </ul>

                                   <div class="progres-spac">
                                       <div class="progress prog-val">
                                           <div class="progress-bar {{ str_contains($currencies[3]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <li class="sec-head-texts">{{ $currencies[4]->symbol }}</li>
                                        <li class="{{ str_contains($currencies[4]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[4]->openPrice }}</li>
                                        <li class="{{ str_contains($currencies[4]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[4]->priceChangePercent }}</li>
                                        <li class="{{ str_contains($currencies[4]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar {{ str_contains($currencies[4]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                       <li class="sec-head-texts">{{ $currencies[5]->symbol }}</li>
                                       <li class="{{ str_contains($currencies[5]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[5]->openPrice }}</li>
                                       <li class="{{ str_contains($currencies[5]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[5]->priceChangePercent }}</li>
                                       <li class="{{ str_contains($currencies[5]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                   </ul>
                                   <ul class="left-des">
                                       <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                       <li class="thr-left">Revenue:0</li>
                                   </ul>

                                   <div class="progres-spac">
                                       <div class="progress prog-val">
                                           <div class="progress-bar {{ str_contains($currencies[5]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <li class="sec-head-texts">{{ $currencies[5]->symbol }}</li>
                                        <li class="{{ str_contains($currencies[5]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[5]->openPrice }}</li>
                                        <li class="{{ str_contains($currencies[5]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[5]->priceChangePercent }}</li>
                                        <li class="{{ str_contains($currencies[5]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                    </ul>
                                    <ul class="left-des">
                                        <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                        <li class="thr-left">Revenue:0</li>
                                    </ul>

                                    <div class="progres-spac">
                                        <div class="progress prog-val">
                                            <div class="progress-bar {{ str_contains($currencies[5]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                      <li class="sec-head-texts">{{ $currencies[6]->symbol }}</li>
                                      <li class="{{ str_contains($currencies[6]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[6]->openPrice }}</li>
                                      <li class="{{ str_contains($currencies[6]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[6]->priceChangePercent }}</li>
                                      <li class="{{ str_contains($currencies[6]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                  </ul>
                                  <ul class="left-des">
                                      <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                      <li class="thr-left">Revenue:0</li>
                                  </ul>

                                  <div class="progres-spac">
                                      <div class="progress prog-val">
                                          <div class="progress-bar {{ str_contains($currencies[6]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                       <li class="sec-head-texts">{{ $currencies[7]->symbol }}</li>
                                       <li class="{{ str_contains($currencies[7]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[7]->openPrice }}</li>
                                       <li class="{{ str_contains($currencies[7]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">{{ $currencies[7]->priceChangePercent }}</li>
                                       <li class="{{ str_contains($currencies[7]->priceChangePercent, '-') ? 'second-cl' : 'sec-head-text'}}">50</li>
                                   </ul>
                                   <ul class="left-des">
                                       <li class="thr-left">1070-1120 (1.0%, 6 pieces)</li>
                                       <li class="thr-left">Revenue:0</li>
                                   </ul>

                                   <div class="progres-spac">
                                       <div class="progress prog-val">
                                           <div class="progress-bar {{ str_contains($currencies[7]->priceChangePercent, '-') ? 'prog-colr' : 'prog-col-rd'}} " role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
