@extends('fronted.template')

@section('content')
<main>
    <h2>Kadra</h2>
        @foreach ($teams as $team)
            <b>{{ $team->kind }}:</b>
            {!! $team->teacher !!}
        @endforeach
    
</main>
@endsection('content')
