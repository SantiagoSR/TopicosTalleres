<!doctype html>
<html>
<head>
<meta charset="utf8">
<title>@yield('title', 'Home Page')</title>
<!--Styles-->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">

</head>

<body>

<div id="app">

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

<div class="container">

<a class="navbar-brand" href="{{ route('home.index') }}">

Taller

</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

<!-- Left Side Of Navbar -->

<ul class="navbar-nav mr-auto">

<!-- Future Left Side Links -->
<!--
<li class="nav-item">
    <a class="nav-link" href="{{ route('plane.create')}}">@lang('plane.CreatePlane')</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('plane.list')}}">@lang('plane.ListPlane')</a>
</li>


<li class="nav-item">
    <a class="nav-link" href="{{ route('plane.statistics')}}">@lang('plane.Statistics')</a>
</li>
-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('product.create')}}">Product create</a>
</li>


</ul>

<!-- Right Side Of Navbar -->

<ul class="navbar-nav ml-auto">

<!-- Future authentication Links -->

</ul>

</div>

</div>

</nav>

<main class="py-4">

@yield('content')

</main>

</div>

</body>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>