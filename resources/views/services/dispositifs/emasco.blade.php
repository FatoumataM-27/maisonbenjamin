@extends('layouts.app')

@section('title', 'EMASCO PARIS-EST')

@section('meta_description', 'EMASCO PARIS-EST - Équipe Mobile d\'Appui à la Scolarisation, intervenant dans les 10e, 11e, 19e et 20e arrondissements de Paris.')

@section('content')
    <!-- Section Hero EMASCO -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-4">
                        <img src="{{ asset('images/dispositifs/images/EMA-SCO.jpg') }}" alt="EMASCO PARIS-EST" class="img-fluid" style="max-height: 100px;">
                    </div>
                    <h1 class="display-4 fw-bold mb-4">EMASCO PARIS-EST</h1>
                    <p class="lead">Équipe Mobile d'Appui à la Scolarisation</p>
                    <p>Intervenant dans les 10e, 11e, 19e et 20e arrondissements de Paris</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À quoi sert le dispositif -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">À quoi sert l'EMASCO</h2>
                    <p>L'Équipe Mobile d'Appui à la Scolarisation (EMASCO) est un dispositif médico-social créé dans le cadre de la stratégie nationale pour l'autisme et les troubles du neuro-développement, et étendu à tous les types de handicap.</p>
                    <p>Notre équipe pluridisciplinaire intervient auprès des établissements scolaires (écoles, collèges, lycées) et des professionnels de l'Éducation nationale pour soutenir la scolarisation des élèves en situation de handicap.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Pour qui</h3>
                    <ul>
                        <li>Élèves en situation de handicap scolarisés dans les écoles, collèges et lycées</li>
                        <li>Équipes enseignantes needing soutien et conseils</li>
                        <li>Établissements scolaires des 10e, 11e, 19e et 20e arrondissements</li>
                    </ul>
                    
                    <h3 class="mb-3 mt-4">Spécificité</h3>
                    <p>L'EMASCO n'intervient pas directement auprès des élèves, mais agit en soutien des professionnels qui les accompagnent au quotidien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Missions -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos missions</h2>
                    <p>Un soutien complet aux équipes éducatives</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Soutien à la scolarisation</h4>
                            <p class="card-text">Aider les équipes enseignantes à adapter leurs pratiques et à mettre en place des aménagements pédagogiques pour les élèves en situation de handicap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Expertise et conseils</h4>
                            <p class="card-text">Apporter une expertise spécialisée et des conseils aux équipes éducatives sur la prise en charge des différents types de handicap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Sensibilisation</h4>
                            <p class="card-text">Sensibiliser la communauté scolaire aux différents types de handicap et aux bonnes pratiques d'inclusion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Lien école-secteur médico-social</h4>
                            <p class="card-text">Faciliter les liens entre l'école et le secteur médico-social pour assurer une prise en charge cohérente des élèves.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Exemples concrets -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Exemples d'interventions</h2>
                    <p>Des actions concrètes au service des équipes éducatives</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Analyse de situation</h4>
                            <p class="card-text">Observation en classe, analyse des difficultés rencontrées et proposition de stratégies adaptées à la situation spécifique de l'élève.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Formation des équipes</h4>
                            <p class="card-text">Organisation de temps de formation sur des thématiques spécifiques : gestion des comportements, adaptations pédagogiques, communication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Co-intervention</h4>
                            <p class="card-text">Présence en classe aux côtés de l'enseignant pour tester des stratégies et modéliser des approches adaptées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Médiation</h4>
                            <p class="card-text">Facilitation de la communication entre l'école, les familles et les différents partenaires impliqués dans le parcours de l'élève.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nous contacter</h2>
                    <p class="mb-4">Pour toute information sur l'EMASCO PARIS-EST ou pour solliciter notre intervention</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
