@extends('backend.template')

@section('content')

@include('backend.team/menuleft')

<main>
    <h2>Dodawanie Kadr</h2>
    <form action="{{ action('TeamBackendController@create')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <label for="position">Pozycja: </label>
        <select id="position"name="position">
            @foreach ($positions as $position)
            <option value="{{ $position->id }}">{{ $position->kind }}</option>
            @endforeach
        </select></br></br>
        
        <label for="name">Nazwa</label></br>
        <textarea id="name" name="name"></textarea>
        
        <input type="submit" value="Dodaj"/>
        <script>
            CKEDITOR.replace( 'name' );
        </script>
    </form>
</main>

@endsection('content')



