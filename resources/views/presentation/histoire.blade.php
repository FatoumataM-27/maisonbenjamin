@extends('layouts.app')

@section('title', 'Notre Histoire')

@section('meta_description', 'Découvrez l\'histoire de l\'association Maison Benjamin, fondée pour accompagner les enfants et jeunes adultes en situation de handicap mental et psychique.')

@section('content')
    <!-- Section Hero Histoire -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Notre Histoire</h1>
                    <p class="lead">L'histoire d'une association née de la volonté de parents engagés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Histoire -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="content-block mb-5">
                        <h2 class="mb-4">Les débuts de Maison Benjamin</h2>
                        <p>À l'origine, Benjamin est trisomique 21. À l'âge de 6 ans, ses parents ont des difficultés à l'inscrire à l'école. Ces difficultés ne sont pas dues à Benjamin, mais aux institutrices, non formées à la prise en charge des situations de handicap.</p>
                        
                        <p>En 1987, les parents de Benjamin décident de créer une association pour pallier ce manque. Ils sont rejoints par d'autres parents qui, comme eux, souhaitent que leurs enfants bénéficient d'une prise en charge adaptée à leurs besoins. L'association Maison Benjamin est née.</p>
                        
                        <p>Dès le début, l'association se donne pour mission de développer des structures d'accueil et d'accompagnement pour les enfants et jeunes adultes en situation de handicap mental et psychique, en mettant l'accent sur l'inclusion et le respect de chaque individu.</p>
                    </div>

                    <div class="content-block mb-5">
                        <h2 class="mb-4">Les premières structures</h2>
                        <p>En 1990, l'association ouvre sa première structure : l'Institut Médico-Éducatif (IME) Norbert Dana, qui accueille initialement 25 enfants. Face à la demande croissante, l'IME s'agrandit progressivement et intègre une section d'Institut Médico-Professionnel (IMPRO) en 1995, permettant d'accompagner les jeunes jusqu'à l'âge adulte.</p>
                        
                        <p>En 2001, l'association crée le Service d'Éducation Spéciale et de Soins à Domicile (SESSAD) Evelyne et Salomon Madar, pour accompagner les enfants dans leur milieu familial et scolaire. Cette structure répond à un besoin croissant d'accompagnement individualisé et de soutien à l'inclusion scolaire.</p>
                    </div>

                    <div class="content-block mb-5">
                        <h2 class="mb-4">L'évolution et les nouveaux dispositifs</h2>
                        <p>Au fil des années, l'association Maison Benjamin n'a cessé d'évoluer pour répondre aux besoins des enfants et de leurs familles. Elle a développé une expertise particulière dans l'accompagnement des enfants présentant des troubles du spectre autistique (TSA).</p>
                        
                        <p>En 2018, l'association ouvre l'Unité d'Enseignement Maternelle Autisme (UEMA) Joseph de Maistre, suivie en 2020 par l'Unité d'Enseignement Élémentaire Autisme (UEEA) Cesbron. Ces dispositifs, cogérés avec l'Éducation nationale, permettent à des enfants avec TSA d'être scolarisés en milieu ordinaire tout en bénéficiant d'un accompagnement adapté.</p>
                        
                        <p>En 2022, l'association lance l'Équipe Mobile d'Appui médico-social pour la Scolarisation (EMASCO) PARIS-EST, qui intervient auprès des établissements scolaires pour faciliter la scolarisation des élèves en situation de handicap.</p>
                    </div>

                    <div class="content-block">
                        <h2 class="mb-4">Aujourd'hui</h2>
                        <p>Aujourd'hui, l'association Maison Benjamin accompagne plus de 120 enfants et jeunes adultes à travers ses différentes structures et dispositifs. Elle emploie une équipe pluridisciplinaire de professionnels qualifiés : éducateurs spécialisés, psychologues, orthophonistes, psychomotriciens, ergothérapeutes, médecins, etc.</p>
                        
                        <p>L'association reste fidèle à sa mission initiale : développer la richesse de chacun et relever le défi de l'inclusion. Elle continue à innover et à adapter ses pratiques pour répondre aux besoins spécifiques de chaque enfant et jeune adulte qu'elle accompagne.</p>
                        
                        <p>L'histoire de Maison Benjamin est celle d'un engagement constant en faveur des personnes en situation de handicap mental, psychique et avec autisme, pour leur permettre de trouver leur place dans la société et de développer pleinement leur potentiel.</p>
                    </div>

                    <div class="text-center mt-5">
                        <a href="{{ url('/qui-sommes-nous/valeurs') }}" class="btn btn-primary btn-lg">Découvrir nos valeurs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Citation -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <blockquote class="blockquote">
                        <p class="mb-0">"Chaque enfant est unique et mérite un accompagnement adapté à ses besoins spécifiques. C'est cette conviction qui guide notre action depuis plus de 30 ans."</p>
                        <footer class="blockquote-footer mt-3">Les fondateurs de Maison Benjamin</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
