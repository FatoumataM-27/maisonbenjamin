@extends('layouts.app')

@section('title', 'Nos Dispositifs - Maison Benjamin')

@section('meta_description', 'Découvrez les dispositifs innovants de Maison Benjamin : UEEA, UEMA et EMASCO, dédiés à l\'accompagnement et l\'inclusion des enfants et adolescents avec autisme et troubles du développement.')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item active">Nos Dispositifs</li>
            </ol>
        </div>
    </nav>
    
    <!-- Section Hero Dispositifs -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Nos Dispositifs</h1>
                    <p class="lead">Des solutions innovantes pour favoriser l'inclusion et l'accompagnement des enfants et adolescents en situation de handicap</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Introduction -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Une approche globale de l'inclusion</h2>
                    <p>Maison Benjamin développe et gère plusieurs dispositifs innovants, en partenariat avec l'Éducation nationale, pour répondre aux besoins spécifiques des enfants et adolescents avec autisme et autres troubles du développement.</p>
                    <p>Ces dispositifs s'inscrivent dans une démarche d'école inclusive et visent à favoriser la scolarisation en milieu ordinaire, tout en proposant un accompagnement médico-social adapté aux besoins de chaque enfant.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Dispositifs -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <!-- UEEA -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div style="position: relative;">
                            <div style="position: absolute; top: -10px; left: -10px; width: 80px; height: 80px; background-color: #85B12520; border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; z-index: 1;"></div>
                            <img src="{{ asset('media/images/dispositifs/ueea.jpg') }}" class="card-img-top" alt="Unité d'Enseignement Élémentaire Autisme">
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
                            <a href="{{ url('/dispositifs/ueea') }}" class="btn btn-ueea">Découvrir l'UEEA</a>
                        </div>
                    </div>
                </div>
                
                <!-- UEMA -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div style="position: relative;">
                            <div style="position: absolute; top: -10px; right: -10px; width: 80px; height: 80px; background-color: #ec672620; border-radius: 70% 30% 30% 70% / 30% 70% 30% 70%; z-index: 1;"></div>
                            <img src="{{ asset('media/images/dispositifs/uema.jpg') }}" class="card-img-top" alt="Unité d'Enseignement Maternelle Autisme">
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
                            <a href="{{ url('/dispositifs/uema') }}" class="btn btn-uema">Découvrir l'UEMA</a>
                        </div>
                    </div>
                </div>
                
                <!-- EMASCO -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div style="position: relative;">
                            <div style="position: absolute; bottom: -10px; right: -10px; width: 80px; height: 80px; background-color: #96147820; border-radius: 30% 70% 30% 70% / 50% 50% 50% 50%; z-index: 1;"></div>
                            <img src="{{ asset('media/images/dispositifs/EMA-SCO.jpg') }}" class="card-img-top" alt="Équipe Mobile d'Appui à la Scolarisation">
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
                            <a href="{{ url('/dispositifs/emasco') }}" class="btn btn-emasco">Découvrir l'EMASCO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tableau comparatif -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Tableau comparatif des dispositifs</h2>
                    <p>Ce tableau vous permet de comparer rapidement les caractéristiques des différents dispositifs proposés par Maison Benjamin.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: #f8f9fa;">
                                    <th scope="col">Caractéristiques</th>
                                    <th scope="col" style="background-color: #f5f9f0; color: #85B125; border-bottom: 2px solid #85B125;">UEEA</th>
                                    <th scope="col" style="background-color: #fdf6f2; color: #ec6726; border-bottom: 2px solid #ec6726;">UEMA</th>
                                    <th scope="col" style="background-color: #f8f5fa; color: #961478; border-bottom: 2px solid #961478;">EMASCO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Public accueilli</th>
                                    <td>Enfants de 6 à 11 ans avec TSA</td>
                                    <td>Enfants de 3 à 6 ans avec TSA</td>
                                    <td>Établissements scolaires accueillant des élèves en situation de handicap</td>
                                </tr>
                                <tr>
                                    <th scope="row">Capacité d'accueil</th>
                                    <td>10 enfants</td>
                                    <td>7 enfants</td>
                                    <td>Non limité (interventions ponctuelles)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lieu d'implantation</th>
                                    <td>École élémentaire ordinaire</td>
                                    <td>École maternelle ordinaire</td>
                                    <td>Intervention dans tous types d'établissements scolaires</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type d'accompagnement</th>
                                    <td>Scolarisation adaptée et accompagnement médico-social</td>
                                    <td>Intervention précoce et scolarisation adaptée</td>
                                    <td>Conseil, formation et soutien aux équipes éducatives</td>
                                </tr>
                                <tr>
                                    <th scope="row">Objectif principal</th>
                                    <td>Acquisition des compétences scolaires et inclusion progressive</td>
                                    <td>Développement précoce et acquisition des prérequis scolaires</td>
                                    <td>Soutien à la scolarisation inclusive</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Partenaires -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos partenaires</h2>
                    <p>Ces dispositifs sont mis en place grâce à des partenariats étroits avec différentes institutions.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4 text-center">
                    <div class="partner-card p-4">
                        <img src="{{ asset('media/images/partners/education-nationale.jpg') }}" alt="Éducation Nationale" class="img-fluid mb-3" style="max-height: 80px;">
                        <h3 class="h5">Éducation Nationale</h3>
                        <p>Partenaire principal pour l'implantation des dispositifs en milieu scolaire ordinaire.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <div class="partner-card p-4">
                        <img src="{{ asset('media/images/partners/ars-idf.jpg') }}" alt="Agence Régionale de Santé" class="img-fluid mb-3" style="max-height: 80px;">
                        <h3 class="h5">Agence Régionale de Santé</h3>
                        <p>Financement et pilotage des dispositifs médico-sociaux.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <div class="partner-card p-4">
                        <img src="{{ asset('media/images/partners/mdph.jpg') }}" alt="MDPH" class="img-fluid mb-3" style="max-height: 80px;">
                        <h3 class="h5">MDPH</h3>
                        <p>Orientation des enfants vers les dispositifs adaptés à leurs besoins.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Vous souhaitez en savoir plus ?</h2>
                    <p class="mb-5">N'hésitez pas à nous contacter pour obtenir des informations complémentaires sur nos dispositifs ou pour prendre rendez-vous.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg">Contactez-nous</a>
                        <a href="{{ url('/dispositifs/ueea') }}" class="btn btn-outline-secondary btn-lg" style="border-color: #85B125; color: #85B125;">UEEA</a>
                        <a href="{{ url('/dispositifs/uema') }}" class="btn btn-outline-secondary btn-lg" style="border-color: #ec6726; color: #ec6726;">UEMA</a>
                        <a href="{{ url('/dispositifs/emasco') }}" class="btn btn-outline-secondary btn-lg" style="border-color: #961478; color: #961478;">EMASCO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
