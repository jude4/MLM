@foreach ($historydata as $index => $res)
<tr>
    <td>{{$index+1}}</td>
    <td>{{$res->id}}</td>
    
    @if($res->type == 1)
    <td>MLM Member</td>
    @else
    <td>General Member</td>
    @endif

    <td>{{$res->user_id}}</td>
    <td>{{$res->nickname}}</td>
    <td>{{$res->quantity}}</td>
    <td><a href="#" class="btn  btn-correction" onclick="viewelimpointtransferdetail('{{ $res->id }}')">
            Look</a></td>
    <td>{{$res->created_at}}</td>
</tr>
@endforeach