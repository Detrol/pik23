@extends('layouts.app')

@section('title', '404 Sidan hittades inte | Puts i Karlstad')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold mb-4">404 - Sidan hittades inte</h1>
        <p class="mb-4">Tyvärr kunde vi inte hitta sidan du letade efter. Den kan ha flyttats eller tagits bort.</p>
        <a href="{{ url('/') }}" class="bg-primary text-white px-4 py-2 rounded">Gå tillbaka till startsidan</a>
    </div>
@endsection
