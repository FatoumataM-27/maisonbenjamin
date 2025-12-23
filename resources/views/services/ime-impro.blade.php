@extends('layouts.app')

@section('title', 'IME / IMPRO')

@section('meta_description', 'Découvrez notre IME/IMPRO : Institut Médico-Éducatif et Institut Médico-Professionnel pour enfants et adolescents en situation de handicap.')

@section('content')
    <!-- Section Hero IME IMPRO -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">IME / IMPRO</h1>
                    <p class="lead">Institut Médico-Éducatif et Professionnel</p>
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
                    <p>L'Institut Médico-Éducatif et Professionnel Norbert Dana accueille 54 enfants, adolescents et jeunes adultes en situation de handicap mental ou psychique, présentant des troubles du spectre autistique.</p>
                    <p>Notre structure propose un accompagnement global et personnalisé, adapté aux besoins spécifiques de chaque jeune, dans le respect de son rythme et de ses capacités.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Public accompagné</h3>
                    <p>Enfants, adolescents et jeunes adultes de 6 à 20 ans en situation de handicap mental, psychique ou avec autisme.</p>
                    
                    <h3 class="mb-3 mt-4">Nos missions</h3>
                    <ul>
                        <li>Accompagnement éducatif et pédagogique adapté</li>
                        <li>Soutien à la socialisation et à la communication</li>
                        <li>Développement de l'autonomie personnelle</li>
                        <li>Préprofessionnalisation pour les adolescents</li>
                        <li>Soutien aux familles</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Accompagnement -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Notre accompagnement</h2>
                    <p>Un accompagnement concret et adapté à chaque étape du parcours</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Section IME (6-14 ans)</h3>
                            <p class="card-text">Centrée sur l'éducation, la socialisation et les apprentissages fondamentaux. Les jeunes bénéficient d'un enseignement adapté en lien avec l'Éducation nationale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Section IMPRO (14-20 ans)</h3>
                            <p class="card-text">Orientée vers la préprofessionnalisation et l'autonomie sociale. Les adolescents découvrent des ateliers techniques et préparent leur projet d'avenir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Équipe -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Notre équipe pluridisciplinaire</h2>
                    <p>Une équipe dédiée pour un accompagnement global</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6 mb-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-user-md fa-3x text-primary"></i>
                    </div>
                    <h5>Équipe médicale</h5>
                    <p class="small text-muted">Médecins, psychologues</p>
                </div>
                <div class="col-md-3 col-6 mb-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-chalkboard-teacher fa-3x text-primary"></i>
                    </div>
                    <h5>Équipe éducative</h5>
                    <p class="small text-muted">Éducateurs spécialisés</p>
                </div>
                <div class="col-md-3 col-6 mb-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h5>Équipe enseignante</h5>
                    <p class="small text-muted">Professeurs des écoles</p>
                </div>
                <div class="col-md-3 col-6 mb-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-hands-helping fa-3x text-primary"></i>
                    </div>
                    <h5>Équipe paramédicale</h5>
                    <p class="small text-muted">Orthophonistes, psychomotriciens</p>
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
                    <p class="mb-4">Pour toute information sur l'IME/IMPRO ou pour une demande d'admission</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
