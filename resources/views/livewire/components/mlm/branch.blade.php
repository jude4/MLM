<div>
    <div class="box-cen-text pt-4"> {{
        $child->user_id }}
    </div>
    <h3 class="box-rect-sub m-0 pt-2"> {{
        $child->nickname
        }}
    </h3>
    @if (!$child->isEligibleForResale())
    <div class="box-btn py-4 d-flex justify-content-center">
        <a href="#" class="btn-resale-sec" data-toggle="modal" data-target="#resale-modal" >Resale</a>
    </div>
    @else
    <div class="box-btn py-4 d-flex justify-content-center">
        <a href="#" class="btn-resale" data-toggle="modal" data-target="#resale-modal" wire:click="$emit('prepareForResale', '{{$child->id}}')">Resale</a>
    </div>
    @endif
    
    
</div>
