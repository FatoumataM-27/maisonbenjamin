@extends('layouts.app')

@section('title', 'Accueil')

@section('meta_description', 'Maison Benjamin - Association pour l\'accompagnement d\'enfants et jeunes adultes en situation de handicap mental et psychique.')

@section('content')
    <!-- Section Hero avec vidéo -->
    <section class="hero" id="accueil">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('media/videos/activites/kayak-modif.mp4') }}" type="video/mp4">
            </video>
            <div class="overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-12">
                    <img src="{{ asset('images/logo-white.png') }}" alt="Logo Maison Benjamin" class="img-fluid" style="max-height: 150px; width: auto;">
                </div>
            </div>
        </div>
    </section>

    <!-- Section présentation concise -->
    <section class="section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">Notre mission</h2>
                    <p class="lead mb-4">
                        Depuis plus de 30 ans, Maison Benjamin accompagne des enfants et jeunes adultes en situation de handicap mental, psychique et avec autisme. Notre association propose un parcours complet et adapté à chaque personne pour favoriser son épanouissement et son inclusion sociale.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos services -->
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Nos services</h2>
                    <p class="lead">Des accompagnements spécialisés pour répondre à chaque besoin</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-school fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">IME / IMPRO</h3>
                            <p class="card-text text-muted">Institut Médico-Éducatif et Médico-Professionnel pour un accompagnement éducatif et formatif.</p>
                            <a href="{{ url('/services/ime-impro') }}" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-home fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">SESSAD</h3>
                            <p class="card-text text-muted">Service d'Éducation Spéciale et de Soins à Domicile pour un soutien en milieu naturel.</p>
                            <a href="{{ url('/services/sessad') }}" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">PICORS</h3>
                            <p class="card-text text-muted">Pôle de coordination pour l'inclusion scolaire avec des dispositifs spécialisés.</p>
                            <a href="{{ url('/services/picors') }}" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-hospital fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">MAS</h3>
                            <p class="card-text text-muted">Maison d'Accueil Spécialisée pour adultes nécessitant un accompagnement et des soins permanents.</p>
                            <a href="{{ url('/services/mas') }}" class="btn btn-outline-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Activités -->
    <section class="section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Nos activités</h2>
                    <p class="lead mb-4">
                        Au-delà des accompagnements spécialisés, nous proposons de nombreuses activités éducatives, créatives, sportives et culturelles pour favoriser l'épanouissement et le développement de chaque jeune.
                    </p>
                    <a href="{{ route('activites.index') }}" class="btn btn-primary">Découvrir nos activités</a>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-palette fa-4x text-primary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nous soutenir -->
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Nous soutenir</h2>
                    <p class="lead mb-4">Votre engagement est essentiel pour poursuivre notre mission</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-user-plus fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Devenir membre</h3>
                            <p class="card-text text-muted">Rejoignez notre association et participez à nos projets.</p>
                            <a href="https://www.helloasso.com/associations/association-benjamin/adhesions/devenez-membre-de-l-association" target="_blank" class="btn btn-primary">Adhérer</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-heart fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Faire un don</h3>
                            <p class="card-text text-muted">Soutenez financièrement nos actions et nos projets.</p>
                            <a href="https://www.helloasso.com/associations/association-benjamin/formulaires/1" target="_blank" class="btn btn-primary">Donner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Partenaires -->
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title mb-4">Nos Partenaires</h2>
                    <p class="lead fw-normal">Ils nous font confiance</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/ars-idf.jpg') }}" alt="ARS Île-de-France" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/education-nationale.jpg') }}" alt="Éducation Nationale" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/fondation-rothschild.jpg') }}" alt="Fondation Rothschild" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/fsju.jpg') }}" alt="FSJU" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/jem.jpg') }}" alt="JEM" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/mdph.jpg') }}" alt="MDPH" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/region-idf.jpg') }}" alt="Région Île-de-France" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/ville-paris.jpg') }}" alt="Ville de Paris" class="img-fluid partner-logo">
                </div>
            </div>
        </div>
    </section>
@endsection
