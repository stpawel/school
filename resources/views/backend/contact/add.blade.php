@extends('backend.template')

@section('content')

@include('backend.contact/menuleft')

<main>
    <h2>Dodawanie kontaktu</h2>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ action('ContactBackendController@create')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <label for="position">Stanowisko</label></br>
        <input type="text" id="position" name="position" value="{{ old('position') }}"/></br></br>

        <label for="name">Imie</label></br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"/></br></br>
        
        <label for="surname">Nazwisko</label></br>
        <input type="text" id="surname" name="surname" value="{{ old('surname') }}"/></br></br>
        
        <label for="phone">Telefon</label></br>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"/></br></br>

        <input type="submit" value="Dodaj"/>
        
    
    </form>
</main>

@endsection('content')

