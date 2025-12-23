@extends('layouts.app')

@section('title', 'Nos valeurs')

@section('meta_description', 'Découvrez les valeurs de l\'association Benjamin : une autre conception du handicap, accompagnement sur mesure et accueil inconditionnel.')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/association') }}">Qui sommes-nous ?</a></li>
                    <li class="breadcrumb-item active">Nos valeurs</li>
                </ol>
            </nav>
            <h1 class="mb-4">Nos valeurs</h1>
        </div>
    </div>
</div>

<!-- Section valeurs détaillées -->
<section class="section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="valeurs-content">
                            <h2 class="mb-4">UNE AUTRE CONCEPTION DU HANDICAP</h2>
                            <p class="lead">Changer le regard porté sur la personne en situation de handicap mental, psychique et avec autisme.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                        <p>Prendre en compte ses forces au-delà des faiblesses pour lui permettre de vivre et d'être regardé « normalement », de jouir pleinement de ses droits.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                        <p>Reconnaître et l'aider à affirmer sa capacité d'agir.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                        <p>Garantir le respect et l'expression des convictions, de l'identité et de la diversité culturelle et philosophique.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                        <p>Accompagner l'accès à la citoyenneté à part entière.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                        <p>Favoriser le développement des compétences.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <h2 class="mb-4 mt-5">UN ACCOMPAGNEMENT SUR MESURE</h2>
                            <p class="lead">Mettre en place un accompagnement personnalisé, pour chaque personne, quels que soient ses besoins.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-user-check text-primary me-3 mt-1"></i>
                                        <p>Accompagner le développement de toutes les potentialités des jeunes, intellectuelles, affectives et corporelles afin de favoriser leur épanouissement et leur autonomie quotidienne, sociale et professionnelle.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-heart text-primary me-3 mt-1"></i>
                                        <p>Faciliter l'accès à la culture, au sport, à des activités solidaires.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-shield-alt text-primary me-3 mt-1"></i>
                                        <p>Veiller à la dignité et la qualité de vie et d'accompagnement.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <h2 class="mb-4 mt-5">UN ACCUEIL INCONDITIONNEL</h2>
                            <p class="lead">Accueillir sans exclusive et de façon inconditionnelle toute personne en situation de handicap mental et psychique, avec TSA et troubles du comportement.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-home text-primary me-3 mt-1"></i>
                                        <p>Offrir un espace sécurisant et bienveillant où chaque personne peut se développer à son rythme.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-hands-helping text-primary me-3 mt-1"></i>
                                        <p>Créer un environnement inclusif qui favorise les interactions et les échanges.</p>
                                    </div>
                                </div>
                            </div>
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
