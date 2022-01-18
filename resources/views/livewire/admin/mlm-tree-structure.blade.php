 <div class="pvm-application" id="tree-structure">
     <div class="card-block table-border-style table-responsive">
         <div class="container-fluid px-5">

             <div class="row mb-5">
                 <div class="col-12">
                     <div class="container-fluid box-tree">
                         <div class="btn-pluse p-5">
                             <div class="col-1 pls-min-sp">
                                 <button type="button" class="  btn-number btn-spd" data-type="plus" data-field="quant[1]">
                                     <span class="glyphicon glyphicon-plus "></span>
                                 </button>
                                 <button type="button" class="  btn-number btn-spd2" disabled="disabled" data-type="minus" data-field="quant[1]">
                                     <span class="glyphicon glyphicon-minus"></span>
                                 </button>
                             </div>
                         </div>

                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
                             <ul class="carousel-indicators">
                                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                 <li data-target="#myCarousel" data-slide-to="1"></li>
                             </ul>

                             <div class="carousel-inner">
                                 <div class="carousel-item active">
                                     <div class="main-tree-structure mt-5">
                                         <div class="level-1 rectangle">
                                             <div class="level-header"></div>
                                             <div class="level-content">
                                                 <div class="box-cen-text pt-4"> {{ $user->user_id }} </div>
                                                 <h3 class="box-rect-sub m-0 pt-2"> {{ $user->nickname }} </h3>
                                                 @if (!$user->isEligibleForResale())
                                                 <div class="box-btn py-4 d-flex justify-content-center">
                                                     <a href="#" class="btn-resale-sec" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                 </div>
                                                 @else
                                                 <div class="box-btn py-4 d-flex justify-content-center">
                                                     <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal" wire:click="$emit('prepareForResale', '{{$user->id}}')">Resale</a>
                                                 </div>
                                                 @endif
                                             </div>
                                         </div>
                                         <ol class="level-2-wrapper p-0">
                                             <li>
                                                 <div class="level-2 rectangle">
                                                     <div class="level-header"></div>
                                                     <div class="level-content">
                                                         @if ( $user->firstChildExists() )
                                                         @livewire('components.mlm.branch', ['child' => $user->firstChild() ])
                                                         @else
                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->id}}')">Add</a>
                                                         </div>
                                                         @endif
                                                     </div>
                                                 </div>
                                                 <ol class="level-3-wrapper p-0">
                                                     <li>
                                                         <div class="level-3 rectangle">
                                                             <div class="level-header"></div>
                                                             <div class="level-content">
                                                                 @if ( $user->firstChild()->firstChildExists() )
                                                                 @livewire('components.mlm.branch', ['child' => $user->firstChild()->firstChild() ])
                                                                 @else
                                                                 <div class="box-btn d-flex justify-content-center py-5">
                                                                     <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->firstChild()->id}}')">Add</a>
                                                                 </div>
                                                                 @endif
                                                             </div>
                                                         </div>
                                                         <ol class="level-4-wrapper p-0">
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->firstChild()->firstChild()->firstChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->firstChild()->firstChild()->firstChild() ])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->firstChild()->firstChild()->id}}')">Add</a>
                                                                         </div>
                                                                         @endif
                                                                     </div>
                                                                 </div>
                                                             </li>
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->firstChild()->firstChild()->lastChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->firstChild()->firstChild()->lastChild() ])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->firstChild()->firstChild()->id}}')">Add</a>
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
                                                                 @if ( $user->firstChild()->lastChildExists() )
                                                                 @livewire('components.mlm.branch', ['child' => $user->firstChild()->lastChild() ])
                                                                 @else
                                                                 <div class="box-btn d-flex justify-content-center py-5">
                                                                     <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->firstChild()->id}}')">Add</a>
                                                                 </div>
                                                                 @endif
                                                             </div>
                                                         </div>
                                                         <ol class="level-4-wrapper p-0">
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->firstChild()->lastChild()->firstChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->firstChild()->lastChild()->firstChild()])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->firstChild()->lastChild()->id}}')">Add</a>
                                                                         </div>
                                                                         @endif
                                                                     </div>
                                                                 </div>
                                                             </li>
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->firstChild()->lastChild()->lastChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->firstChild()->lastChild()->lastChild()])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->firstChild()->lastChild()->id}}')">Add</a>
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
                                                         @if ( $user->lastChildExists() )
                                                         @livewire('components.mlm.branch', ['child' => $user->lastChild()])
                                                         @else
                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->id}}')">Add</a>
                                                         </div>
                                                         @endif
                                                     </div>
                                                 </div>
                                                 <ol class="level-3-wrapper p-0">
                                                     <li>
                                                         <div class="level-3 rectangle">
                                                             <div class="level-header"></div>
                                                             <div class="level-content">
                                                                 @if ( $user->lastChild()->firstChildExists() )
                                                                 @livewire('components.mlm.branch', ['child' => $user->lastChild()->firstChild()])
                                                                 @else
                                                                 <div class="box-btn d-flex justify-content-center py-5">
                                                                     <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->lastChild()->id}}')">Add</a>
                                                                 </div>
                                                                 @endif
                                                             </div>
                                                         </div>
                                                         <ol class="level-4-wrapper p-0">
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->lastChild()->firstChild()->firstChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->lastChild()->firstChild()->firstChild() ])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->lastChild()->firstChild()->id}}')">Add</a>
                                                                         </div>
                                                                         @endif
                                                                     </div>
                                                                 </div>
                                                             </li>
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->lastChild()->firstChild()->lastChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->lastChild()->firstChild()->lastChild()])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->lastChild()->firstChild()->id}}')">Add</a>
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
                                                                 @if ( $user->lastChild()->lastChildExists() )
                                                                 @livewire('components.mlm.branch', ['child' => $user->lastChild()->lastChild() ])
                                                                 @else
                                                                 <div class="box-btn d-flex justify-content-center py-5">
                                                                     <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->lastChild()->id}}')">Add</a>
                                                                 </div>
                                                                 @endif
                                                             </div>
                                                         </div>
                                                         <ol class="level-4-wrapper p-0">
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->lastChild()->lastChild()->firstChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->lastChild()->lastChild()->firstChild()])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->lastChild()->lastChild()->id}}')">Add</a>
                                                                         </div>
                                                                         @endif
                                                                     </div>
                                                                 </div>
                                                             </li>
                                                             <li>
                                                                 <div class="level-4 rectangle">
                                                                     <div class="level-header"></div>
                                                                     <div class="level-content">
                                                                         @if ( $user->lastChild()->lastChild()->lastChildExists() )
                                                                         @livewire('components.mlm.branch', ['child' => $user->lastChild()->lastChild()->lastChild()])
                                                                         @else
                                                                         <div class="box-btn d-flex justify-content-center py-5">
                                                                             <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->lastChild()->lastChild()->id}}')">Add</a>
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

                                 <div class="carousel-item">
                                      <div class="main-tree-structure mt-5">
                                          <div class="level-2 rectangle">
                                              <div class="level-header"></div>
                                              <div class="level-content">
                                                  <div class="box-cen-text pt-4"> {{ $user->nickname }} </div>
                                                  <h3 class="box-rect-sub m-0 pt-2"> {{ $user->nickname }} </h3>
                                                  @if (!$user->isEligibleForResale())
                                                  <div class="box-btn py-4 d-flex justify-content-center">
                                                      <a href="#" class="btn-resale-sec" data-toggle="modal" data-target="#resale-modal">Resale</a>
                                                  </div>
                                                  @else
                                                  <div class="box-btn py-4 d-flex justify-content-center">
                                                      <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal" wire:click="$emit('prepareForResale', '{{$user->id}}')">Resale</a>
                                                  </div>
                                                  @endif
                                              </div>
                                          </div>
                                          <ol class="level-6-wrapper p-0">
                                              <li>
                                                  <div class="level-6 rectangle">
                                                      <div class="level-header"></div>
                                                      <div class="level-content">
                                                          @if ( $user->firstChildExists() )
                                                          @livewire('components.mlm.branch', ['child' => $user->firstChild()])
                                                          @else
                                                          <div class="box-btn d-flex justify-content-center py-5">
                                                              <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->id}}')">Add</a>
                                                          </div>
                                                          @endif
                                                      </div>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="level-6 rectangle">
                                                      <div class="level-header"></div>
                                                      <div class="level-content">
                                                          @if ( $user->lastChildExists() )
                                                          @livewire('components.mlm.branch', ['child' => $user->lastChild()])
                                                          @else
                                                          <div class="box-btn d-flex justify-content-center py-5">
                                                              <a href="#" class="btn-resale-secs" data-toggle="modal" data-target="#add-mlm-modal" wire:click="$emit('setAddId', '{{$user->id}}')">Add</a>
                                                          </div>
                                                          @endif
                                                      </div>
                                                  </div>
                                              </li>
                                          </ol>
                                      </div>

                                 </div>
                             </div>

                             <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                 <span class="carousel-control-prev-icon"></span>
                             </a>

                             <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                 <span class="carousel-control-next-icon"></span>
                             </a>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="mt-21"></div>
         </div>
     </div>
 </div>
