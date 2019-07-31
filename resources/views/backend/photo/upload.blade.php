@extends('backend.template')

@section('content')

@include('backend.photo/menuleft')

<main>
    <h2>Wgrywanie zdjęcia</h2>

    <form action="{{ action('PhotoBackendController@upload')}}" method="POST" ENCTYPE="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <input type="file" name="file"/><br/><br/>
        <input type="submit" value="Wyślij plik"/>
    </form>
</main>

@endsection('content')