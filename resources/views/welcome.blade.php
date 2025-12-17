@extends('layouts.app')

@section('content')
<style>
    .btn-add {
        display: inline-block;
        background-color: #52c9ff;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, background-color 0.2s;
        margin-bottom: 30px;
    }

    .btn-add:hover {
        background-color: #3aa8e0;
        transform: translateY(-2px);
    }
</style>

<div style="text-align: center; margin-bottom: 20px;">
    <h1>Nos animaux</h1>

    <a href="{{ route('animal.create') }}" class="btn-add">
        + Ajouter un animal
    </a>
</div>

<div class="animal-grid" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">

    @foreach($animals as $animal)
    <div class="animal-card" style="background: white; padding: 20px; border-radius: 15px; width: 250px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <a href="{{ route('animal.show', $animal->id) }}">
            <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
        </a>

        <h3 style="margin: 15px 0 5px;">{{ $animal->name }}</h3>

        <div style="font-size: 0.9em; color: #666; text-align: left;">
            <strong>Espèce :</strong> {{ $animal->species }}<br>
            <strong>Age :</strong> {{ $animal->age }} ans<br>
            <p style="margin-top: 5px;">{{ Str::limit($animal->description, 50) }}</p>
        </div>

        <div style="display: flex; justify-content: space-between; margin-top: 15px; font-size: 0.8em;">
            <a href="{{ route('animal.update', $animal->id) }}" style="color: #52c9ff; text-decoration: none; font-weight: bold;">Modifier</a>
            <a href="{{ route('animal.delete', $animal->id) }}" style="color: #ff6b6b; text-decoration: none;">Supprimer</a>
        </div>
    </div>
    @endforeach

</div>
@endsection