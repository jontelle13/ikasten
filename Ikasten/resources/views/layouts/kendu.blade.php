@extends('../hasiera')
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