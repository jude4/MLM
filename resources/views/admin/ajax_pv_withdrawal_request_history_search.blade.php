@foreach($historydatas as $index => $history)
<tr>
    <td>{{ $index+1 }}</td>
    <td>30</td>
    <td>{{$history->user_id}}</td>
    <td>{{$history->nickname}}</td>
    <td>{{$history->amount}}</td>

    @if($history->status == '0')
    <td class="inc-text-change1">atmosphere</td>
    @elseif($history->status == '1')
    <td class="incas-text-changes">Approval</td>
    @else
    <td class="incas-text-changes text-danger">Cancellation</td>
    @endif

    @if($history->status == '0')
    <td class="">
        <a href="#" class="btn  btn-correction" onclick="approvalmodalopen('{{ $history->id }}')">
            Approval </a>
        <a href="#" class="btn  btn-ends" onclick="cancelmodalopen('{{ $history->id }}')">
            cancellation
        </a>
    </td>
    @else
    <td>-</td>
    @endif

    <td>{{$history->created_at}}</td>
    <td class="">
        <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#pv-withdrawal-detail-modal">
            Look
        </a>
    </td>
</tr>
@endforeach