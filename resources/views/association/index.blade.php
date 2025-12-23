@extends('layouts.app')

@section('title', 'Qui sommes-nous ?')

@section('meta_description', 'Découvrez Maison Benjamin : notre histoire, nos valeurs, notre mission et notre équipe dédiée à l\'accompagnement des enfants et jeunes en situation de handicap.')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Qui sommes-nous ?</h1>
            <p class="lead">Notre association accompagne des enfants et jeunes adultes en situation de handicap mental et psychique depuis plus de 30 ans.</p>
        </div>
    </div>
</div>

<!-- Section Notre histoire et nos valeurs -->
<section class="section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title h5 mb-3">
                            <i class="fas fa-history me-2 text-primary"></i>
                            Notre Histoire
                        </h3>
                        <p>Découvrez l'histoire fascinante de l'association Benjamin, de sa création par Michelle et Guy Cassar à son développement jusqu'à aujourd'hui.</p>
                        <div class="mt-3">
                            <a href="{{ url('/notre-histoire') }}" class="btn btn-primary">Découvrir notre histoire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title h5 mb-3">
                            <i class="fas fa-heart me-2 text-primary"></i>
                            Nos Valeurs
                        </h3>
                        <p>Découvrez nos valeurs fondamentales : une autre conception du handicap, un accompagnement sur mesure et un accueil inconditionnel.</p>
                        <div class="mt-3">
                            <a href="{{ url('/nos-valeurs') }}" class="btn btn-primary">Découvrir nos valeurs</a>
                        </div>
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
                <h2 class="mb-4">Rejoignez notre action</h2>
                <p class="mb-4">Vous souhaitez nous soutenir dans notre mission ?</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="https://www.helloasso.com/associations/association-benjamin/adhesions/devenez-membre-de-l-association" target="_blank" class="btn btn-outline-primary btn-lg">Devenir membre</a>
                    <a href="https://www.helloasso.com/associations/association-benjamin/formulaires/1" target="_blank" class="btn btn-success btn-lg">Faire un don</a>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
