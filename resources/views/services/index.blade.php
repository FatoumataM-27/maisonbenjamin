@extends('layouts.app')

@section('title', 'Nos services')

@section('meta_description', 'Découvrez les services de Maison Benjamin : IME/IMPRO, SESSAD, PICORS et MAS pour l\'accompagnement des enfants et jeunes en situation de handicap.')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item active">Nos Services</li>
            </ol>
        </div>
    </nav>

<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h1 class="mb-4">Nos services</h1>
            <p class="lead">Maison Benjamin propose un parcours complet d'accompagnement adapté à chaque besoin</p>
        </div>
    </div>
    
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="fas fa-school fa-4x text-primary"></i>
                    </div>
                    <h3 class="card-title text-center mb-3">IME / IMPRO</h3>
                    <p class="card-text">Institut Médico-Éducatif et Médico-Professionnel proposant un accompagnement éducatif, pédagogique et formatif pour les enfants et adolescents en situation de handicap.</p>
                    <div class="text-center mt-4">
                        <a href="{{ url('/services/ime-impro') }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="fas fa-home fa-4x text-primary"></i>
                    </div>
                    <h3 class="card-title text-center mb-3">SESSAD</h3>
                    <p class="card-text">Service d'Éducation Spéciale et de Soins à Domicile accompagnant les enfants et adolescents dans leur milieu naturel (famille, école, loisirs).</p>
                    <div class="text-center mt-4">
                        <a href="{{ url('/services/sessad') }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="fas fa-users fa-4x text-primary"></i>
                    </div>
                    <h3 class="card-title text-center mb-3">PICORS</h3>
                    <p class="card-text">Pôle de Coordination et d'Organisation des Réponses de Secteur qui coordonne les dispositifs spécialisés pour l'inclusion scolaire.</p>
                    <div class="text-center mt-4">
                        <a href="{{ url('/services/picors') }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="fas fa-hospital fa-4x text-primary"></i>
                    </div>
                    <h3 class="card-title text-center mb-3">MAS</h3>
                    <p class="card-text">Maison d'Accueil Spécialisée offrant un accompagnement global et des soins permanents pour adultes en situation de handicap.</p>
                    <div class="text-center mt-4">
                        <a href="{{ url('/services/mas') }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12 text-center">
            <p class="text-muted mb-3">Une question sur nos services ?</p>
            <a href="{{ url('/contact') }}" class="btn btn-secondary">Contactez-nous</a>
        </div>
    </div>
</div>
@endsection
