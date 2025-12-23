@extends('layouts.app')

@section('title', 'SESSAD')

@section('meta_description', 'Découvrez notre SESSAD : Service d\'Éducation Spéciale et de Soins à Domicile pour un accompagnement personnalisé.')

@section('content')
    <!-- Section Hero SESSAD -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">SESSAD</h1>
                    <p class="lead">Service d'Éducation Spéciale et de Soins à Domicile</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Présentation</h2>
                    <p>Le Service d'Éducation Spéciale et de Soins à Domicile (SESSAD) de Maison Benjamin accompagne 30 enfants et adolescents âgés de 0 à 20 ans présentant des troubles du spectre autistique.</p>
                    <p>Notre spécificité est d'intervenir dans les différents lieux de vie de l'enfant : domicile familial, école, crèche, centre de loisirs, etc. Cette approche permet de favoriser le maintien de l'enfant dans son environnement naturel tout en lui apportant un soutien spécialisé.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Public accompagné</h3>
                    <p>Enfants et adolescents de 0 à 20 ans présentant des troubles du spectre autistique.</p>
                    
                    <h3 class="mb-3 mt-4">Nos missions</h3>
                    <ul>
                        <li>Accompagner le développement global de l'enfant</li>
                        <li>Favoriser l'inclusion scolaire en milieu ordinaire</li>
                        <li>Soutenir les familles dans leur rôle parental</li>
                        <li>Coordonner les interventions des différents partenaires</li>
                        <li>Préparer les transitions dans le parcours de vie</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Interventions -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos interventions</h2>
                    <p>Un accompagnement sur mesure dans les différents lieux de vie</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-home fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Au domicile</h3>
                            <p class="card-text">Soutien aux parents dans l'éducation quotidienne, conseils pour aménager l'environnement et accompagnement dans les routines familiales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-school fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">À l'école</h3>
                            <p class="card-text">Collaboration avec les enseignants pour adapter les apprentissages, gérer les situations de classe et favoriser l'intégration sociale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-gamepad fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Dans les loisirs</h3>
                            <p class="card-text">Accompagnement dans les centres de loisirs et activités extrascolaires pour développer la socialisation et l'autonomie.</p>
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
                    <h2 class="mb-4">Exemples d'accompagnement</h2>
                    <p>Des interventions concrètes au quotidien</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Soutien scolaire</h4>
                            <p class="card-text">Aménagement de la classe, adaptation des supports pédagogiques, travail sur la concentration et la gestion des émotions en situation d'apprentissage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Accompagnement familial</h4>
                            <p class="card-text">Guidance parentale, mise en place de routines, stratégies de communication et gestion des comportements difficiles au domicile.</p>
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
                    <p class="mb-4">Pour toute information sur le SESSAD ou pour une demande d'admission</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
