@extends('backend.template')

@section('content')

@include('backend.photo/menuleft')

<main>
    <h2>Galeria</h2>
    <div class="photo">
        @foreach ($photos as $photo)
            <figure>
                <a href="{{ URL::to('photos/max/'.$photo->href) }}"><img src="{{ URL::to('photos/min/'.$photo->href) }}" width="276" height="165"></a>
                <figcaption><a href="{{ URL::to('photo/delete/'.$photo->id) }}">Usuń</a></figcaption>
            </figure>    
        @endforeach
    </div>
</main>

@endsection('content')
