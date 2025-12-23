@extends('layouts.app')

@section('title', 'UEMA Joseph de Maistre')

@section('meta_description', 'UEMA Joseph de Maistre - Unité d\'Enseignement Maternelle Autisme, dispositif d\'inclusion scolaire qui accueille 7 enfants de 3 à 6 ans avec TSA.')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/dispositifs') }}">Nos Dispositifs</a></li>
                <li class="breadcrumb-item active">UEMA</li>
            </ol>
        </div>
    </nav>
    
    <!-- Section Hero -->
    <section class="hero-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 mb-4">UEMA Joseph de Maistre</h1>
                    <p class="lead">Unité d'Enseignement Maternelle Autisme</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Missions -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <!-- Les missions -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">LES MISSIONS</h2>
                        <div class="content-text">
                            <p>L'UEMA est un dispositif d'inclusion scolaire qui a pour mission la mise en place, au sein d'une école maternelle, d'une classe spécifique et d'un cadre sécurisant pour des enfants avec TSA de 3 à 6 ans.</p>
                            
                            <p>L'UEMA propose des temps individuels et collectifs de prise en charge autour :</p>
                            <ul class="values-list">
                                <li>D'un parcours de scolarisation s'inscrivant dans le cadre des programmes du ministère de l'éducation nationale et du socle commun de connaissances, de compétences et de culture ;</li>
                                <li>D'interventions éducatives et thérapeutiques précoces, en lien avec le projet personnalisé de scolarisation.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Les bénéficiaires -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">LES BÉNÉFICIAIRES</h2>
                        <div class="content-text">
                            <ul class="values-list">
                                <li>La classe accueille 7 enfants de 3 à 6 ans avec TSA, adressés par la MDPH</li>
                                <li>Un accueil à temps plein sur la même durée que l'ensemble des élèves de maternelle</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Un processus balisé -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">UN PROCESSUS BALISÉ</h2>
                        <div class="content-text">
                            <ul class="values-list">
                                <li>Des enfants adressés par la MDPH</li>
                                <li>Validation de l'admission UEMA par la DG de l'association après passage en commission réunissant autour de la DG, le médecin psychiatre, la psychologue et l'enseignant</li>
                                <li>Rencontre de parents et de l'enfant par la cheffe de service et l'enseignant</li>
                                <li>Période d'observation de 6 semaines : Réalisation de bilans éducatif, fonctionnel, orthophonie, psychomoteur, …</li>
                                <li>Définition du projet personnalisé de scolarisation</li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="{{ url('/dispositifs') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Retour aux dispositifs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Fonctionnement -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">Le fonctionnement de l'UEMA</h2>
                    
                    <!-- Des locaux adaptés -->
                    <div class="content-block mb-5">
                        <h3 class="h4 mb-4 text-primary">Des locaux adaptés</h3>
                        <div class="content-text">
                            <p>L'UEMA dispose de deux salles au sein de l'école : une salle de classe et une deuxième salle destinée aux interventions individuelles, principalement paramédicales.</p>
                            
                            <p>La salle de classe est organisée pour permettre des temps d'activité communs et individuels. Des cloisonnements sont prévus pour garantir de la fluidité entre les différentes séquences de la journée.</p>
                            
                            <p>La seconde salle, dédiée aux actions individuelles, est occupée selon un planning préétabli.</p>
                            
                            <p>L'UEMA étant une classe de l'école à part entière, les élèves qu'elle accueille ont accès à l'ensemble des locaux collectifs au même titre que tout autre élève de l'établissement scolaire.</p>
                        </div>
                    </div>

                    <!-- Une organisation précise -->
                    <div class="content-block mb-5">
                        <h3 class="h4 mb-4 text-primary">Une organisation précise des interventions auprès des élèves</h3>
                        <div class="content-text">
                            <p><strong>Intervention conjointe enseignant et équipe médicosociale :</strong></p>
                            <ul class="values-list">
                                <li>Sur les temps de classe (24 heures par semaine)</li>
                                <li>Sur les temps de récréation.</li>
                            </ul>
                            
                            <p><strong>Intervention de l'équipe médicosociale seule</strong></p>
                            <ul class="values-list">
                                <li>Sur les temps de cantine (considérés comme temps éducatifs pour enfants avec TSA)</li>
                                <li>Sur les activités péri-éducatives</li>
                                <li>En guidance parentale à domicile,</li>
                                <li>Sur les temps périscolaires</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Un partenariat solide -->
                    <div class="content-block mb-5">
                        <h3 class="h4 mb-4 text-primary">UN PARTENARIAT SOLIDE</h3>
                        <div class="content-text">
                            <p><strong>Les partenaires de l'association BENJAMIN dans le cadre de l'UEMA :</strong></p>
                            <p>ARS – Education nationale – Ville de Paris – MDPH</p>
                            
                            <p>La présence dans une école maternelle ordinaire permet aux enfants avec TSA d'être immergés dans un environnement scolaire classique et de faciliter l'inclusion scolaire dès le plus jeune âge</p>
                            
                            <p>La Ville de Paris facilite l'organisation périscolaire au profit des enfants.</p>
                        </div>
                    </div>

                    <!-- Équipe pluridisciplinaire -->
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <img src="{{ asset('media/images/partners/education-nationale.jpg') }}" alt="Équipe pluridisciplinaire UEMA" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-primary mb-3">Une équipe pluridisciplinaire dédiée</h4>
                            <p>L'UEMA s'appuie sur une collaboration étroite entre :</p>
                            <ul class="values-list">
                                <li>1 Enseignant (Éducation Nationale)</li>
                                <li>1 Professionnel paramédical (Association Benjamin)</li>
                                <li>3 Professionnels socioéducatifs (Association Benjamin)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Retour vers les autres pages -->
                    <div class="text-center mt-5">
                        <a href="{{ url('/dispositifs/ueea') }}" class="btn btn-primary me-3">UEEA Cesbron</a>
                        <a href="{{ url('/dispositifs/emasco') }}" class="btn btn-primary me-3">EMASCO PARIS-EST</a>
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Admission -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5" style="color: #ec6726;">Modalités d'admission</h2>
                    
                    <div class="admission-process">
                        <div class="step">
                            <div class="step-number" style="background-color: #ec6726; color: white;">1</div>
                            <div class="step-content">
                                <h4 style="color: #ec6726;">Notification MDPH</h4>
                                <p>L'admission en UEMA nécessite une notification d'orientation de la Maison Départementale des Personnes Handicapées (MDPH).</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number" style="background-color: #ec6726; color: white;">2</div>
                            <div class="step-content">
                                <h4 style="color: #ec6726;">Commission d'admission</h4>
                                <p>Les dossiers sont étudiés par une commission associant l'Éducation nationale et Maison Benjamin, qui évalue l'adéquation entre les besoins de l'enfant et le dispositif.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number" style="background-color: #ec6726; color: white;">3</div>
                            <div class="step-content">
                                <h4 style="color: #ec6726;">Rencontres préalables</h4>
                                <p>Plusieurs rencontres sont organisées avec la famille et l'enfant pour présenter le dispositif et évaluer les besoins spécifiques de l'élève.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number" style="background-color: #ec6726; color: white;">4</div>
                            <div class="step-content">
                                <h4 style="color: #ec6726;">Période d'adaptation</h4>
                                <p>Une période d'adaptation progressive est mise en place pour faciliter l'intégration de l'enfant dans le dispositif.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number" style="background-color: #ec6726; color: white;">5</div>
                            <div class="step-content">
                                <h4 style="color: #ec6726;">Élaboration du projet personnalisé</h4>
                                <p>Un projet personnalisé de scolarisation (PPS) est élaboré en collaboration avec la famille, définissant les objectifs pédagogiques, éducatifs et thérapeutiques.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-5">
                        <p class="mb-4">Pour toute information complémentaire ou pour prendre rendez-vous :</p>
                        <div class="contact-info-box" style="border: 2px solid #ec6726; border-radius: 10px; padding: 20px;">
                            <p><i class="fas fa-phone me-2" style="color: #ec6726;"></i> 01 XX XX XX XX</p>
                            <p><i class="fas fa-envelope me-2" style="color: #ec6726;"></i> uema@maisonbenjamin.org</p>
                            <p><i class="fas fa-map-marker-alt me-2" style="color: #ec6726;"></i> [Adresse de l'école maternelle accueillant l'UEMA]</p>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-lg mt-3" style="background-color: #ec6726; color: white;">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section class="section" style="background-color: rgba(236, 103, 38, 0.1);">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #ec6726;">Témoignages</h2>
                    <p>Découvrez les témoignages de parents dont les enfants sont accompagnés par l'UEMA.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="testimonial-avatar me-3">
                                    <i class="fas fa-user-circle fa-3x" style="color: #ec6726;"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0">Parent d'un enfant de 5 ans</h4>
                                </div>
                            </div>
                            <p class="card-text fst-italic">"Depuis que notre fils a intégré l'UEMA, nous avons observé des progrès remarquables, notamment dans sa communication. L'équipe est à l'écoute et nous accompagne au quotidien dans la compréhension de ses besoins. Pour la première fois, nous envisageons l'avenir avec sérénité."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="testimonial-avatar me-3">
                                    <i class="fas fa-user-circle fa-3x" style="color: #ec6726;"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0">Parents d'une enfant de 4 ans</h4>
                                </div>
                            </div>
                            <p class="card-text fst-italic">"Notre fille a pu intégrer l'UEMA à l'âge de 3 ans. La prise en charge précoce et intensive a été déterminante dans son évolution. Aujourd'hui, elle participe à plusieurs activités avec les autres enfants de l'école. La collaboration entre les professionnels et notre famille est précieuse."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .step {
        display: flex;
        margin-bottom: 30px;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 20px;
        flex-shrink: 0;
    }
    
    .step-content {
        flex-grow: 1;
    }
    
    .admission-process {
        position: relative;
    }
    
    .admission-process:before {
        content: '';
        position: absolute;
        left: 20px;
        top: 40px;
        bottom: 0;
        width: 2px;
        background-color: rgba(236, 103, 38, 0.3);
        transform: translateX(-50%);
        z-index: -1;
    }
    </style>
@endsection
