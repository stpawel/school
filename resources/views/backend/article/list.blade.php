@extends('backend.template')

@section('content')

@include('backend.article/menuleft')

<main>
    <h2>Aktualności</h2>
    <div class="search">
        <form action="{{ action('ArticleBackendController@search') }}" method="get">
                <input type="text" name="stitle" id="stitle"  class="stitle" value="{{ $stitle }}" placeholder="Wpisz tytuł"/>
                <input type="submit" value="Szukaj"/>
        </form>
    </div>
    
    <table>
        <thead>
            <tr>
                <th class="nameTable sizeTitle">Tytuł</th>
                <th colspan="2" class="nameTable">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td><a href="{{ URL::to('article/edit/' . $article->id ) }}">Edycja</a></td>
                <td><a href="{{ URL::to('article/delete/' . $article->id ) }}">Usuń</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pager">
        {{ $articles->links() }}
    </div>
</main>

@endsection('content')

