@foreach ($historydatas as $index => $historydata)
<tr>
    <td>{{$index+1}}</td>
    <td>30</td>
    <td>{{ $historydata->user_id }}</td>
    <td>{{ $historydata->nickname }}</td>
    <td>{{ $historydata->earning_type }}</td>
    <td>{{ $historydata->available_earned_bonus }}</td>
    <td>{{ $historydata->accumulated_earned_bonus }}</td>
    <td>{{ $historydata->created_at }}</td>
</tr>
@endforeach