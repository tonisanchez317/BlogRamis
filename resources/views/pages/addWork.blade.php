@extends('layout.master')

@section('content')

    <div class="8u 12u$(small)">
        <form method="post" action="{{ route('works.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row uniform 50%">
                <div class="12u"><input name="name" id="name" placeholder="Work's name" type="text" value="{{ Request::old('name') }}"></div>
                <div class="12u">
                    <select name="picture" id="picture">
                        @for($i = 1; $i < 7; $i++)
                            <option value="{{ $i }}" {{ Request::old('picture') == $i ? 'selected' : '' }}>Picture {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="12u">
                    <textarea name="description" id="description" placeholder="Description" rows="4">{{ Request::old('description') }}</textarea>
                </div>
            </div>
            <br/>
            <ul class="actions">
                <li><input value="Add" type="submit"></li>
            </ul>
        </form>
    </div>

@endsection