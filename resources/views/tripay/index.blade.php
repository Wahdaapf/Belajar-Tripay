@foreach($transactions as $trns)
<p>name</p>
<p>email</p>
<p>{{$trns->produk}}</p>
<p>{{$trns->total_amount}}</p>
<p>{{$trns->status}}</p>
@endforeach