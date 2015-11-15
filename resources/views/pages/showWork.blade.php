@extends('layout.master')

@section('content')


            <div class="row uniform 50%">
                <div class="12u">
                    {{ $work->name  }}
                </div>
                <div class="12u">
                    <img src="{{ asset('images/thumbs/0'.$work->picture.'.jpg') }}" alt="" />
                </div>
                <div class="12u">
                    {{ $work->description }}
                </div>
            </div>
            <br/>
            <ul class="actions">
                <li>
                    <form action="{{ route('works.edit', [$work->id]) }}" method="GET">
                        <input type="submit" value="Edit"/>
                    </form>
                </li>
                <li>
                    <form action="{{ route('works.destroy', [$work->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="delete"/>
                        {!! csrf_field() !!}
                        <input type="submit" value="Delete"/>
                    </form>
                </li>
            </ul>

@endsection

