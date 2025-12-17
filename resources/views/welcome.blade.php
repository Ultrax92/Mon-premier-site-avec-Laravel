@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur le site de {{ $name }}</h2>

<p>Voici nos derniers articles :</p>
<br>

<div class="articles-list">
    @foreach ($articles as $article)
    @if ($loop->last) @break @endif

    <a href="{{ route('article.details', $article->id) }}" style="text-decoration: none; color: inherit;">
        <x-article
            :title="$article->title"
            :description="$article->description" />
    </a>

    @endforeach
</div>
@endsection