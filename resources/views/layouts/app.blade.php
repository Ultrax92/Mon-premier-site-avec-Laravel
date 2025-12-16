<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
</head>

<body>

    <nav>
        <a href="{{ route('home') }}">Accueil</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

</body>

</html>