@extends('layouts.app')

@section('title', 'Devenir membre')

@section('meta_description', 'Devenez membre de Maison Benjamin et soutenez notre mission d\'accompagnement des enfants et jeunes en situation de handicap.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Devenir membre</h1>
                    <p class="lead">Rejoignez notre communauté et soutenez notre mission</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Pourquoi adhérer -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Pourquoi devenir membre ?</h2>
                    <p>En devenant membre de Maison Benjamin, vous rejoignez une communauté engagée dans l'accompagnement des enfants et jeunes en situation de handicap.</p>
                    <p>Votre adhésion nous permet de développer nos actions, d'innover dans nos accompagnements et de maintenir la qualité de nos services.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3">Vos avantages</h3>
                    <ul>
                        <li><strong>Soutenir une cause essentielle</strong> : participez activement à notre mission</li>
                        <li><strong>Être informé</strong> : recevez nos actualités et nos rapports d'activité</li>
                        <li><strong>Participer à la vie associative</strong> : votez en assemblée générale</li>
                        <li><strong>Des déductions fiscales</strong> : bénéficiez d'une réduction d'impôt</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Adhésion -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Comment adhérer ?</h2>
                    <p>Un processus simple pour nous rejoindre</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-file-alt fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">1. Remplir le formulaire</h3>
                            <p class="card-text text-muted">Téléchargez et complétez le bulletin d'adhésion disponible ci-dessous.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-euro-sign fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">2. Régler la cotisation</h3>
                            <p class="card-text text-muted">La cotisation annuelle est de 20€ minimum, mais vous pouvez donner plus si vous le souhaitez.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <i class="fas fa-envelope fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h5">3. Nous renvoyer le tout</h3>
                            <p class="card-text text-muted">Envoyez votre bulletin d'adhésion et votre règlement par courrier ou email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Documents -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Documents d'adhésion</h2>
                    <p>Tous les documents nécessaires pour devenir membre</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-file-pdf fa-2x text-danger"></i>
                                </div>
                                <div>
                                    <h4 class="card-title h5">Bulletin d'adhésion</h4>
                                    <p class="card-text text-muted">Formulaire d'adhésion à imprimer et compléter</p>
                                    <a href="https://www.helloasso.com/associations/association-benjamin/adhesions/devenez-membre-de-l-association" target="_blank" class="btn btn-primary btn-sm mt-2">Télécharger</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-info-circle fa-2x text-info"></i>
                                </div>
                                <div>
                                    <h4 class="card-title h5">Statuts de l'association</h4>
                                    <p class="card-text text-muted">Consultez nos statuts pour mieux comprendre notre fonctionnement</p>
                                    <a href="#" class="btn btn-primary btn-sm mt-2">Consulter</a>
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
                    <h2 class="mb-4">Des questions ?</h2>
                    <p class="mb-4">Notre équipe est à votre disposition pour vous renseigner sur l'adhésion</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
@endsection
