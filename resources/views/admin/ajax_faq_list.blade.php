@foreach ($faqs as $index => $faq)
<tr>
    <td>{{$index+1}}</td>
    <td>3235</td>
    <td>{{$faq->category}}</td>
    <td>{{$faq->question}}</td>
    <td>{{$faq->used?'used':'not used'}}</td>
    <td>{{$faq->created_at}}</td>
    <td class="">
        <a href="{{route('admin.faqmodification', ['id' => $faq->id])}}" class="btn  btn-correction"> correction
        </a>
    </td>
</tr>
@endforeach