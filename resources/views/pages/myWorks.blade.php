@extends('layout.master')

@section('content')

    <section id="two">
        <h2>My Works</h2>
        <div class="row">
            @forelse($works as $work)
                <article class="6u 12u$(xsmall) work-item">
                    <a href="{{ route('works.edit', $work->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('images/fulls/0'.$work->picture.'.jpg') }}" class="image fit thumb"><img src="{{ asset('images/thumbs/0'.$work->picture.'.jpg') }}" alt="" /></a>
                    <h3>{{ $work->name }}</h3>
                    <h4>{{ $work->user->name }}</h4>
                </article>
            @empty
                <article class="12u work-item">
                    <h3>There isn't any work recently</h3>
                </article>
            @endforelse
        </div>
        @if(Auth::check())
            <ul class="actions">
                <li><a href="{{ route('works.create') }}" class="button">Add new work</a></li>
            </ul>
        @endif
    </section>

@endsection