@extends('layouts.app')

@section('title', 'Nos Valeurs')

@section('meta_description', 'Découvrez les valeurs fondamentales de l\'association Maison Benjamin : respect, inclusion, bienveillance et innovation dans l\'accompagnement des personnes en situation de handicap.')

@section('content')
    <!-- Section Hero Valeurs -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Nos Valeurs</h1>
                    <p class="lead">Les principes qui guident notre action au quotidien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Introduction -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Notre mission</h2>
                    <p class="lead mb-4">Développer la richesse de chacun, relever le défi de l'inclusion.</p>
                    <p>Nous travaillons pour changer le regard porté sur la personne en situation de handicap mental, psychique et avec autisme. Notre objectif est de permettre à chaque personne que nous accompagnons de développer son potentiel et de trouver sa place dans la société.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Valeurs -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos valeurs fondamentales</h2>
                    <p>Ces valeurs sont au cœur de notre approche et guident chacune de nos actions.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-circle bg-primary text-white me-3">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3 class="card-title mb-0">Respect et dignité</h3>
                            </div>
                            <p class="card-text">Nous reconnaissons la valeur intrinsèque de chaque personne, indépendamment de son handicap. Nous respectons l'individualité, les choix et les droits de chacun, et nous nous engageons à préserver la dignité de tous ceux que nous accompagnons.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-circle bg-primary text-white me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3 class="card-title mb-0">Inclusion</h3>
                            </div>
                            <p class="card-text">Nous croyons fermement que chaque personne a sa place dans la société. Notre travail vise à faciliter l'inclusion sociale, scolaire et professionnelle des personnes en situation de handicap, en adaptant l'environnement à leurs besoins spécifiques.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-circle bg-primary text-white me-3">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <h3 class="card-title mb-0">Bienveillance</h3>
                            </div>
                            <p class="card-text">Notre accompagnement est empreint de bienveillance et d'empathie. Nous créons un environnement chaleureux et sécurisant, où chaque personne se sent écoutée, comprise et valorisée. La qualité de la relation humaine est au cœur de notre approche.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-circle bg-primary text-white me-3">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h3 class="card-title mb-0">Innovation</h3>
                            </div>
                            <p class="card-text">Nous sommes constamment à la recherche de nouvelles approches et méthodes pour améliorer la qualité de notre accompagnement. Nous nous tenons informés des avancées scientifiques et pédagogiques, et nous n'hésitons pas à innover pour mieux répondre aux besoins des personnes que nous accompagnons.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Approche -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5">Notre approche</h2>
                    
                    <div class="content-block mb-5">
                        <h3 class="mb-3">Personnalisation</h3>
                        <p>Chaque personne est unique, avec ses propres besoins, capacités et aspirations. C'est pourquoi nous proposons un accompagnement personnalisé, adapté aux spécificités de chacun. Nous élaborons un projet individualisé pour chaque personne que nous accompagnons, en collaboration avec elle et sa famille.</p>
                    </div>
                    
                    <div class="content-block mb-5">
                        <h3 class="mb-3">Pluridisciplinarité</h3>
                        <p>Notre équipe est composée de professionnels aux compétences complémentaires : éducateurs spécialisés, psychologues, orthophonistes, psychomotriciens, ergothérapeutes, médecins... Cette approche pluridisciplinaire permet d'aborder chaque situation dans sa globalité et d'offrir un accompagnement complet et cohérent.</p>
                    </div>
                    
                    <div class="content-block mb-5">
                        <h3 class="mb-3">Partenariat avec les familles</h3>
                        <p>Les familles sont des partenaires essentiels dans l'accompagnement des personnes en situation de handicap. Nous travaillons en étroite collaboration avec elles, dans une relation de confiance et de respect mutuel. Nous les impliquons dans l'élaboration et la mise en œuvre du projet de leur enfant, et nous les soutenons dans leur rôle parental.</p>
                    </div>
                    
                    <div class="content-block">
                        <h3 class="mb-3">Ouverture sur l'environnement</h3>
                        <p>Nous croyons à l'importance de l'ouverture sur l'environnement social, culturel et professionnel. Nous développons des partenariats avec différents acteurs (écoles, entreprises, associations culturelles et sportives...) pour favoriser l'inclusion des personnes que nous accompagnons et enrichir leur expérience de vie.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Engagement -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Notre engagement</h2>
                    <p class="mb-5">Chez Maison Benjamin, nous nous engageons à :</p>
                    
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="engagement-item">
                                <div class="icon-circle bg-primary text-white mx-auto mb-3">
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>Qualité</h4>
                                <p>Offrir un accompagnement de qualité, respectueux des besoins et des droits de chaque personne.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="engagement-item">
                                <div class="icon-circle bg-primary text-white mx-auto mb-3">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h4>Évolution</h4>
                                <p>Faire évoluer constamment nos pratiques pour répondre au mieux aux besoins des personnes que nous accompagnons.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="engagement-item">
                                <div class="icon-circle bg-primary text-white mx-auto mb-3">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h4>Sensibilisation</h4>
                                <p>Sensibiliser la société à la richesse de la différence et à l'importance de l'inclusion.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <a href="{{ url('/structures/ime-impro') }}" class="btn btn-primary btn-lg">Découvrir nos structures</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
