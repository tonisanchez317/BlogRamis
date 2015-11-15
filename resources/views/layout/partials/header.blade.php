<header id="header">
    @if(Auth::check())
        <a href="#" class="image avatar"><img src="{{ asset('images/'.Auth::getUser()->name.'_over.jpg') }}" width="120px" height="120px" alt="" /></a>
        <h1>Hello, I am <strong>{{ Auth::getUser()->name }}</strong></h1>
        <h4><a href="{{ route('works.index') }}">Visit my works</a></h4>
    @else
        <h1>Please, <a href="{{ route('website.login') }}">log in</a> to publish new works.</h1>
    @endif
</header>