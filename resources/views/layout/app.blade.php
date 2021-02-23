<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel| @yield('title-content')</title>
    </head>
    <body>
        <!-- Nav tabs -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}"">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">ABOUT</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('contacts') }}">CONTACTS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('posts.index') }}">ARTICLES</a>
                </li>
            </ul>
            </div>
        </nav>
        <header>
            @yield('header-content')
        </header>
        <main>
            @yield('main-content')
        </main>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
