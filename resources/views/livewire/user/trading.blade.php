<div class="container">
    <div class="trad-details">
        @foreach($currencies as $index => $currency)

        <div class="row mb-4">
            <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-3">
                <div class="box-bor">
                    <ul class="main-axs">
                        <li class="first-cl">{{ strtoupper($currency->symbol ) }}</li>
                        <li class="{{ str_contains($currency->priceChangePercent  , '-') ? 'second-cl' : 'second-cl2' }}">{{ $currency->openPrice  }}</li>
                        <li class="{{ str_contains($currency->priceChangePercent  , '-') ? 'second-cl' : 'second-cl2' }}">{{ $currency->priceChangePercent  }}</li>
                        <li class="{{ str_contains($currency->priceChangePercent  , '-') ? 'second-cl' : 'second-cl2' }}">
                            <div class="dropdown">
                                <a class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-sort-down"></i>
                                    {{ $currency->volume  }}

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">{{ $currency->lowPrice  }}</a></li>
                                    <li><a href="#">{{ $currency->highPrice  }}</a></li>
                                    <li><a href="#">4025</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="pic-sub-detail">
                        <li class="third-cl">{{ $currency->lowPrice  }}-{{ $currency->highPrice  }} ({{ $currency->priceChangePercent   }}%, 6 pieces)</li>
                        <li class="third-cl">Revenue:0</li>
                    </ul>

                    <div class="progres-spac">
                        <div class="progress prog-val">
                            <div class="progress-bar {{ str_contains($currency->priceChangePercent  , '-') ? 'prog-colr' : 'prog-col-rd' }} " role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center d-md-block d-none">
                <div class="smal-box-bor">
                    <div class="smal-spd">
                        <a href="" class="btn-section-trad" data-toggle="modal" data-target="#trad-section-mod" wire:click="$emit('setSectionCurrency', '{{  $currency->symbol  ?? 'BTC' }}', {{ $currency->openPrice }}, {{ $currency->priceChangePercent }}, {{ $currency->volume }} )">Section Trading</a>
                    </div>
                    <div class="smal-spd">
                        <a href="" class="btn-section-trad" data-toggle="modal" data-target="#trad-pursue-mod" wire:click="$emit('setPursueCurrency', '{{  $currency->symbol  ?? 'BTC' }}', {{ $currency->openPrice }}, {{ $currency->priceChangePercent }}, {{ $currency->volume }} )">Pursue Trading</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12 col-12  text-center d-md-none d-block">
                <div class="smal-box-bor">
                    <div class="mid-cent">
                        <div class="smal-spd">
                            <a href="" class="btn-section-trad" data-toggle="modal" data-target="#trad-section-mod" wire:click="$emit('setSectionCurrency', '{{  $currency->symbol  ?? 'BTC' }}', {{ $currency->openPrice }}, {{ $currency->priceChangePercent }}, {{ $currency->volume }} )">Section Trading</a>
                        </div>
                        <div class="smal-spd">
                            <a href="" class="btn-section-trad" data-toggle="modal" data-target="#trad-pursue-mod" wire:click="$emit('setPursueCurrency', '{{  $currency->symbol  ?? 'BTC' }}', {{ $currency->openPrice }}, {{ $currency->priceChangePercent }}, {{ $currency->volume }} )">Pursue Trading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach


    </div>
</div>
