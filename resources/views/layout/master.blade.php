<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Blog Ramis</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{ asset('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/css/ie8.css') }}" /><![endif]-->
</head>
<body id="top">

<!-- Header -->
@include('layout.partials.header')

<!-- Main -->
<div id="main">

    @yield('content')

</div>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
        <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.poptrox.min.js') }}"></script>
<script src="{{ asset('assets/js/skel.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/respond.min.js') }}"></script><![endif]-->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>