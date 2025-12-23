@extends('layouts.app')

@section('title', 'UEEA Cesbron')

@section('meta_description', 'UEEA Cesbron - Unité d\'Enseignement Élémentaire Autisme, classe cogérée avec l\'Éducation nationale, 10 enfants avec TSA scolarisés en école ordinaire élémentaire.')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/dispositifs') }}">Nos Dispositifs</a></li>
                <li class="breadcrumb-item active">UEEA</li>
            </ol>
        </div>
    </nav>
    
    <!-- Section Hero -->
    <section class="hero-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 mb-4">UEEA Cesbron</h1>
                    <p class="lead">Unité d'Enseignement Élémentaire Autisme</p>
                    <p>Classe cogérée avec l'Éducation nationale<br>10 enfants avec TSA scolarisés en école ordinaire élémentaire</p>
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
                            <p>L'UEEA est un dispositif d'inclusion scolaire qui a pour mission la mise en place, au sein d'une école maternelle, d'une classe spécifique et d'un cadre sécurisant pour des enfants avec TSA de 6 à 11 ans.</p>
                            
                            <p>L'UEEA propose des temps individuels et collectifs de prise en charge autour :</p>
                            <ul class="values-list">
                                <li>D'un parcours de scolarisation s'inscrivant dans le cadre des programmes du ministère de l'éducation nationale et du socle commun de connaissances, de compétences et de culture ;</li>
                                <li>D'interventions éducatives et thérapeutiques en lien avec le projet personnalisé de scolarisation.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Les bénéficiaires -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">LES BÉNÉFICIAIRES</h2>
                        <div class="content-text">
                            <ul class="values-list">
                                <li>La classe accueille 10 enfants de 6 à 11 ans avec TSA, adressés par la MDPH</li>
                                <li>Un accueil à temps plein (24 heures par semaine) sur la même durée que l'ensemble des élèves</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Un processus balisé -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">UN PROCESSUS BALISÉ</h2>
                        <div class="content-text">
                            <ul class="values-list">
                                <li>Orientation des enfants CADPH (MDPH)</li>
                                <li>Validation de l'admission UEEA par la DG de l'association après passage en commission réunissant autour de la DG, le médecin psychiatre, la psychologue et l'enseignant</li>
                                <li>Co-construction du projet personnalisé de scolarisation, avec les parties prenantes (équipe pluridisciplinaire, parents, autres intervenants)</li>
                                <li>Période d'observation de 6 semaines : Réalisation de bilans éducatif, fonctionnel, orthophonie, psychomoteur, …</li>
                                <li>Co-construction du projet personnalisé de scolarisation, avec les parties prenantes (équipe pluridisciplinaire, parents, autres intervenants)</li>
                                <li>Rencontre de l'enfants et des parents avec la cheffe de service, puis avec l'équipe scolaire et périscolaire</li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="{{ url('/dispositifs') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Retour aux dispositifs
                                </a>
                            </div>
                            </ul>
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
                    <h2 class="text-center mb-5">Le fonctionnement de l'UEEA</h2>
                    
                    <!-- Des locaux adaptés -->
                    <div class="content-block mb-5">
                        <h3 class="h4 mb-4 text-primary">Des locaux adaptés</h3>
                        <div class="content-text">
                            <p>L'UEEA dispose de deux salles au sein de l'école :</p>
                            
                            <p><strong>Une salle de classe</strong>, organisée autour d'environnements personnalisés d'enseignements et d'apprentissages</p>
                            <ul class="values-list">
                                <li>Espace « travaux dirigés » par l'enseignant</li>
                                <li>Espace « travaux semi-dirigés » au moyen de matériels avec un éducateur en soutien pour les guidances</li>
                                <li>Espace « pairs dirigés » entre élèves</li>
                                <li>Espace « travaux non dirigés » : par l'élève</li>
                            </ul>
                            
                            <p><strong>Une seconde salle</strong> dédiée aux actions individuelles, occupée selon un planning préétabli. Également utilisée comme salle de repos</p>
                            
                            <p>L'UEEA étant une classe de l'école à part entière, les élèves qu'elle accueille ont accès à l'ensemble des locaux collectifs au même titre que tout autre élève de l'école.</p>
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
                                <li>Sur les activités péri éducatives</li>
                                <li>En guidance parentale à domicile</li>
                                <li>Sur les temps périscolaires</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Un partenariat solide -->
                    <div class="content-block mb-5">
                        <h3 class="h4 mb-4 text-primary">UN PARTENARIAT SOLIDE</h3>
                        <div class="content-text">
                            <p><strong>Les partenaires dans le cadre de l'UEEA :</strong></p>
                            <p>ARS – Education nationale – Ville de Paris – MDPH</p>
                            
                            <p>La présence dans une école primaire ordinaire permet aux enfants avec TSA d'être immergés dans un environnement scolaire classique et de faciliter l'inclusion scolaire.</p>
                            
                            <p>La Ville de Paris facilite l'organisation périscolaire au profit des enfants.</p>
                        </div>
                    </div>

                    <!-- Équipe pluridisciplinaire -->
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <img src="{{ asset('media/images/partners/education-nationale.jpg') }}" alt="Équipe pluridisciplinaire UEEA" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-primary mb-3">Une équipe pluridisciplinaire dédiée</h4>
                            <p>L'UEEA s'appuie sur une collaboration étroite entre :</p>
                            <ul class="values-list">
                                <li>1 Enseignant (Éducation Nationale)</li>
                                <li>1 Professionnel paramédical (Association Benjamin)</li>
                                <li>3 Professionnels socioéducatifs (Association Benjamin)</li>
                                <li>1 AESH (Éducation Nationale)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Retour vers les autres pages -->
                    <div class="text-center mt-5">
                        <a href="{{ url('/dispositifs/uema') }}" class="btn btn-primary me-3">UEMA Joseph de Maistre</a>
                        <a href="{{ url('/dispositifs/emasco') }}" class="btn btn-primary me-3">EMASCO PARIS-EST</a>
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
