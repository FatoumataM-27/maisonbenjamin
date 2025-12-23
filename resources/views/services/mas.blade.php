@extends('layouts.app')

@section('title', 'MAS - Maison d\'Accueil Spécialisée')

@section('meta_description', 'Découvrez la Maison d\'Accueil Spécialisée de Maison Benjamin : hébergement adapté, soins médicaux, activités éducatives et accompagnement social pour adultes en situation de handicap.')

@section('content')
    <!-- Section Hero MAS -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">MAS</h1>
                    <p class="lead">Maison d'Accueil Spécialisée</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Public accueilli -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Public accueilli</h2>
                    <p class="lead">Adultes en situation de handicap nécessitant un accompagnement et des soins permanents en accueil de jour ou en hébergement.</p>
                    <p>Nous offrons un cadre sécurisé et adapté pour répondre aux besoins spécifiques de chaque personne, en favorisant son épanouissement et son bien-être au quotidien.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Modes d'accueil</h3>
                            <ul>
                                <li>Accueil de jour</li>
                                <li>Hébergement permanent</li>
                                <li>Séjours temporaires</li>
                                <li>Accompagnement personnalisé</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services proposés -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Services proposés</h2>
                    <p>Un accompagnement global et adapté à chaque besoin</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-home fa-2x text-primary me-3"></i>
                                <h4 class="card-title mb-0">Hébergement en structure adaptée</h4>
                            </div>
                            <p class="card-text">Chambres individuelles ou collectives aménagées pour garantir confort, sécurité et intimité dans un environnement adapté au handicap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-heartbeat fa-2x text-primary me-3"></i>
                                <h4 class="card-title mb-0">Soins médicaux et paramédicaux</h4>
                            </div>
                            <p class="card-text">Suivi médical régulier, soins infirmiers, kinésithérapie, orthophonie et autres prises en charge paramédicales adaptées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-graduation-cap fa-2x text-primary me-3"></i>
                                <h4 class="card-title mb-0">Activités éducatives et occupationnelles</h4>
                            </div>
                            <p class="card-text">Ateliers thérapeutiques, activités cognitives, loisirs créatifs et sorties culturelles pour maintenir les capacités et favoriser l'épanouissement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-users fa-2x text-primary me-3"></i>
                                <h4 class="card-title mb-0">Accompagnement social</h4>
                            </div>
                            <p class="card-text">Soutien dans les démarches administratives, maintien des liens familiaux, aide à l'autonomie et intégration sociale.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Environnement -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Environnement</h2>
                    <p class="lead">Cadre de vie sécurisé et chaleureux, favorisant le bien-être et l'épanouissement de chaque accueilli.</p>
                    <p>Nos locaux sont conçus pour offrir un environnement de vie stimulant, sécurisant et adapté aux besoins spécifiques des adultes en situation de handicap.</p>
                    <ul class="mt-3">
                        <li>Espaces de vie communs conviviaux</li>
                        <li>Jardins et terrasses accessibles</li>
                        <li>Salles d'activités polyvalentes</li>
                        <li>Équipements adaptés PMR</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Notre approche</h3>
                            <p>Nous privilégions une approche bienveillante et respectueuse de la personne, en favorisant :</p>
                            <ul>
                                <li>Le maintien de l'autonomie</li>
                                <li>La dignité et le respect</li>
                                <li>L'écoute et la communication</li>
                                <li>L'inclusion et la participation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projet personnalisé -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Projet personnalisé</h2>
                    <p class="lead">Chaque adulte bénéficie d'un projet d'accompagnement individualisé, élaboré en concertation avec lui, sa famille et l'équipe pluridisciplinaire.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Évaluation personnalisée</h4>
                            <p class="card-text">Bilan complet des besoins, capacités et aspirations de chaque personne pour définir des objectifs réalistes et adaptés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Suivi régulier</h4>
                            <p class="card-text">Réunions périodiques pour ajuster le projet d'accompagnement et garantir l'évolution positive de chaque résident.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Coordination des soins</h4>
                            <p class="card-text">Harmonisation des interventions médicales, paramédicales et éducatives pour une prise en charge cohérente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Partenariat familial</h4>
                            <p class="card-text">Collaboration étroite avec les familles pour assurer la continuité de l'accompagnement et maintenir les liens affectifs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Conclusion -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h2 class="mb-4">Un accompagnement global</h2>
                            <p class="lead">La MAS offre un accompagnement global dans le respect de la dignité et de l'autonomie de chaque personne.</p>
                            <p>Nous mettons tout en œuvre pour créer un environnement de vie où chaque adulte peut s'épanouir, maintenir ses acquis et développer de nouvelles compétences dans une atmosphère sécurisante et stimulante.</p>
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
                    <p class="mb-4">Pour toute information sur la MAS ou pour une demande d'admission</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                        <a href="https://www.helloasso.com/associations/association-benjamin/adhesions/devenez-membre-de-l-association" target="_blank" class="btn btn-outline-primary btn-lg">Devenir membre</a>
                        <a href="https://www.helloasso.com/associations/association-benjamin/formulaires/1" target="_blank" class="btn btn-success btn-lg">Faire un don</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
