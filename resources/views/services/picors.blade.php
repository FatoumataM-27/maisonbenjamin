@extends('layouts.app')

@section('title', 'PICORS')

@section('meta_description', 'Découvrez le PICORS : Pôle de Coordination et d\'Organisation des Réponses de Secteur pour coordonner les dispositifs spécialisés.')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/services') }}">Nos Services</a></li>
                <li class="breadcrumb-item active">PICORS</li>
            </ol>
        </div>
    </nav>
    
    <!-- Section Hero PICORS -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">PICORS</h1>
                    <p class="lead">Pôle de Coordination et d'Organisation des Réponses de Secteur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Présentation du pôle</h2>
                    <p>Le PICORS (Pôle de Coordination et d'Organisation des Réponses de Secteur) regroupe trois dispositifs spécialisés pour l'inclusion scolaire des enfants en situation de handicap.</p>
                    <p>Notre rôle est d'organiser et d'harmoniser les réponses apportées aux familles et aux établissements scolaires, en lien étroit avec l'Éducation nationale et la MDPH.</p>
                    <p>Nous garantissons la cohérence des parcours d'inclusion et assurons le suivi des enfants tout au long de leur scolarité.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Coordination avec l'Éducation nationale</h3>
                    <p>Le PICORS travaille en étroite collaboration avec l'Éducation nationale pour :</p>
                    <ul>
                        <li>Identifier les besoins des élèves en situation de handicap</li>
                        <li>Proposer les dispositifs les plus adaptés</li>
                        <li>Assurer le suivi des parcours scolaires</li>
                        <li>Former les équipes enseignantes</li>
                        <li>Faciliter la communication entre tous les partenaires</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Dispositifs -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos dispositifs spécialisés</h2>
                    <p>Trois dispositifs pour répondre aux différents besoins d'inclusion scolaire</p>
                </div>
            </div>
            <div class="row">
                <!-- UEEA -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div style="position: relative;">
                            <div style="position: absolute; top: -10px; left: -10px; width: 80px; height: 80px; background-color: #85B12520; border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; z-index: 1;"></div>
                            <img src="{{ asset('images/dispositifs/images/UEEA-3.png') }}" class="card-img-top" alt="Unité d'Enseignement Élémentaire Autisme">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3" style="color: #85B125;">UEEA</h3>
                            <h4 class="h6 text-muted mb-3">Unité d'Enseignement Élémentaire Autisme</h4>
                            <p class="card-text">Dispositif médico-social implanté au sein d'une école élémentaire ordinaire, accueillant 10 enfants âgés de 6 à 11 ans présentant des troubles du spectre de l'autisme.</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check-circle me-2" style="color: #85B125;"></i> Scolarité adaptée</li>
                                <li><i class="fas fa-check-circle me-2" style="color: #85B125;"></i> Accompagnement médico-social</li>
                                <li><i class="fas fa-check-circle me-2" style="color: #85B125;"></i> Inclusion progressive</li>
                            </ul>
                            <a href="{{ url('/services/picors/ueea') }}" class="btn" style="background-color: #85B125; color: white;">Découvrir l'UEEA</a>
                        </div>
                    </div>
                </div>
                
                <!-- UEMA -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div style="position: relative;">
                            <div style="position: absolute; top: -10px; right: -10px; width: 80px; height: 80px; background-color: #ec672620; border-radius: 70% 30% 30% 70% / 30% 70% 30% 70%; z-index: 1;"></div>
                            <img src="{{ asset('images/dispositifs/images/UEMA.png') }}" class="card-img-top" alt="Unité d'Enseignement Maternelle Autisme">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3" style="color: #ec6726;">UEMA</h3>
                            <h4 class="h6 text-muted mb-3">Unité d'Enseignement Maternelle Autisme</h4>
                            <p class="card-text">Dispositif médico-social implanté au sein d'une école maternelle ordinaire, accueillant 7 enfants âgés de 3 à 6 ans présentant des troubles du spectre de l'autisme.</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check-circle me-2" style="color: #ec6726;"></i> Intervention précoce</li>
                                <li><i class="fas fa-check-circle me-2" style="color: #ec6726;"></i> Approche développementale</li>
                                <li><i class="fas fa-check-circle me-2" style="color: #ec6726;"></i> Scolarisation adaptée</li>
                            </ul>
                            <a href="{{ url('/services/picors/uema') }}" class="btn" style="background-color: #ec6726; color: white;">Découvrir l'UEMA</a>
                        </div>
                    </div>
                </div>
                
                <!-- EMASCO -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div style="position: relative;">
                            <div style="position: absolute; bottom: -10px; right: -10px; width: 80px; height: 80px; background-color: #96147820; border-radius: 30% 70% 30% 70% / 50% 50% 50% 50%; z-index: 1;"></div>
                            <img src="{{ asset('images/dispositifs/images/EMA-SCO.jpg') }}" class="card-img-top" alt="Équipe Mobile d'Appui à la Scolarisation">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3" style="color: #961478;">EMASCO</h3>
                            <h4 class="h6 text-muted mb-3">Équipe Mobile d'Appui à la Scolarisation</h4>
                            <p class="card-text">Équipe pluridisciplinaire intervenant auprès des établissements scolaires pour soutenir la scolarisation des élèves en situation de handicap.</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check-circle me-2" style="color: #961478;"></i> Conseil aux équipes éducatives</li>
                                <li><i class="fas fa-check-circle me-2" style="color: #961478;"></i> Sensibilisation et formation</li>
                                <li><i class="fas fa-check-circle me-2" style="color: #961478;"></i> Coordination et mise en réseau</li>
                            </ul>
                            <a href="{{ url('/services/picors/emasco') }}" class="btn" style="background-color: #961478; color: white;">Découvrir l'EMASCO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Fonctionnement -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Notre fonctionnement</h2>
                    <p>Une approche coordonnée pour une inclusion réussie</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Évaluation et orientation</h4>
                            <p class="card-text">Analyse des besoins de chaque enfant et proposition du dispositif le plus adapté à sa situation scolaire et familiale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Suivi personnalisé</h4>
                            <p class="card-text">Accompagnement régulier de l'enfant et de sa famille tout au long de son parcours scolaire avec des ajustements si nécessaire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Coordination des partenaires</h4>
                            <p class="card-text">Mise en réseau des différents intervenants (enseignants, thérapeutes, familles) pour une prise en charge cohérente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Formation et soutien</h4>
                            <p class="card-text">Appui aux équipes éducatives et formation des personnels pour développer leurs compétences en matière d'inclusion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Retour -->
    <section class="section">
        <div class="container">
            <div class="text-center">
                <a href="{{ url('/services') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>
                    Retour aux services
                </a>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nous contacter</h2>
                    <p class="mb-4">Pour toute information sur le PICORS ou sur nos dispositifs spécialisés</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
