@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur le site de {{ $name }}</h2>

<p>Voici nos derniers articles :</p>
<br>

<div class="articles-list">

    @foreach ($articles as $article)

    @if ($loop->last)
    @break
    @endif

    <x-article
        :title="$article['title']"
        :description="Str::limit($article['description'], 30)" />

    @endforeach

</div>
@endsection