@extends('layout.master')

@section('content')

    <div class="8u 12u$(small)">
        <form method="post" action="{{ route('works.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row uniform 50%">
                <div class="12u"><input name="name" id="name" placeholder="Work's name" type="text" value="{{ Request::old('name') }}"></div>
                <div class="12u">
                    <select name="picture" id="picture">
                        <option value="1">Picture 1</option>
                        <option value="2">Picture 2</option>
                        <option value="3">Picture 3</option>
                        <option value="4">Picture 4</option>
                        <option value="5">Picture 5</option>
                        <option value="6">Picture 6</option>
                    </select>
                </div>
            </div>
            <br/>
            <ul class="actions">
                <li><input value="Add" type="submit"></li>
            </ul>
        </form>
    </div>

@endsection