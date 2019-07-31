@extends('fronted.template')

@section('content')
<main>
    <h2>Pliki</h2>
    <div class="link">
        @foreach ($files as $file)
           <p><a href="{{ URL::to('files/'.$file->href) }}">{{ $file->name }}</a> {{ $file->size }}</p>
                
            
        @endforeach
    </div>    
</main>
@endsection('content')





