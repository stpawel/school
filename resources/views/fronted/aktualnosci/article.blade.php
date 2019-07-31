@extends('fronted.template')

@section('content')

<article>
    <hgroup>
        <h2>Aktualności</h2>
        <h3>{{$article->title}}</h3>
    </hgroup>
    <b>{{$article->description}}</b>
    <p>{!! $article->contents !!}</p>
</article>


@endsection('content')



