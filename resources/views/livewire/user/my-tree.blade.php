<div class="pvm-application" id="tree-structure">
    <div class="card-block table-border-style table-responsive">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-12 table-start">
                    <div class="table-top-head mb-5">MY TREE</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid box-tree">
                        <div class="btn-pluse p-5">
                            <div class="col-1 pls-min-sp">
                                <button type="button" class="  btn-number btn-spd" data-type="plus"
                                    data-field="quant[1]">
                                    <span class="glyphicon glyphicon-plus "></span>
                                </button>
                                <button type="button" class="  btn-number btn-spd2" disabled="disabled"
                                    data-type="minus" data-field="quant[1]">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </div>
                        </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <ol class="carousel-indicators">
                                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                <li data-target="#multi-item-example" data-slide-to="1"></li>
                                <li data-target="#multi-item-example" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="main-tree-structure mt-5">
                                        <div class="level-1 rectangle">
                                            <div class="level-header"></div>
                                            <div class="level-content">
                                                <div class="box-cen-text pt-4"> {{ auth()->user()->nickname }} </div>
                                                <h3 class="box-rect-sub m-0 pt-2"> {{ auth()->user()->nickname }} </h3>
                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                    <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ol class="level-2-wrapper p-0">
                                            <li>
                                                <div class="level-2 rectangle">
                                                    <div class="level-header"></div>
                                                    <div class="level-content">
                                                        @if ( auth()->user()->firstChildExists() )
                                                        <div class="box-cen-text pt-4"> {{
                                                            auth()->user()->firstChild()->nickname }}
                                                        </div>
                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                            auth()->user()->firstChild()->nickname
                                                            }}
                                                        </h3>
                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                        </div>
                                                        @else
                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                            <a href="#" class="btn-resale-secs" data-toggle="modal"
                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->id}}')">Add</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <ol class="level-3-wrapper p-0">
                                                    <li>
                                                        <div class="level-3 rectangle">
                                                            <div class="level-header"></div>
                                                            <div class="level-content">
                                                                @if ( auth()->user()->firstChild()->firstChildExists() )
                                                                <div class="box-cen-text pt-4"> {{
                                                                    auth()->user()->firstChild()->firstChild()->nickname }}
                                                                </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                    auth()->user()->firstChild()->firstChild()->nickname
                                                                    }}
                                                                </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                </div>
                                                                @else
                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                    <a href="#" class="btn-resale-secs"
                                                                        data-toggle="modal"
                                                                        data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->firstChild()->id}}')">Add</a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <ol class="level-4-wrapper p-0">
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->firstChild()->firstChild()->firstChildExists() )
                                                                <div class="box-cen-text pt-4"> {{
                                                                    auth()->user()->firstChild()->firstChild()->firstChild()->nickname }}
                                                                </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                    auth()->user()->firstChild()->firstChild()->firstChild()->nickname
                                                                    }}
                                                                </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                </div>
                                                                @else
                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                    <a href="#" class="btn-resale-secs"
                                                                        data-toggle="modal"
                                                                        data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->firstChild()->firstChild()->id}}')">Add</a>
                                                                </div>
                                                                @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->firstChild()->firstChild()->lastChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->firstChild()->firstChild()->lastChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->firstChild()->firstChild()->lastChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->firstChild()->firstChild()->id}}')">Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div class="level-3 rectangle">
                                                            <div class="level-header"></div>
                                                            <div class="level-content">
                                                                @if ( auth()->user()->firstChild()->lastChildExists() )
                                                                <div class="box-cen-text pt-4"> {{
                                                                    auth()->user()->firstChild()->lastChild()->nickname }}
                                                                </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                    auth()->user()->firstChild()->lastChild()->nickname
                                                                    }}
                                                                </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale-sec">Resale</a>
                                                                </div>
                                                                @else
                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                    <a href="#" class="btn-resale-secs"
                                                                        data-toggle="modal"
                                                                        data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->firstChild()->id}}')">Add</a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <ol class="level-4-wrapper p-0">
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->firstChild()->lastChild()->firstChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->firstChild()->lastChild()->firstChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->firstChild()->lastChild()->firstChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->firstChild()->lastChild()->id}}')">Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->firstChild()->lastChild()->lastChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->firstChild()->lastChild()->lastChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->firstChild()->lastChild()->lastChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->firstChild()->lastChild()->id}}')">Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div class="level-2 rectangle">
                                                    <div class="level-header"></div>
                                                    <div class="level-content">
                                                        @if ( auth()->user()->lastChildExists() )
                                                        <div class="box-cen-text pt-4"> {{
                                                            auth()->user()->lastChild()->nickname }}
                                                        </div>
                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                            auth()->user()->lastChild()->nickname
                                                            }}
                                                        </h3>
                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                        </div>
                                                        @else
                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                            <a href="#" class="btn-resale-secs" data-toggle="modal"
                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->id}}')">Add</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <ol class="level-3-wrapper p-0">
                                                    <li>
                                                        <div class="level-3 rectangle">
                                                            <div class="level-header"></div>
                                                            <div class="level-content">
                                                                @if ( auth()->user()->lastChild()->firstChildExists() )
                                                                <div class="box-cen-text pt-4"> {{
                                                                    auth()->user()->lastChild()->firstChild()->nickname }}
                                                                </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                    auth()->user()->lastChild()->firstChild()->nickname
                                                                    }}
                                                                </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale-sec">Resale</a>
                                                                </div>
                                                                @else
                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                    <a href="#" class="btn-resale-secs"
                                                                        data-toggle="modal"
                                                                        data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->lastChild()->id}}')">Add</a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <ol class="level-4-wrapper p-0">
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->lastChild()->firstChild()->firstChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->lastChild()->firstChild()->firstChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->lastChild()->firstChild()->firstChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->lastChild()->firstChild()->id}}')">Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->lastChild()->firstChild()->lastChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->lastChild()->firstChild()->lastChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->lastChild()->firstChild()->lastChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->lastChild()->firstChild()->id}}')">Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div class="level-3 rectangle">
                                                            <div class="level-header"></div>
                                                            <div class="level-content">
                                                                @if ( auth()->user()->lastChild()->lastChildExists() )
                                                                <div class="box-cen-text pt-4"> {{
                                                                    auth()->user()->lastChild()->lastChild()->nickname }}
                                                                </div>
                                                                <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                    auth()->user()->lastChild()->lastChild()->nickname
                                                                    }}
                                                                </h3>
                                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                                    <a href="#" class="btn-resale-sec">Resale</a>
                                                                </div>
                                                                @else
                                                                <div class="box-btn d-flex justify-content-center py-5">
                                                                    <a href="#" class="btn-resale-secs"
                                                                        data-toggle="modal"
                                                                        data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->lastChild()->id}}')">Add</a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <ol class="level-4-wrapper p-0">
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->lastChild()->lastChild()->firstChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->lastChild()->lastChild()->firstChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->lastChild()->lastChild()->firstChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->lastChild()->lastChild()->id}}')" >Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="level-4 rectangle">
                                                                    <div class="level-header"></div>
                                                                    <div class="level-content">
                                                                        @if ( auth()->user()->lastChild()->lastChild()->lastChildExists() )
                                                                        <div class="box-cen-text pt-4"> {{
                                                                            auth()->user()->lastChild()->lastChild()->lastChild()->nickname }}
                                                                        </div>
                                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                                            auth()->user()->lastChild()->lastChild()->lastChild()->nickname
                                                                            }}
                                                                        </h3>
                                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                                        </div>
                                                                        @else
                                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                                            <a href="#" class="btn-resale-secs"
                                                                                data-toggle="modal"
                                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->lastChild()->lastChild()->id}}')">Add</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-tree-structure mt-5">
                                        <div class="level-2 rectangle">
                                            <div class="level-header"></div>
                                            <div class="level-content">
                                                <div class="box-cen-text pt-4"> {{ auth()->user()->nickname }} </div>
                                                <h3 class="box-rect-sub m-0 pt-2"> {{ auth()->user()->nickname }} </h3>
                                                <div class="box-btn py-4 d-flex justify-content-center">
                                                    <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ol class="level-6-wrapper p-0">
                                            <li>
                                                <div class="level-6 rectangle">
                                                    <div class="level-header"></div>
                                                    <div class="level-content">
                                                        @if ( auth()->user()->firstChildExists() )
                                                        <div class="box-cen-text pt-4"> {{
                                                            auth()->user()->firstChild()->nickname }}
                                                        </div>
                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                            auth()->user()->firstChild()->nickname
                                                            }}
                                                        </h3>
                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                        </div>
                                                        @else
                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                            <a href="#" class="btn-resale-secs" data-toggle="modal"
                                                                data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->id}}')">Add</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="level-6 rectangle">
                                                    <div class="level-header"></div>
                                                    <div class="level-content">
                                                        @if ( auth()->user()->lastChildExists() )
                                                        <div class="box-cen-text pt-4"> {{
                                                            auth()->user()->lastChild()->nickname }}
                                                        </div>
                                                        <h3 class="box-rect-sub m-0 pt-2"> {{
                                                            auth()->user()->lastChild()->nickname
                                                            }}
                                                        </h3>
                                                        <div class="box-btn py-4 d-flex justify-content-center">
                                                            <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                        </div>
                                                        @else
                                                        <div class="box-btn d-flex justify-content-center py-5">
                                                            <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{auth()->user()->id}}')">Add</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <!-- <div class="item">
                                                   
                                                </div>
                                                <div class="item">
                                                    
                                                </div> -->
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mt-21"></div>
        </div>
    </div>
</div>