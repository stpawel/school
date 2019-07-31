@extends('fronted.template')

@section('content')

<main>
    <h2>Aktualności</h2>
    @foreach ($articles as $article)
        <section>
            <h3><a href="{{ URL::to('aktualnosci/'.$article->href.'/'. $article->id ) }}">{{$article->title}}</a></h3>
            {{$article->description}}
        </section>
        <div class="line"></div>
    @endforeach
    <div class="pager">
        {{ $articles->links() }}
    </div>
</main>
@endsection('content')

