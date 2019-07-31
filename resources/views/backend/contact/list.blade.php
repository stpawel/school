@extends('backend.template')

@section('content')

@include('backend.contact/menuleft')

<main>
    <h2>Kontakty</h2>
    
    <table>
        <thead>
            <tr>
                <th class="nameTable">Stanowisko</th>
                <th class="nameTable">Imie</th>
                <th class="nameTable">Nazwisko</th>
                <th class="nameTable">Telefon</th>
                <th colspan="2" class="nameTable">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->position }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->surname }}</td>
                <td>{{ $contact->phone }}</td>
                <td><a href="{{ URL::to('contact/edit/' . $contact->id ) }}">Edycja</a></td>
                <td><a href="{{ URL::to('contact/delete/' . $contact->id ) }}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>

@endsection('content')

