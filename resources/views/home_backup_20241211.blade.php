@extends('layouts.app')

@section('title', 'Accueil')

@section('meta_description', 'Maison Benjamin - Association pour l\'accompagnement d\'enfants et jeunes adultes en situation de handicap mental et psychique.')

@section('content')
    <!-- Section Hero avec vidéo kayak -->
    <section class="hero" id="qui-sommes-nous">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('media/videos/activites/kayak-modif.mp4') }}" type="video/mp4">
            </video>
            <div class="overlay"></div>
        </div>
        <div class="container">
            <h2>Maison Benjamin </h2>
            <p>Accompagnement d'enfants et jeunes en situation de handicap mental, psychique et avec autisme</p>
            <a href="{{ url('/contact') }}" class="btn btn-primary">Contactez-nous</a>
        </div>
    </section>


    <!-- Section Qui sommes-nous -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Qui sommes-nous ?</h2>
                    <p class="lead">Notre association accompagne des enfants et jeunes adultes en situation de handicap mental et psychique depuis plus de 30 ans.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Notre Histoire</h3>
                            <p class="card-text">À l'origine, Benjamin est trisomique 21. À l'âge de 6 ans, ses parents ont des difficultés à l'inscrire à l'école. Ces difficultés ne sont pas dues à Benjamin, mais aux institutrices, non formées à la prise en charge des situations de handicap...</p>
                            <a href="{{ url('/qui-sommes-nous/histoire') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Nos Valeurs</h3>
                            <p class="card-text">Développer la richesse de chacun, relever le défi de l'inclusion. Nous travaillons pour changer le regard porté sur la personne en situation de handicap mental, psychique et avec autisme...</p>
                            <a href="{{ url('/qui-sommes-nous/valeurs') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Activités -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos Activités</h2>
                    <p class="lead">Découvrez les activités proposées par Maison Benjamin pour favoriser l'épanouissement et l'inclusion.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-palette fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title mb-3">Art Thérapie</h4>
                            <p class="card-text">Expression créative à travers la peinture, le dessin et la sculpture pour développer la confiance en soi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-rocket fa-3x text-secondary"></i>
                            </div>
                            <h4 class="card-title mb-3">Projet d'Avenir</h4>
                            <p class="card-text">Accompagnement personnalisé pour construire un projet de vie adapté aux aspirations de chacun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-book fa-3x text-info"></i>
                            </div>
                            <h4 class="card-title mb-3">Cahier du Jour</h4>
                            <p class="card-text">Activité d'écriture quotidienne pour structurer la pensée et développer l'expression écrite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-trophy fa-3x text-warning"></i>
                            </div>
                            <h4 class="card-title mb-3">Défis du Quotidien</h4>
                            <p class="card-text">Activités ludiques pour développer l'autonomie dans les gestes de la vie quotidienne.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ url('/activites') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-eye me-2"></i>Découvrir toutes nos activités
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Structures -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos Structures</h2>
                    <p class="lead">Maison Benjamin propose différentes structures adaptées aux besoins des enfants et jeunes adultes.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 structure-card">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">IME IMPRO Norbert Dana</h3>
                            <p class="card-text">Institut médicoéducatif et professionnel accueillant 54 enfants, adolescents et jeunes adultes en situation de handicap mental ou psychique, présentant des troubles du spectre autistique.</p>
                            <a href="{{ url('/structures/ime-impro') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 structure-card">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">SESSAD Evelyne et Salomon Madar</h3>
                            <p class="card-text">Service d'Education Spéciale et de Soins à Domicile accompagnant 51 enfants de 6 à 20 ans, présentant des troubles du spectre autistique ou des troubles des fonctions cognitives.</p>
                            <a href="{{ url('/structures/sessad') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Dispositifs -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos Dispositifs</h2>
                    <p class="lead">Des dispositifs spécifiques pour favoriser l'inclusion scolaire et sociale.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 dispositive-card">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">UEEA Cesbron</h3>
                            <p class="card-text">Unité d'Enseignement Élémentaire Autisme, classe cogérée avec l'Éducation nationale, accueillant 10 enfants avec TSA scolarisés en école ordinaire élémentaire.</p>
                            <a href="{{ url('/dispositifs/ueea') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 dispositive-card">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">UEMA Joseph de Maistre</h3>
                            <p class="card-text">Unité d'Enseignement Maternelle Autisme, dispositif d'inclusion scolaire qui accueille 7 enfants de 3 à 6 ans avec TSA, adressés par la MDPH.</p>
                            <a href="{{ url('/dispositifs/uema') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 dispositive-card">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">EMASCO PARIS-EST</h3>
                            <p class="card-text">Équipe Mobile d'Appui médicosocial pour la Scolarisation d'élèves en situation de handicap, intervenant dans les 10e, 11e, 19e et 20e arrondissements de Paris.</p>
                            <a href="{{ url('/dispositifs/emasco') }}" class="btn btn-primary mt-3">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section Partenaires -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos Partenaires</h2>
                    <p class="lead">Maison Benjamin travaille en étroite collaboration avec ses partenaires institutionnels et financiers.</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/ars-idf.jpg') }}" alt="ARS Île-de-France" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/education-nationale.jpg') }}" alt="Éducation Nationale" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/fondation-rothschild.jpg') }}" alt="Fondation Rothschild" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/fsju.jpg') }}" alt="FSJU" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/jem.jpg') }}" alt="JEM" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/mdph.jpg') }}" alt="MDPH" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/region-idf.jpg') }}" alt="Région Île-de-France" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="{{ asset('media/images/partners/ville-paris.jpg') }}" alt="Ville de Paris" class="img-fluid partner-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Contactez-nous</h2>
                    <p class="lead mb-5">Pour toute information complémentaire, n'hésitez pas à nous contacter.</p>
                    <div class="d-flex justify-content-center gap-4">
                        <div class="text-center">
                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
                            <h5>Adresse</h5>
                            <p>2B VILLA THORETON<br>PARIS 15</p>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-phone fa-2x text-primary mb-3"></i>
                            <h5>Téléphone</h5>
                            <p>01 43 58 00 71</p>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
                            <h5>Email</h5>
                            <p>comm@maisonbenjamin.org </p>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-4">Formulaire de contact</a>
                </div>
            </div>
        </div>
    </section>
@endsection

