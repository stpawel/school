@extends('backend.template')

@section('content')

@include('backend.team/menuleft')

<main>
    <h2>Kadry</h2>
    <table>
        <thead>
            <tr>
                <th class="nameTable sizeTitle">Tytuł</th>
                <th colspan="2" class="nameTable">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
            <tr>
                <td>{{ $position->kind }}</td>
                <td><a href="{{ URL::to('team/edit/' . $position->id ) }}">Edycja</a></td>
                <td><a href="{{ URL::to('team/delete/' . $position->id ) }}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>

@endsection('content')



