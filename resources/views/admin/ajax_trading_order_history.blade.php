@forelse($historydata as $index => $history)
<tr>
    <td>{{ ++$index }}</td>
    <td>{{ $history['pk'] ?? '-' }}</td>
    <td>{{ $history['user_id'] }}</td>
    <td>{{ $history['nickname'] }}</td>
    <td>{{ $history['currency'] }}</td>
    <td>{{ $history['subject'] }}</td>
    <td>
        @if ($history['state'] == 0)
        Processing
        @elseif ($history['state'] == 1)
        Paused
        @else
        Completed
        @endif
    </td>
    <td class="">
        <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-detail-modal">
            Look
        </a>
    </td>
    <td class="">
        <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-pause-modal">
            Pause
        </a>
        <a href="#" class="btn  btn-ends" data-toggle="modal" data-target="#trading-cancel-modal">
            End
        </a>
    </td>
    <td>{{ $history['created_at'] }}</td>

</tr>

@endforeach