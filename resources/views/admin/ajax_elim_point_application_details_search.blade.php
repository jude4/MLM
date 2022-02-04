@foreach($historydatas as $index => $item)
<tr>
    <td>{{ $index+1 }}</td>
    <td>{{$item->id}}</td>
    @if($item->type == 1)
    <td>MLM Member</td>
    @else
    <td>General Member</td>
    @endif
    <td>{{$item->user_id}}</td>
    <td>{{ $item->nickname }}</td>
    <td>{{ $item->amount }}</td>
    @if($item->status == 'pending')
    <td class="inc-text-changes">{{$item->status}}</td>
    @elseif($item->status == 'approved')
    <td class="incas-text-changes">{{$item->status}}</td>
    @else
    <td class="incas-text-changes text-danger">{{$item->status}}</td>
    @endif

    <td class="">
        <a href="#" class="btn  btn-correction" onclick="viewelimpointapplicationdetail('{{ $item->id }}')">
            Look</a>
    </td>
    <td class="d-flex">
        @if($item->status == 'pending')
        <a href="#" class="btn  btn-correction mr-3" onclick="openapprovemodal('{{ $item->id }}')">
            Approval </a>
        <a href="#" class="btn  btn-ends" onclick="opencancelmodal('{{ $item->id }}')">
            cancellation
        </a>
        @elseif($item->status == 'approved')
        <a href="#" class="btn btn-correction">
            Confirmed
        </a>
        @else
            
        @endif
    </td>
    <td>{{ $item->created_at }}</td>

</tr>
@endforeach