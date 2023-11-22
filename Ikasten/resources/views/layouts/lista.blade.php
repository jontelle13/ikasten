@extends('../hasiera')
@section('lista')
<div>
    @foreach($ikasleak as $ikasle)
        <form action="/editatu/{{ $ikasle->id }}" method="post" >
            @csrf
            <p>Izena:{{ $ikasle->izena}}, adina:{{ $ikasle->adina }}</p>
            
            <input type="submit" value="editatu">
        </form>
    @endforeach
</div>
@endsection