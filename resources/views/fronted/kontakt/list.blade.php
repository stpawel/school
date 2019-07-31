@extends('fronted.template')

@section('content')
<main>
    <h2>Kontakt</h2>
        @foreach ($contacts as $contact)
            <b>{{ $contact->position }}:</b></br>
            {{ $contact->name }} {{ $contact->surname }} </br>
            telefon: {{ $contact->phone }}</br></br>
        @endforeach
    
</main>
@endsection('content')


