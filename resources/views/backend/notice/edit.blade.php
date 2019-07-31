@extends('backend.template')

@section('content')

@include('backend.notice/menuleft')

<main>
    <h2>Edycja ogłoszenia</h2>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ action('NoticeBackendController@update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <input type="hidden" name="id" value="{{ $notice->id }}" />

        <label for="title">Tytuł</label></br>
        <input type="text" id="title" name="title" class="title" value="{{ $notice->title }}"/></br></br>

        <label for="description">Opis</label></br>
        <textarea id="description" name="description" class="description">{{ $notice->description }}</textarea></br></br>
    
        <input type="submit" value="Zapisz"/>
    </form>
</main>
@endsection('content')



