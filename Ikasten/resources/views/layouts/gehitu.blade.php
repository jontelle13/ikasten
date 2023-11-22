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