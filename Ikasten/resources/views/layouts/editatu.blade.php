@extends('../hasiera')
@section('editatu')
<div>
    <h2>IKASLEA</h2>
    <p>Izena:{{ $ikaslea->izena }}</p>
    <p>Adina:{{ $ikaslea->adina }}</p>
    <form action="/aldatu" method="post">
        @csrf
        <input type="text" placeholder="Izen berria" name="izena">
        <input type="number" placeholder="Adin berria" name="adina">
        <input type="submit" value="aldatu">
        <input type="hidden" value="{{$ikaslea->id}}" name="id">
    </form>
</div>
@endsection