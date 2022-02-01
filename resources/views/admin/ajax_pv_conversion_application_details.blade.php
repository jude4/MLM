@foreach($historydatas as $index => $history)
<tr>
    <td>{{ $index+1 }}</td>
    <td>30</td>
    <td>{{$history->user->user_id}}</td>
    <td>{{$history->user->nickname}}</td>
    @if($history->type == '0')
    <td>Available PV</td>
    @else
    <td>resale</td>
    @endif
    <td>{{$history->amount}}</td>

    @if($history->status == 'pending')
    <td class="inc-text-change1">atmosphere</td>
    @elseif($history->status == 'approved')
    <td class="incas-text-changes">Approval</td>
    @else
    <td class="incas-text-changes text-danger">Cancellation</td>
    @endif


    @if($history->status == 'pending')
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
        <a href="#" class="btn  btn-correction" onclick="detailmodalopen('{{ $history->id }}')">
            Look
        </a>
    </td>

</tr>
@endforeach