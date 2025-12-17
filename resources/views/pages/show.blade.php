@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <div style="max-width: 900px; margin: 40px auto; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); display: flex; gap: 40px; align-items: center;">
        
        <div style="flex: 0 0 300px;">
            <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px;">
        </div>

        <div style="flex: 1;">
            <h1 style="margin-top: 0; font-size: 2.5rem; margin-bottom: 20px;">{{ $animal->name }}</h1>
            
            <div style="font-size: 1.1rem; margin-bottom: 20px; color: #444;">
                <p><strong>Espèce :</strong> {{ $animal->species }}</p>
                <p><strong>Âge :</strong> {{ $animal->age }} ans</p>
            </div>

            <div style="line-height: 1.6; color: #666; margin-bottom: 30px;">
                {{ $animal->description }}
            </div>

            <a href="{{ route('home') }}" style="display: inline-block; text-decoration: none; color: #52c9ff; font-weight: 600;">
                &larr; Retour à l'accueil
            </a>
        </div>

    </div>
@endsection