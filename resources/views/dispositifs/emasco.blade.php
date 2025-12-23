@extends('layouts.app')

@section('title', 'EMASCO - Équipe Mobile d\'Appui à la Scolarisation')

@section('meta_description', 'L\'Équipe Mobile d\'Appui à la Scolarisation (EMASCO) de Maison Benjamin accompagne les établissements scolaires pour favoriser l\'inclusion des élèves en situation de handicap.')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/dispositifs') }}">Nos Dispositifs</a></li>
                <li class="breadcrumb-item active">EMASCO</li>
            </ol>
        </div>
    </nav>
    
    <!-- Section Hero EMASCO -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4" style="color: #961478;">EMASCO</h1>
                    <p class="lead">Équipe Mobile d'Appui à la Scolarisation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4" style="color: #961478;">Présentation du dispositif</h2>
                    <p>L'Équipe Mobile d'Appui à la Scolarisation (EMASCO) est un dispositif médico-social créé dans le cadre de la stratégie nationale pour l'autisme et les troubles du neuro-développement, et étendu à tous les types de handicap.</p>
                    <p>Notre équipe pluridisciplinaire intervient auprès des établissements scolaires (écoles, collèges, lycées) et des professionnels de l'Éducation nationale pour :</p>
                    <ul>
                        <li>Soutenir la scolarisation des élèves en situation de handicap</li>
                        <li>Apporter une expertise et des conseils aux équipes éducatives</li>
                        <li>Sensibiliser la communauté scolaire aux différents types de handicap</li>
                        <li>Faciliter les liens entre l'école et le secteur médico-social</li>
                    </ul>
                    <p>L'EMASCO n'intervient pas directement auprès des élèves, mais agit en soutien des professionnels qui les accompagnent au quotidien.</p>
                </div>
                <div class="col-lg-6">
                    <div style="position: relative;">
                        <div style="position: absolute; top: -15px; left: -15px; width: 100px; height: 100px; background-color: #96147820; border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; z-index: -1;"></div>
                        <img src="{{ asset('images/dispositifs/EMA-SCO.jpg') }}" alt="Équipe Mobile d'Appui à la Scolarisation" class="img-fluid rounded-3 shadow">
                        <div style="position: absolute; bottom: -20px; right: -20px; width: 120px; height: 120px; background-color: #96147815; border-radius: 70% 30% 30% 70% / 60% 40% 60% 40%; z-index: -1;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Missions -->
    <section class="section" style="background-color: #f8f5fa;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #961478;">Nos missions</h2>
                    <p>L'EMASCO intervient à la demande des établissements scolaires pour répondre à des besoins précis liés à la scolarisation d'élèves en situation de handicap.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3" style="background-color: #961478; color: white;">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h3 class="card-title mb-3" style="color: #961478;">Conseil et appui aux équipes éducatives</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Observation en classe et analyse des situations complexes</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Conseils sur les adaptations pédagogiques et aménagements</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Aide à la compréhension des comportements et besoins spécifiques</li>
                                <li><i class="fas fa-check me-2" style="color: #961478;"></i> Soutien à l'élaboration des projets personnalisés (PPS, PAP)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3" style="background-color: #961478; color: white;">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3 class="card-title mb-3" style="color: #961478;">Sensibilisation et formation</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Actions de sensibilisation sur les différents types de handicap</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Formation aux adaptations pédagogiques spécifiques</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Information sur les ressources disponibles</li>
                                <li><i class="fas fa-check me-2" style="color: #961478;"></i> Partage d'outils et de méthodes adaptés</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3" style="background-color: #961478; color: white;">
                                <i class="fas fa-link"></i>
                            </div>
                            <h3 class="card-title mb-3" style="color: #961478;">Coordination et mise en réseau</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Facilitation des liens entre l'école et les structures médico-sociales</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Aide à l'orientation vers les ressources adaptées</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Participation aux équipes de suivi de scolarisation (ESS)</li>
                                <li><i class="fas fa-check me-2" style="color: #961478;"></i> Coordination avec les autres dispositifs d'inclusion</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3" style="background-color: #961478; color: white;">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h3 class="card-title mb-3" style="color: #961478;">Ressources et outils</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Création et diffusion d'outils pédagogiques adaptés</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Documentation sur les différents types de handicap</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #961478;"></i> Prêt de matériel spécifique</li>
                                <li><i class="fas fa-check me-2" style="color: #961478;"></i> Veille documentaire et partage de bonnes pratiques</li>
                            </ul>
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
                <a href="{{ url('/dispositifs') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>
                    Retour aux dispositifs
                </a>
            </div>
        </div>
    </section>

    <!-- Section Modalités d'intervention -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #961478;">Modalités d'intervention</h2>
                    <p>L'EMASCO intervient gratuitement, à la demande des établissements scolaires, selon un processus structuré.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="intervention-process">
                        <div class="process-step">
                            <div class="process-icon" style="color: #961478;">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="process-content">
                                <h3 style="color: #961478;">1. Demande d'intervention</h3>
                                <p>La demande est formulée par l'établissement scolaire (direction, enseignant, AESH, etc.) via un formulaire dédié. Elle doit préciser la nature des difficultés rencontrées et les actions déjà mises en place.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-icon" style="color: #961478;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="process-content">
                                <h3 style="color: #961478;">2. Premier contact</h3>
                                <p>Un membre de l'équipe EMASCO contacte l'établissement pour clarifier la demande, recueillir des informations complémentaires et planifier une première rencontre.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-icon" style="color: #961478;">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="process-content">
                                <h3 style="color: #961478;">3. Rencontre et évaluation</h3>
                                <p>Une rencontre est organisée avec l'équipe éducative pour analyser la situation, observer le contexte et définir ensemble les objectifs de l'intervention.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-icon" style="color: #961478;">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="process-content">
                                <h3 style="color: #961478;">4. Élaboration du plan d'action</h3>
                                <p>Un plan d'action personnalisé est élaboré en concertation avec l'équipe éducative, définissant les modalités d'intervention, les objectifs et le calendrier.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-icon" style="color: #961478;">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div class="process-content">
                                <h3 style="color: #961478;">5. Mise en œuvre</h3>
                                <p>L'EMASCO met en œuvre les actions définies : observations, conseils, formation, mise à disposition d'outils, etc.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-icon" style="color: #961478;">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="process-content">
                                <h3 style="color: #961478;">6. Suivi et évaluation</h3>
                                <p>Des points réguliers sont organisés pour évaluer l'efficacité des actions mises en place et les ajuster si nécessaire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="alert p-4" style="background-color: #f8f5fa; border-color: #961478;">
                        <h4 class="alert-heading mb-3" style="color: #961478;"><i class="fas fa-info-circle me-2"></i> Bon à savoir</h4>
                        <p class="mb-0">L'EMASCO n'intervient pas en situation d'urgence et ne se substitue pas aux dispositifs existants (RASED, services de soins, etc.). Notre action s'inscrit dans une démarche de prévention et d'accompagnement à moyen terme.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Notre équipe -->
    <section class="section" style="background-color: #f8f5fa;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #961478;">Notre équipe pluridisciplinaire</h2>
                    <p>L'EMASCO est composée de professionnels du secteur médico-social, formés aux différents types de handicap et aux enjeux de la scolarisation inclusive.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="team-card text-center">
                        <div class="team-icon mb-3">
                            <i class="fas fa-user-graduate fa-3x" style="color: #961478;"></i>
                        </div>
                        <h3 class="h4 mb-3" style="color: #961478;">Coordination</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">Enseignant spécialisé</li>
                            <li>Coordonnateur pédagogique</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-card text-center">
                        <div class="team-icon mb-3">
                            <i class="fas fa-users fa-3x" style="color: #961478;"></i>
                        </div>
                        <h3 class="h4 mb-3" style="color: #961478;">Professionnels éducatifs</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">Éducateurs spécialisés</li>
                            <li>Moniteurs-éducateurs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-card text-center">
                        <div class="team-icon mb-3">
                            <i class="fas fa-brain fa-3x" style="color: #961478;"></i>
                        </div>
                        <h3 class="h4 mb-3" style="color: #961478;">Professionnels paramédicaux</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">Psychologue</li>
                            <li class="mb-2">Orthophoniste</li>
                            <li>Psychomotricien</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="lead">Chaque intervention est assurée par une équipe adaptée aux besoins identifiés, mobilisant les compétences nécessaires pour répondre au mieux à la demande de l'établissement scolaire.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Ressources -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #961478;">Ressources et documentation</h2>
                    <p>Nous mettons à disposition des équipes éducatives diverses ressources pour faciliter l'inclusion scolaire des élèves en situation de handicap.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-white" style="background-color: #961478;">
                            <h3 class="h5 mb-0">Documents pédagogiques</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled resource-list">
                                <li><i class="fas fa-file-pdf me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Guide des adaptations pédagogiques</a></li>
                                <li><i class="fas fa-file-pdf me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Fiches pratiques par type de handicap</a></li>
                                <li><i class="fas fa-file-pdf me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Outils d'évaluation des besoins</a></li>
                                <li><i class="fas fa-file-pdf me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Modèles de supports adaptés</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-white" style="background-color: #961478;">
                            <h3 class="h5 mb-0">Outils et matériel</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled resource-list">
                                <li><i class="fas fa-tools me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Catalogue du matériel pédagogique adapté</a></li>
                                <li><i class="fas fa-tools me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Logiciels et applications recommandés</a></li>
                                <li><i class="fas fa-tools me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Aides techniques disponibles au prêt</a></li>
                                <li><i class="fas fa-tools me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Supports de communication alternative</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-white" style="background-color: #961478;">
                            <h3 class="h5 mb-0">Liens utiles</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled resource-list">
                                <li><i class="fas fa-external-link-alt me-2" style="color: #961478;"></i> <a href="https://www.education.gouv.fr/ecole-inclusive" target="_blank" style="color: #961478;">Ministère de l'Éducation Nationale - École inclusive</a></li>
                                <li><i class="fas fa-external-link-alt me-2" style="color: #961478;"></i> <a href="https://handicap.gouv.fr/" target="_blank" style="color: #961478;">Secrétariat d'État chargé des Personnes handicapées</a></li>
                                <li><i class="fas fa-external-link-alt me-2" style="color: #961478;"></i> <a href="https://www.cnsa.fr/" target="_blank" style="color: #961478;">Caisse Nationale de Solidarité pour l'Autonomie</a></li>
                                <li><i class="fas fa-external-link-alt me-2" style="color: #961478;"></i> <a href="https://cap-ecole-inclusive.eduscol.education.fr/" target="_blank" style="color: #961478;">Cap École Inclusive</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-white" style="background-color: #961478;">
                            <h3 class="h5 mb-0">Formations</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled resource-list">
                                <li><i class="fas fa-graduation-cap me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Catalogue des formations proposées</a></li>
                                <li><i class="fas fa-graduation-cap me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Modules d'auto-formation en ligne</a></li>
                                <li><i class="fas fa-graduation-cap me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Webinaires thématiques</a></li>
                                <li><i class="fas fa-graduation-cap me-2" style="color: #961478;"></i> <a href="#" style="color: #961478;">Ateliers pratiques</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section" style="background-color: #f8f5fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #961478;">Nous contacter</h2>
                    <p class="mb-5">Pour toute demande d'intervention ou d'information complémentaire, n'hésitez pas à nous contacter :</p>
                    
                    <div class="row mb-5">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="contact-item">
                                <div class="contact-icon mb-3">
                                    <i class="fas fa-envelope fa-2x" style="color: #961478;"></i>
                                </div>
                                <h3 class="h5 mb-2" style="color: #961478;">Email</h3>
                                <p>emasco@maisonbenjamin.org</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="contact-item">
                                <div class="contact-icon mb-3">
                                    <i class="fas fa-phone fa-2x" style="color: #961478;"></i>
                                </div>
                                <h3 class="h5 mb-2" style="color: #961478;">Téléphone</h3>
                                <p>01 XX XX XX XX</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item">
                                <div class="contact-icon mb-3">
                                    <i class="fas fa-map-marker-alt fa-2x" style="color: #961478;"></i>
                                </div>
                                <h3 class="h5 mb-2" style="color: #961478;">Adresse</h3>
                                <p>[Adresse de Maison Benjamin]</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ url('/contact') }}" class="btn btn-lg" style="background-color: #961478; color: white;">Formulaire de contact</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg ms-2" style="border-color: #961478; color: #961478;">Télécharger la fiche de demande d'intervention</a>
                </div>
            </div>
        </div>
    </section>
@endsection
