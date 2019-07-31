@extends('backend.template')

@section('content')

@include('backend.notice/menuleft')

<main>
    <h2>Ogłoszenie</h2>
    <table>
        <thead>
            <tr>
                <th class="nameTable sizeTitle">Tytuł</th>
                <th colspan="2" class="nameTable">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notices as $notice)
            <tr>
                <td>{{ $notice->title }}</td>
                <td><a href="{{ URL::to('notice/edit/' . $notice->id ) }}">Edycja</a></td>
                <td><a href="{{ URL::to('notice/delete/' . $notice->id ) }}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pager">
        {{ $notices->links() }}
    </div>
    
</main>
@endsection('content')



