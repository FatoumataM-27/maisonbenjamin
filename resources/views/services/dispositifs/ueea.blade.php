@extends('layouts.app')

@section('title', 'UEEA Cesbron')

@section('meta_description', 'UEEA Cesbron - Unité d\'Enseignement Élémentaire Autisme, classe cogérée avec l\'Éducation nationale, 10 enfants avec TSA scolarisés en école ordinaire élémentaire.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-4">
                        <img src="{{ asset('images/dispositifs/images/UEEA-3.png') }}" alt="UEEA Cesbron" class="img-fluid" style="max-height: 100px;">
                    </div>
                    <h1 class="display-4 fw-bold mb-4">UEEA Cesbron</h1>
                    <p class="lead">Unité d'Enseignement Élémentaire Autisme</p>
                    <p>Classe cogérée avec l'Éducation nationale<br>10 enfants avec TSA scolarisés en école ordinaire élémentaire</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À quoi sert le dispositif -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">À quoi sert l'UEEA</h2>
                    <p>L'UEEA est un dispositif d'inclusion scolaire qui a pour mission la mise en place, au sein d'une école élémentaire, d'une classe spécifique et d'un cadre sécurisant pour des enfants avec TSA de 6 à 11 ans.</p>
                    <p>L'UEEA propose des temps individuels et collectifs de prise en charge autour d'un parcours de scolarisation s'inscrivant dans le cadre des programmes du ministère de l'éducation nationale et du socle commun de connaissances, de compétences et de culture.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Pour qui</h3>
                    <ul>
                        <li>Enfants de 6 à 11 ans avec troubles du spectre autistique</li>
                        <li>Adressés par la MDPH</li>
                        <li>Capacité d'accueil : 10 enfants</li>
                        <li>Accueil à temps plein (24 heures par semaine)</li>
                    </ul>
                    
                    <h3 class="mb-3 mt-4">Fonctionnement</h3>
                    <p>Le dispositif propose des interventions éducatives et thérapeutiques en lien avec le projet personnalisé de scolarisation de chaque enfant.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Processus -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Un processus balisé</h2>
                    <p>Une admission organisée en plusieurs étapes pour garantir la meilleure adéquation entre les besoins de l'enfant et le dispositif</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Étape 1 : Orientation</h4>
                            <p class="card-text">Orientation des enfants par la CADPH (MDPH) vers le dispositif UEEA.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Étape 2 : Validation</h4>
                            <p class="card-text">Validation de l'admission par la DG de l'association après passage en commission réunissant médecin psychiatre, psychologue et enseignant.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Étape 3 : Rencontre</h4>
                            <p class="card-text">Rencontre de l'enfant et des parents avec la cheffe de service, puis avec l'équipe scolaire et périscolaire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Étape 4 : Observation</h4>
                            <p class="card-text">Période d'observation de 6 semaines avec réalisation de bilans éducatif, fonctionnel, orthophonique, psychomoteur...</p>
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
                    <h2 class="mb-4">Organisation des apprentissages</h2>
                    <p>Des espaces adaptés pour différents modes d'apprentissage</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Espaces de travail</h4>
                            <p class="card-text">La classe est organisée autour de plusieurs environnements :</p>
                            <ul>
                                <li>Espace "travaux dirigés" par l'enseignant</li>
                                <li>Espace "travaux semi-dirigés" avec un éducateur</li>
                                <li>Espace "pairs dirigés" entre élèves</li>
                                <li>Espace "travaux non dirigés" par l'élève</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Salle d'activités</h4>
                            <p class="card-text">Une seconde salle dédiée aux actions individuelles, utilisée selon un planning préétabli et comme salle de repos.</p>
                            <p>Les élèves ont accès à l'ensemble des locaux collectifs de l'école au même titre que tous les autres élèves.</p>
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
                    <p class="mb-4">Pour toute information sur l'UEEA Cesbron ou pour une demande d'admission</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
