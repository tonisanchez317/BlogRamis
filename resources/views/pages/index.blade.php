@extends('layout.master')

@section('content')

    <!-- One -->
    <section id="one">
        <header class="major">
            <h2>Ipsum lorem dolor aliquam ante commodo<br />
                magna sed accumsan arcu neque.</h2>
        </header>
        <p>Accumsan orci faucibus id eu lorem semper. Eu ac iaculis ac nunc nisi lorem vulputate lorem neque cubilia ac in adipiscing in curae lobortis tortor primis integer massa adipiscing id nisi accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque cubilia.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </section>

    <!-- Two -->
    <section id="two">
        <h2>Recent Work</h2>
        <div class="row">
            @forelse($works as $work)
                <article class="6u 12u$(xsmall) work-item">
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

    <!-- Three -->
    <section id="three">
        <h2>Get In Touch</h2>
        <p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum dolor.</p>
        <div class="row">
            <div class="8u 12u$(small)">
                <form method="post" action="#">
                    <div class="row uniform 50%">
                        <div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
                        <div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
                        <div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
                    </div>
                </form>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" /></li>
                </ul>
            </div>
            <div class="4u$ 12u$(small)">
                <ul class="labeled-icons">
                    <li>
                        <h3 class="icon fa-home"><span class="label">Address</span></h3>
                        1234 Somewhere Rd.<br />
                        Nashville, TN 00000<br />
                        United States
                    </li>
                    <li>
                        <h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
                        000-000-0000
                    </li>
                    <li>
                        <h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
                        <a href="#">hello@untitled.tld</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection