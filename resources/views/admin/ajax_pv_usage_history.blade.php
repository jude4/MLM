@foreach($historydatas as $index => $history)
<tr>
    <td>{{ $index+1 }}</td>
    <td>{{$history->id}}</td>
    <td>{{$history->pv_type}}</td>
    <td>{{$history->user_id}}</td>
    <td>{{$history->nickname}}</td>
    <td>
        @if($history->type == '1')
        withdraw
        @elseif($history->type == '2')
        send
        @elseif($history->type == '3')
        transform
        @else
        repurchase
        @endif
    </td>
    <td>{{$history->price}}</td>
    <td>{{$history->created_at}}</td>
</tr>
@endforeach