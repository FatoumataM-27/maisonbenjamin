@extends('layouts.app')

@section('title', 'Nos Activités')

@section('meta_description', 'Découvrez les activités proposées par Maison Benjamin : activités éducatives, créatives, sportives et culturelles pour l\'épanouissement des jeunes.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Nos Activités</h1>
                    <p class="lead">Des activités variées pour favoriser l'épanouissement et le développement de chaque jeune</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Un accompagnement par l'activité</h2>
                    <p class="lead mb-4">
                        Au-delà des accompagnements spécialisés, nous proposons de nombreuses activités éducatives, créatives, sportives et culturelles pour favoriser l'épanouissement et le développement de chaque jeune.
                    </p>
                    <p>
                        Ces activités permettent de développer la confiance en soi, les compétences sociales, la créativité et l'autonomie dans un cadre bienveillant et sécurisant.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Catégories d'activités -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos catégories d'activités</h2>
                    <p>Des propositions adaptées à chaque centre d'intérêt et à chaque besoin</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-palette fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Activités créatives</h3>
                            <p class="card-text text-muted">Art-thérapie, peinture, dessin, sculpture, musique pour développer l'expression créative et la confiance en soi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-heart fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Activités thérapeutiques</h3>
                            <p class="card-text text-muted">Relaxation, sophrologie, psychomotricité pour favoriser le bien-être et l'équilibre émotionnel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Activités sociales</h3>
                            <p class="card-text text-muted">Jeux de groupe, sorties culturelles, sports collectifs pour développer les compétences relationnelles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Exemples d'activités -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Quelques exemples d'activités</h2>
                    <p>Un aperçu de notre riche programme d'activités</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <img src="{{ asset('media/activities/activity-art.jpg') }}" alt="Art Thérapie" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <h4 class="card-title h6">Art Thérapie</h4>
                            <p class="card-text small text-muted">Expression créative à travers la peinture, le dessin et la sculpture pour développer la confiance en soi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-music fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Atelier Musique</h4>
                            <p class="card-text small text-muted">Découverte des instruments, chant et rythme pour stimuler la créativité et la coordination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-running fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Activités Sportives</h4>
                            <p class="card-text small text-muted">Sports adaptés, jeux collectifs et activités physiques pour développer la motricité et l'esprit d'équipe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <img src="{{ asset('media/activities/cahier-jour.jpg') }}" alt="Cahier du Jour" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <h4 class="card-title h6">Cahier du Jour</h4>
                            <p class="card-text small text-muted">Activité d'écriture quotidienne pour structurer la pensée et développer l'expression écrite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <img src="{{ asset('media/activities/defis-quotidien.jpg') }}" alt="Défis du Quotidien" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <h4 class="card-title h6">Défis du Quotidien</h4>
                            <p class="card-text small text-muted">Activités ludiques pour développer l'autonomie dans les gestes de la vie quotidienne.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <img src="{{ asset('media/activities/avenir.jpg') }}" alt="Avenir" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <h4 class="card-title h6">Projets d'Avenir</h4>
                            <p class="card-text small text-muted">Préparation à l'avenir et développement des compétences pour l'autonomie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-theater-masks fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Théâtre</h4>
                            <p class="card-text small text-muted">Jeux de rôle et expression théâtrale pour développer la communication et la confiance en soi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-heart fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">VRAS – Vie relationnelle, affective et sexuelle</h4>
                            <p class="card-text small text-muted">Accompagnement pour le développement d'une vie affective et relationnelle équilibrée.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-leaf fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Jardin sensoriel</h4>
                            <p class="card-text small text-muted">Activités de jardinage pour stimuler les sens et développer la patience et la concentration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Habiletés sociales</h4>
                            <p class="card-text small text-muted">Ateliers pour développer les compétences de communication et d'interaction sociale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-music fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Musicothérapie</h4>
                            <p class="card-text small text-muted">Expression et communication à travers la musique pour le bien-être émotionnel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-comments fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Groupe langage</h4>
                            <p class="card-text small text-muted">Ateliers de stimulation du langage et de la communication verbale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-utensils fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Voyage culinaire</h4>
                            <p class="card-text small text-muted">Atelier cuisine, 30 repas produits par atelier pour découvrir les saveurs du monde.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-dumbbell fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Conditionnement</h4>
                            <p class="card-text small text-muted">Activités physiques adaptées pour développer la force et l'endurance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-child fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Expression corporelle</h4>
                            <p class="card-text small text-muted">Ateliers de mouvement et d'expression par le corps pour la confiance en soi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-palette fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Arts plastiques</h4>
                            <p class="card-text small text-muted">Créations artistiques variées pour développer la créativité et la motricité fine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-spa fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Bien-être</h4>
                            <p class="card-text small text-muted">Activités de relaxation et de développement personnel pour l'équilibre intérieur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-spa fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Yoga</h4>
                            <p class="card-text small text-muted">Pratique du yoga pour la flexibilité, la concentration et le bien-être corporel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Courses</h4>
                            <p class="card-text small text-muted">Préparation de l'atelier cuisine pour développer l'autonomie et l'organisation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-gamepad fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Ludothèque</h4>
                            <p class="card-text small text-muted">Jeux éducatifs et ludiques pour développer les cognitives et sociales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-paw fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Médiation animale</h4>
                            <p class="card-text small text-muted">Activités avec des animaux pour développer l'empathie et la communication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-music fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Musique</h4>
                            <p class="card-text small text-muted">Ateliers musicaux pour l'expression créative et le développement rythmique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-theater-masks fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Théâtre</h4>
                            <p class="card-text small text-muted">Jeux de rôle et expression théâtrale pour développer la confiance et la communication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-tools fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Travaux manuels</h4>
                            <p class="card-text small text-muted">Activités manuelles pour développer la dextérité et la concentration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-utensils fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Cuisine des chefs</h4>
                            <p class="card-text small text-muted">Atelier cuisine accompagné par la chef étoilée Ghislaine Arabian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-palette fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Kaléidoscope</h4>
                            <p class="card-text small text-muted">Atelier arts et décoration des locaux pour un environnement créatif et coloré.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-ship fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Paris au fil de l'eau</h4>
                            <p class="card-text small text-muted">Sorties découvertes de Paris par les voies navigables pour l'exploration urbaine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-tshirt fa-2x text-primary"></i>
                            </div>
                            <h4 class="card-title h6">Blanchisserie</h4>
                            <p class="card-text small text-muted">Activités d'entretien du linge pour développer l'autonomie domestique.</p>
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
                    <h2 class="mb-4">En savoir plus</h2>
                    <p class="mb-4">Vous souhaitez découvrir notre programme d'activités ou nous soutenir ?</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                        <a href="https://www.helloasso.com/associations/association-benjamin/adhesions/devenez-membre-de-l-association" target="_blank" class="btn btn-secondary btn-lg">Devenir membre</a>
                        <a href="https://www.helloasso.com/associations/association-benjamin/formulaires/1" target="_blank" class="btn btn-success btn-lg">Faire un don</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
