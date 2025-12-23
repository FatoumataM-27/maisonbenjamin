@extends('layouts.app')

@section('title', 'SESSAD - Service d\'Éducation Spéciale et de Soins à Domicile')

@section('meta_description', 'Le Service d\'Éducation Spéciale et de Soins à Domicile (SESSAD) de Maison Benjamin accompagne des enfants et adolescents présentant des troubles du spectre autistique dans leur environnement naturel.')

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
                    <h2 class="mb-4">Présentation du service</h2>
                    <p>Le Service d'Éducation Spéciale et de Soins à Domicile (SESSAD) de Maison Benjamin accompagne 30 enfants et adolescents âgés de 0 à 20 ans présentant des troubles du spectre autistique.</p>
                    <p>Notre spécificité est d'intervenir dans les différents lieux de vie de l'enfant : domicile familial, école, crèche, centre de loisirs, etc. Cette approche permet de favoriser le maintien de l'enfant dans son environnement naturel tout en lui apportant un soutien spécialisé.</p>
                    <p>Le SESSAD propose un accompagnement global et personnalisé, adapté aux besoins spécifiques de chaque enfant et de sa famille, en étroite collaboration avec les partenaires du territoire.</p>
                </div>
             
            </div>
        </div>
    </section>

    <!-- Section Missions -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Nos missions</h2>
                    <p>Le SESSAD de Maison Benjamin poursuit plusieurs missions complémentaires pour favoriser le développement, l'autonomie et l'inclusion sociale des enfants accompagnés.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="fas fa-child"></i>
                            </div>
                            <h3 class="card-title mb-3">Accompagner le développement</h3>
                            <p class="card-text">Soutenir le développement global de l'enfant (communication, socialisation, autonomie, cognition) à travers des interventions éducatives et thérapeutiques adaptées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="fas fa-school"></i>
                            </div>
                            <h3 class="card-title mb-3">Favoriser l'inclusion scolaire</h3>
                            <p class="card-text">Accompagner l'inclusion en milieu scolaire ordinaire en collaboration avec les équipes pédagogiques, en adaptant l'environnement et les apprentissages aux besoins spécifiques de l'enfant.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="card-title mb-3">Soutenir les familles</h3>
                            <p class="card-text">Accompagner les parents et la fratrie dans la compréhension des particularités de leur enfant et les soutenir dans leur rôle au quotidien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3 class="card-title mb-3">Coordonner les interventions</h3>
                            <p class="card-text">Assurer la cohérence et la complémentarité des différentes interventions autour de l'enfant, en lien avec tous les partenaires impliqués dans son parcours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="card-title mb-3">Préparer l'avenir</h3>
                            <p class="card-text">Accompagner les transitions dans le parcours de vie (entrée à l'école, passage au collège, orientation professionnelle) et préparer l'avenir en fonction du projet de vie de chaque jeune.</p>
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
                    <p>Le SESSAD s'appuie sur une équipe de professionnels qualifiés, aux compétences complémentaires, pour assurer un accompagnement global et cohérent.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="team-category">
                        <h3 class="mb-3">Équipe éducative</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> Éducateurs spécialisés</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Éducateurs de jeunes enfants</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Moniteurs-éducateurs</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Accompagnants éducatifs et sociaux</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-category">
                        <h3 class="mb-3">Équipe thérapeutique</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> Médecin pédopsychiatre</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Psychologues</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Orthophonistes</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Psychomotriciens</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Ergothérapeute</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-category">
                        <h3 class="mb-3">Équipe de coordination</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> Directeur</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Chef de service</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Assistante sociale</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Secrétaire</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Modalités d'intervention -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Modalités d'intervention</h2>
                    <p>Le SESSAD propose différentes modalités d'intervention, adaptées aux besoins de chaque enfant et aux objectifs définis dans son projet personnalisé.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-primary text-white">
                            <h3 class="h5 mb-0">Interventions individuelles</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-circle text-primary me-2"></i> <strong>Accompagnement éducatif</strong> : développement des compétences sociales, de l'autonomie et des habiletés de la vie quotidienne</li>
                                <li class="mb-3"><i class="fas fa-circle text-primary me-2"></i> <strong>Suivi thérapeutique</strong> : séances d'orthophonie, de psychomotricité, d'ergothérapie, soutien psychologique</li>
                                <li class="mb-3"><i class="fas fa-circle text-primary me-2"></i> <strong>Accompagnement scolaire</strong> : aide à l'inclusion en classe ordinaire, adaptation des supports pédagogiques</li>
                                <li><i class="fas fa-circle text-primary me-2"></i> <strong>Guidance parentale</strong> : conseils et soutien aux parents dans la gestion du quotidien</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-primary text-white">
                            <h3 class="h5 mb-0">Interventions collectives</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-circle text-primary me-2"></i> <strong>Groupes d'habiletés sociales</strong> : apprentissage des codes sociaux et développement des compétences relationnelles</li>
                                <li class="mb-3"><i class="fas fa-circle text-primary me-2"></i> <strong>Ateliers éducatifs</strong> : activités manuelles, cuisine, jardinage, etc.</li>
                                <li class="mb-3"><i class="fas fa-circle text-primary me-2"></i> <strong>Groupes d'expression</strong> : théâtre, musique, arts plastiques</li>
                                <li><i class="fas fa-circle text-primary me-2"></i> <strong>Groupes de parole pour les parents</strong> : échanges d'expériences et soutien mutuel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Admission -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5">Modalités d'admission</h2>
                    
                    <div class="admission-process">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Notification MDPH</h4>
                                <p>L'admission au SESSAD nécessite une notification d'orientation de la Maison Départementale des Personnes Handicapées (MDPH).</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Premier contact</h4>
                                <p>Les familles peuvent contacter le secrétariat du SESSAD pour obtenir des informations et inscrire leur enfant sur la liste d'attente.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Rencontres préalables</h4>
                                <p>Lorsqu'une place se libère, plusieurs rencontres sont organisées avec la famille et l'enfant pour évaluer les besoins et présenter le fonctionnement du service.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Période d'observation</h4>
                                <p>Une période d'observation permet d'affiner l'évaluation des besoins de l'enfant et de définir les modalités de son accompagnement.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Élaboration du projet personnalisé</h4>
                                <p>Un projet personnalisé est élaboré en collaboration avec la famille, définissant les objectifs et les modalités de l'accompagnement.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-5">
                        <p class="mb-4">Pour toute information complémentaire ou pour prendre rendez-vous :</p>
                        <div class="contact-info-box">
                            <p><i class="fas fa-phone text-primary me-2"></i> 01 XX XX XX XX</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> sessad@maisonbenjamin.org</p>
                            <p><i class="fas fa-map-marker-alt text-primary me-2"></i> [Adresse du SESSAD]</p>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Nous contacter</a>
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
                    <h2 class="mb-4">Nos partenaires</h2>
                    <p>Le SESSAD travaille en étroite collaboration avec de nombreux partenaires pour assurer la cohérence et la continuité du parcours des enfants accompagnés.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="partner-category">
                                <h3 class="mb-3">Éducation nationale</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i> Écoles maternelles et élémentaires</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Collèges et lycées</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Enseignants référents</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> AESH (Accompagnants d'Élèves en Situation de Handicap)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="partner-category">
                                <h3 class="mb-3">Secteur médico-social</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i> CAMSP, CMP, CMPP</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Autres SESSAD</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> IME, ITEP</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> ESAT, entreprises adaptées</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="partner-category">
                                <h3 class="mb-3">Secteur sanitaire</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i> Services de pédiatrie</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Services de pédopsychiatrie</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Centres de référence autisme</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Professionnels libéraux</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="partner-category">
                                <h3 class="mb-3">Structures de la petite enfance et de loisirs</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i> Crèches et haltes-garderies</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Centres de loisirs</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Associations sportives et culturelles</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="partner-category">
                                <h3 class="mb-3">Institutions et services sociaux</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i> MDPH</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Services de l'Aide Sociale à l'Enfance</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Services de Protection Maternelle et Infantile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
