@extends('backend.template')

@section('content')

@include('backend.file/menuleft')

<main>
    <h2>Pliki</h2>
    
    <table>
        <thead>
            <tr>
                <th class="nameTable">Tytuł</th>
                <th class="nameTable">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
            <tr>
                <td><a href="{{ URL::to('files/'.$file->href) }}">{{ $file->name }}</a></td>
                <td><a href="{{ URL::to('file/delete/' . $file->id ) }}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
</main>
@endsection('content')



