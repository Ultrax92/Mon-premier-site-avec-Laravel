@extends('layouts.app')

@section('title', 'Détails de l\'article ' . $id)

@section('content')
    <h2>Article portant l’identifiant {{ $id }}</h2>
    
    <p>Ici se trouvera bientôt le contenu de l'article.</p>
@endsection