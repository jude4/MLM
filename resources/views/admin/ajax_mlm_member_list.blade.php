@foreach ($historydata as $index => $user)
<tr>
    <td>{{$index+1}}</td>
    <td>{{$user->id}}</td>
    <td>{{$user->type}}</td>
    <td>{{$user->user_id}}</td>
    <td>{{$user->nickname}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->elim_points}}</td>
    <td>{{$user->t_points}}</td>
    <td>{{$user->available_pv == 0? '-': $user->available_pv}}</td>
    <td>{{$user->earned_pv == 0? '-': $user->earned_pv}}</td>
    <td>{{$user->status?'active':'inactive'}}</td>
    <td>{{$user->created_at}}</td>
    <td class="">
        <a href="{{route('admin.member-tree-sturcture', ['id' => $user->id])}}" class="btn  btn-correction">
            View Tree
        </a>
    </td>
  
</tr>
@endforeach