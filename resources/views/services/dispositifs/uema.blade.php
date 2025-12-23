@extends('layouts.app')

@section('title', 'UEMA Joseph de Maistre')

@section('meta_description', 'UEMA Joseph de Maistre - Unité d\'Enseignement Maternelle Autisme, dispositif d\'inclusion scolaire qui accueille 7 enfants de 3 à 6 ans avec TSA.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-4">
                        <img src="{{ asset('images/dispositifs/images/UEMA.png') }}" alt="UEMA Joseph de Maistre" class="img-fluid" style="max-height: 100px;">
                    </div>
                    <h1 class="display-4 fw-bold mb-4">UEMA Joseph de Maistre</h1>
                    <p class="lead">Unité d'Enseignement Maternelle Autisme</p>
                    <p>Dispositif d'inclusion scolaire<br>7 enfants de 3 à 6 ans avec TSA</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À quoi sert le dispositif -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">À quoi sert l'UEMA</h2>
                    <p>L'UEMA est un dispositif d'inclusion scolaire qui a pour mission la mise en place, au sein d'une école maternelle, d'une classe spécifique et d'un cadre sécurisant pour des enfants avec TSA de 3 à 6 ans.</p>
                    <p>L'UEMA propose des temps individuels et collectifs de prise en charge autour d'un parcours de scolarisation s'inscrivant dans le cadre des programmes du ministère de l'éducation nationale.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Pour qui</h3>
                    <ul>
                        <li>Enfants de 3 à 6 ans avec troubles du spectre autistique</li>
                        <li>Adressés par la MDPH</li>
                        <li>Capacité d'accueil : 7 enfants</li>
                        <li>Accueil à temps plein comme tous les élèves de maternelle</li>
                    </ul>
                    
                    <h3 class="mb-3 mt-4">Spécificité</h3>
                    <p>Interventions éducatives et thérapeutiques précoces, en lien avec le projet personnalisé de scolarisation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Fonctionnement -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Organisation de la prise en charge</h2>
                    <p>Une approche structurée pour un développement harmonieux</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Temps collectifs</h4>
                            <p class="card-text">Activités en petit groupe pour développer la socialisation, la communication et les apprentissages scolaires de base.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Temps individuels</h4>
                            <p class="card-text">Prise en charge personnalisée selon les besoins spécifiques de chaque enfant avec des interventions thérapeutiques ciblées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Intégration scolaire</h4>
                            <p class="card-text">Temps d'inclusion dans les classes ordinaires de l'école pour développer les interactions avec les autres élèves.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Soutien aux familles</h4>
                            <p class="card-text">Accompagnement des parents dans la compréhension des besoins de leur enfant et conseils pour la vie quotidienne.</p>
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
                    <h2 class="mb-4">Exemples d'activités</h2>
                    <p>Des apprentissages adaptés aux jeunes enfants</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Activités pédagogiques</h4>
                            <p class="card-text">Apprentissages pré-scolaires adaptés : graphisme, découverte des nombres, langage, motricité fine, activités sensorielles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Jeux et socialisation</h4>
                            <p class="card-text">Jeux symboliques, jeux de règle, activités de groupe pour développer les interactions sociales et la compréhension des consignes.</p>
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
                    <p class="mb-4">Pour toute information sur l'UEMA Joseph de Maistre ou pour une demande d'admission</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
