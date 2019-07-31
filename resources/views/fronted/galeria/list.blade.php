@extends('fronted.template')

@section('content')
<main>
    <h2>Galeria</h2>
    <div class="photo">
        @foreach ($photos as $photo)
            <figure>
                <a href="{{ URL::to('photos/max/'.$photo->href) }}" data-lightbox="example-set"><img src="{{ URL::to('photos/min/'.$photo->href) }}" width="276" height="165"></a>
            </figure>
        @endforeach
    </div>>
</main>
@endsection('content')


