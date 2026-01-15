@extends('layouts.app')

@section('title', 'Galerie Vidéos')

@section('meta_description', 'Découvrez les vidéos des activités et moments forts de la Maison Benjamin.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Galerie Vidéos</h1>
                    <p class="lead">Découvrez les moments forts et les activités de la Maison Benjamin en images et en musique.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Vidéos -->
    <section class="section">
        <div class="container">
            <div class="row g-4">
                @foreach($videos as $video)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <div class="ratio ratio-16x9">
                                <video controls preload="metadata" class="rounded-top">
                                    <source src="{{ $video['url'] }}" type="video/mp4">
                                    Votre navigateur ne supporte pas la lecture de vidéos.
                                </video>
                            </div>
                            <div class="card-body p-4">
                                <h3 class="card-title h5 mb-2">{{ $video['title'] }}</h3>
                                <p class="card-text text-muted">{{ $video['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Envie d'en voir plus ?</h2>
                    <p class="mb-4">Suivez-nous sur nos réseaux sociaux pour rester informé de toutes nos actualités.</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
