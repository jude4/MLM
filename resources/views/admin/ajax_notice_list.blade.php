@foreach ($notices as $index => $notice)
<tr>
    <td>{{$index+1}}</td>
    <td>3235</td>
    <td>{{$notice->title}}</td>
    <td>{{$notice->used?'used':'not used'}}</td>
    <td>{{$notice->views}}</td>
    <td>{{$notice->created_at}}</td>
    <td class="">
        <a href="{{route('admin.noticemodification', ['id' => $notice->id])}}" class="btn  btn-correction"> correction
        </a>
    </td>
</tr>
@endforeach