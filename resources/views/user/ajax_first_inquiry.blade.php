@foreach ($inquiries as $inquiry)
<tr>
    <td>10</td>
    <td>{{$inquiry->subject}}</td>
    <td>{{$inquiry->status()}}</td>
    <td>{{$inquiry->nickname}}</td>
    <td>{{$inquiry->created_at}}</td>
</tr>
@endforeach