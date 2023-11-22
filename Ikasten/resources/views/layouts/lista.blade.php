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
<div>
    <form action="/bilatu" method="get">
        @csrf
        <input type="text" name="izena" placeholder="Bilatu Izena">
        <input type="submit" value="Bilatu">
    </form>
</div>
@endsection