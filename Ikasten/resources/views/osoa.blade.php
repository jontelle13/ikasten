@extends('../hasiera')
@section('gehitu')
<p>kaixo</p>
<div>
    <form method="post" action="/gehitu">
        @csrf
        <input type="text" name="izena">
        <input type="number" name="adina">
        <input type="submit" name="bidali" value="Ikaslea gehitu">
    </form>
</div>
@endsection
@section('kendu')
<div class="">
    <form method="post" action="/kendu">
        @csrf
        <input type="text" name="izena">
        <input type="text" name="adina">
        <input type="submit" value="Kendu">
    </form>
    
</div>
@endsection
@section('lista')
<div>
    <form action="/lista" method="get">
        @csrf
        <input type="submit" value="Ikasleak ikusi">
    </form>
</div>
@endsection