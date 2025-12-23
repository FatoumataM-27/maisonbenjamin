@extends('layouts.app')

@section('title', 'Nos Valeurs')

@section('meta_description', 'Découvrez les valeurs de l\'Association Benjamin : développer la richesse de chacun et relever le défi de l\'inclusion.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 mb-4">Nos Valeurs</h1>
                    <p class="lead">« Développer la richesse de chacun, relever le défi de l'inclusion »</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contenu -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <!-- Une autre conception du handicap -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">UNE AUTRE CONCEPTION DU HANDICAP</h2>
                        <div class="content-text">
                            <ul class="values-list">
                                <li>Changer le regard porté sur la personne en situation de handicap mental, psychique et avec autisme.</li>
                                <li>Prendre en compte ses forces au-delà des faiblesses pour lui permettre de vivre et d'être regardé « normalement », de jouir pleinement de ses droits.</li>
                                <li>Reconnaître et l'aider à affirmer sa capacité d'agir.</li>
                                <li>Garantir le respect et l'expression des convictions, de l'identité et de la diversité culturelle et philosophique</li>
                                <li>Accompagner l'accès à la citoyenneté à part entière</li>
                                <li>Favoriser le développement des compétences</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Un accompagnement sur mesure -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">UN ACCOMPAGNEMENT SUR MESURE</h2>
                        <div class="content-text">
                            <ul class="values-list">
                                <li>Mettre en place un accompagnement personnalisé, pour chaque personne, quels que soient ses besoins</li>
                                <li>Accompagner le développement de toutes les potentialités des jeunes, intellectuelles, affectives et corporelles afin de favoriser leur épanouissement et leur autonomie quotidienne, sociale et professionnelle.</li>
                                <li>Faciliter l'accès à la culture, au sport, à des activités solidaires</li>
                                <li>Veiller à la dignité et la qualité de vie et d'accompagnement</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Un accueil inconditionnel -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">UN ACCUEIL INCONDITIONNEL</h2>
                        <div class="content-text">
                            <p>Accueillir sans exclusive et de façon inconditionnelle toute personne en situation de handicap mental et psychique, avec TSA et troubles du comportement</p>
                        </div>
                    </div>

                    <!-- Retour vers les autres pages -->
                    <div class="text-center mt-5">
                        <a href="{{ url('/qui-sommes-nous/histoire') }}" class="btn btn-primary me-3">Notre Histoire</a>
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
