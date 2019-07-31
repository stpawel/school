@extends('fronted.template')

@section('content')

<main>
    <h2>Ogłoszenia</h2>
    @foreach ($notices as $notice)
        <section>
            <h3>{{$notice->title}}</h3>
            <p>{!! $notice->description !!}</p>
        </section>
        <div class="line"></div>
    @endforeach
    <div class="pager">
        {{ $notices->links() }}
    </div>
</main>
@endsection('content')

