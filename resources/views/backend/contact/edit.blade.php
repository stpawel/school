@extends('backend.template')

@section('content')

@include('backend.contact/menuleft')

<main>
    <h2>Edycja kontaktu</h2>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ action('ContactBackendController@update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <input type="hidden" name="id" value="{{ $contact->id }}" />

        <label for="position">Stanowisko</label></br>
        <input type="text" id="position" name="position" value="{{ $contact->position }}"/></br></br>

        <label for="name">Imie</label></br>
        <input type="text" id="name" name="name" value="{{ $contact->name }}"/></br></br>
        
        <label for="surname">Nazwisko</label></br>
        <input type="text" id="surname" name="surname" value="{{ $contact->surname }}"/></br></br>
        
        <label for="phone">Telefon</label></br>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"/></br></br>

        <input type="submit" value="Zapisz"/>
    </form>
</main>

@endsection('content')

