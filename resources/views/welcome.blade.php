@extends('layouts.app')

@section('title', 'Bienvenue')

@section('content')
<script>
    window.location.href = "{{ url('/home') }}";
</script>
<div class="container text-center py-5">
    <h1>Bienvenue sur le site de Maison Benjamin</h1>
    <p class="lead">Vous allez être redirigé vers la page d'accueil...</p>
    <p>Si vous n'êtes pas redirigé automatiquement, <a href="{{ url('/home') }}">cliquez ici</a>.</p>
</div>
@endsection
