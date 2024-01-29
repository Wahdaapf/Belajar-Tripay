<p>#{{$detail->reference}}</p>
<p>{{number_format($detail->amount)}}</p>
@foreach($detail->instructions as $item)
<h4>{{$item->title}}</h4>
@foreach($item->steps as $step)
<p>{{$loop->iteration}}. {!! $step !!}</p>
@endforeach
@endforeach