@foreach ($faqdata as $index => $faq)
<div class="panel panel-default mb-3">
    <div class="panel-heading  @if ($loop->first) active @endif" role="tab" id="heading{{$faq->category.$index}}">
        <h4 class="panel-title mb-0">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->category.$index}}" aria-expanded="@if ($loop->first)true @else false @endif" aria-controls="collapse{{$faq->category.$index}}">
                {{$faq->question}}
            </a>
        </h4>
    </div>
    <div id="collapse{{$faq->category.$index}}" class="panel-collapse collapse @if ($loop->first) in show @endif" role="tabpanel" aria-labelledby="heading{{$faq->category.$index}}">
        <div class="panel-body d-block">
            {{$faq->answer}}
        </div>
    </div>
</div>
@endforeach