@extends('backend.template')

@section('content')

@include('backend.article/menuleft')

<main>
    <h2>Edycja aktualności</h2>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ action('ArticleBackendController@update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <input type="hidden" name="id" value="{{ $article->id }}" />

        <label for="title">Tytuł</label></br>
        <input type="text" id="title" name="title" class="title" value="{{ $article->title }}"/></br></br>

        <label for="description">Opis</label></br>
        <textarea id="description" name="description" class="description">{{ $article->description }}</textarea></br></br>

        <label for="contents">Treść</label></br>
        <textarea id="contents" name="contents">{{ $article->contents }}</textarea></br>

        <input type="submit" value="Zapisz"/>
        <script>
            CKEDITOR.replace( 'contents' );
        </script>
    </form>
    
</main>

@endsection('content')







