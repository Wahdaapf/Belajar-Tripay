@foreach($data as $dt)
    @if($dt->active)
        <form action="{{Route('transaction.store')}}" method="POST">
            @csrf
            <input type="hidden" name="method" value="{{$dt->code}}">
            <input type="hidden" name="qty" value="100000">
            <button>
                <img type="submit" src="{{$dt->icon_url}}" alt="">
                <p>{{$dt->name}}</p>
            </button>
        </form>
    @endif
@endforeach