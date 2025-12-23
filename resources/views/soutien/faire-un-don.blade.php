@extends('layouts.app')

@section('title', 'Faire un don')

@section('meta_description', 'Faites un don à Maison Benjamin pour soutenir nos actions d\'accompagnement des enfants et jeunes en situation de handicap.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Faire un don</h1>
                    <p class="lead">Soutenez financièrement nos actions et nos projets</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Pourquoi donner -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Votre soutien compte</h2>
                    <p>Vos dons nous permettent de développer nos actions, d'innover dans nos accompagnements et d'offrir le meilleur soutien possible aux enfants et jeunes que nous accompagnons.</p>
                    <p>Chaque contribution, quel que soit son montant, a un impact direct sur la qualité de nos services et sur l'épanouissement des jeunes.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Utilisation des fonds</h3>
                    <ul>
                        <li><strong>Développement des activités</strong> : financement d'ateliers créatifs, sportifs et culturels</li>
                        <li><strong>Amélioration des locaux</strong> : adaptation des espaces pour mieux répondre aux besoins</li>
                        <li><strong>Formation des équipes</strong> : perfectionnement des compétences de nos intervenants</li>
                        <li><strong>Projets innovants</strong> : développement de nouvelles approches d'accompagnement</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Options de don -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Comment donner ?</h2>
                    <p>Plusieurs options pour nous soutenir selon vos préférences</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-credit-card fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Don en ligne</h3>
                            <p class="card-text text-muted">Don ponctuel ou mensuel par carte bancaire via notre plateforme sécurisée.</p>
                            <a href="https://www.helloasso.com/associations/association-benjamin/formulaires/1" target="_blank" class="btn btn-primary mt-3">Donner en ligne</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-envelope fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Don par chèque</h3>
                            <p class="card-text text-muted">Chèque à l'ordre de "Maison Benjamin" envoyé par courrier.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-university fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">Virement bancaire</h3>
                            <p class="card-text text-muted">Virement direct sur notre compte bancaire pour un soutien immédiat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Montants suggérés -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Quelques exemples d'impact</h2>
                    <p>Concrètement, voici ce que votre don peut financer</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <h2 class="text-primary">20€</h2>
                            </div>
                            <h3 class="card-title h5">Matériel créatif</h3>
                            <p class="card-text text-muted">Fourniture de matériel pour les ateliers d'art-thérapie (peinture, papiers, pinceaux).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <h2 class="text-primary">50€</h2>
                            </div>
                            <h3 class="card-title h5">Sortie éducative</h3>
                            <p class="card-text text-muted">Participation à une sortie culturelle ou sportive pour un groupe de jeunes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <h2 class="text-primary">100€</h2>
                            </div>
                            <h3 class="card-title h5">Équipement adapté</h3>
                            <p class="card-text text-muted">Achat de matériel pédagogique adapté pour les enfants avec autisme.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Avantages fiscaux -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center mb-4 mb-md-0">
                                    <i class="fas fa-receipt fa-3x text-success"></i>
                                </div>
                                <div class="col-md-10">
                                    <h3 class="card-title h5 mb-3">Avantages fiscaux</h3>
                                    <p class="card-text">Maison Benjamin est reconnue d'intérêt général. Vos dons ouvrent droit à une réduction d'impôt de 66% du montant versé, dans la limite de 20% du revenu imposable.</p>
                                    <p class="card-text"><strong>Exemple : un don de 100€ ne vous coûte que 34€ après déduction fiscale.</strong></p>
                                    <p class="card-text small text-muted">Un reçu fiscal vous sera adressé pour toute donation supérieure à 10€.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Des questions ?</h2>
                    <p class="mb-4">Notre équipe est à votre disposition pour vous renseigner sur les modalités de don</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
