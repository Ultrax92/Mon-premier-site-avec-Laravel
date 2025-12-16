<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page introuvable</title>
</head>

<body>

    <h1>Page non trouvée</h1>
    <p>Désolé, la page que vous cherchez n'existe pas.</p>

    <a href="{{ route('home') }}">Retour à l'accueil</a>

</body>

</html>