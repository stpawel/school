@extends('backend.template')

@section('content')

@include('backend.file/menuleft')

<main>
    <h2>Wgrywanie pliku</h2>
    
    <form action="{{ action('FileBackendController@upload')}}" method="POST" ENCTYPE="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <input type="file" name="file"/><br/><br/>
        <input type="submit" value="Wyślij plik"/>
    </form>
    
</main>
@endsection('content')

