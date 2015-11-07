@extends('layout.master')

@section('content')

    <div class="8u 12u$(small)">
        <form method="post" action="{{ route('website.authenticate') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row uniform 50%">
                <div class="12u"><input name="email" id="email" placeholder="Email" type="email"></div>
                <div class="12u"><input name="password" id="password" placeholder="Password" type="password"></div>
            </div>
            <br/>
            <ul class="actions">
                <li><input value="Login" type="submit"></li>
            </ul>
        </form>
    </div>

@endsection