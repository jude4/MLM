@foreach($historydatas as $index => $record)
<tr>
    <td>{{ $index+1 }}</td>
    <td>{{$record->id}}</td>

    @if($record->type == 'General Member')
    <td>General Membership</td>
    @else
    <td>MLM member</td>
    @endif
        
    <td>{{$record->user_id}}</td>
    <td>{{$record->nickname}}</td>
    
    @if($record->increase == '1')
    <td class="inc-text-changes">increase</td>
    @else
    <td class="inc-text-change">decrease</td>
    @endif

    <td>{{$record->quantity}}</td>
    <td>{{$record->contents}}</td>
    <td>{{$record->created_at}}</td>

</tr> 

@endforeach