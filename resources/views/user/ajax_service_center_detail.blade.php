@foreach ($notices as $index => $notice)
<tr>
    <td>{{$index+1}}</td>
    <td>{{$notice->title}}</td>
    <td>{{$notice->views}}</td>
    <td>{{$notice->created_at}}</td>
    <td>
        <a href="{{route('user.servicecenterdetail', ['id' => $notice->id])}}" class="btn-service-listd"> view
        </a>
    </td>
</tr>
@endforeach