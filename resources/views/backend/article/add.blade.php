@extends('backend.template')

@section('content')

@include('backend.article/menuleft')

<main>
    <h2>Dodawanie aktualności</h2>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ action('ArticleBackendController@create')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <label for="title">Tytuł</label></br>
        <input type="text" id="title" name="title" class="title" value="{{ old('title') }}"/></br></br>

        <label for="description">Opis</label></br>
        <textarea id="description" name="description" class="description">{{ old('description') }}</textarea></br></br>

        <label for="contents">Treść</label></br>
        <textarea id="contents" name="contents">{{ old('contents') }}</textarea></br>

        <input type="submit" value="Dodaj"/>
        <script>
            CKEDITOR.replace( 'contents' );
        </script>
    
    </form>    
</main>

@endsection('content')





