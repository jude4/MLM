@foreach ($inquiries as $index => $inquiry)
<tr>
    <td>{{$index+1}}</td>
    <td>3235</td>
    <td>{{$inquiry->user->user_id}}</td>
    <td>{{$inquiry->user->nickname}}</td>
    <td>{{$inquiry->inquiry}}</td>
    <td class="">
        <a href="{{route('admin.oneononeinquiryanswer', ['id' => $inquiry->id])}}" class="btn  btn-correction"> look
        </a>
    </td>
    <td>{{$inquiry->answer?'Answer done':'Answer undone'}}</td>
    <td>{{$inquiry->created_at}}</td>
</tr>
@endforeach