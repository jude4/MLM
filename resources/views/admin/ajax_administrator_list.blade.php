@foreach ($admins as $index => $admin)
<tr>
    <td>{{$index+1}}</td>
    <td>30</td>
    <td>{{$admin->admin_id}}</td>
    <td>{{$admin->name}}</td>
    <td>{{$admin->department}}</td>
    <td>{{$admin->status?'active':'inactive'}}</td>
    <td>{{$admin->last_login}}</td>
    <td>{{$admin->created_at}}</td>
    <td class="">
        <a href="{{route('admin.adminmanagement', ['id' => $admin->id])}}" class="btn  btn-correction">
            Correction
        </a>
    </td>
</tr>
@endforeach