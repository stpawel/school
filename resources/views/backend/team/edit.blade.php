@extends('backend.template')

@section('content')

@include('backend.team/menuleft')

<main>
    <h2>Edycja Kadr</h2>
    <form action="{{ action('TeamBackendController@update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <label for="position">Pozycja: </label>
        <select id="position"name="position">
            @foreach ($positions as $position)
                @if($position->id==$team->position_id)
                    <option value="{{ $position->id }}" selected="selected">{{ $position->kind }} </option>
                @else 
                    <option value="{{ $position->id }}">{{ $position->kind }}</option>
                @endif
            @endforeach
        </select></br></br>
        
        <label for="name">Nazwa</label></br>
        <textarea id="name" name="name">{{$team->name}}</textarea>
        
        <input type="hidden" name="id" value="{{ $team->id }}" />

        <input type="submit" value="Zapisz"/>
        <script>
            CKEDITOR.replace( 'name' );
        </script>
    </form>
</main>

@endsection('content')

