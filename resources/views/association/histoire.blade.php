@extends('layouts.app')

@section('title', 'Notre histoire')

@section('meta_description', 'Découvrez l\'histoire de l\'association Benjamin, de sa création par Michelle et Guy Cassar à son développement jusqu\'à aujourd\'hui.')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/association') }}">Qui sommes-nous ?</a></li>
                    <li class="breadcrumb-item active">Notre histoire</li>
                </ol>
            </nav>
            <h1 class="mb-4">Notre histoire</h1>
        </div>
    </div>
</div>

<!-- Section histoire détaillée -->
<section class="section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="histoire-content">
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                                    <img src="{{ asset('images/dispositifs/images/michelle-cassar.jpg') }}" alt="Michelle Cassar" class="img-fluid rounded-circle" style="max-height: 200px;">
                                </div>
                                <div class="col-lg-8">
                                    <h2 class="mb-4">L'histoire de l'Association Benjamin commence avec Benjamin, un enfant trisomique plein de joie de vivre</h2>
                                </div>
                            </div>
                            
                            <h3 class="mb-3">À L'ORIGINE, BENJAMIN EST TRISOMIQUE 21</h3>
                            <p class="lead">À l'âge de 6 ans, ses parents ont des difficultés à l'inscrire à l'école. Ces difficultés ne sont pas dues à Benjamin, mais aux institutrices, non formées à la prise en charge des situations de handicap, qui se retrouvent démunies face à un enfant avec des besoins spécifiques. Pourtant Benjamin malgré ses difficultés, est plein de joie de vivre, déborde d'envie d'apprendre, aime être avec les autres.</p>
                            
                            <h3 class="mb-3">Le projet novateur</h3>
                            <p>On suggère aux parents de Benjamin, Mr et Mme CASSAR, d'inscrire leur enfant dans une structure spécialisée. Mais les démarches sont complexes, les places sont rares et, lorsqu'une opportunité se présente, les établissements d'accueil sont peu enclins à prendre en compte les attentes correspondant à l'engagement juif de Benjamin et de sa famille et à considérer le potentiel de Benjamin. « il a déjà une place, pourquoi rechercher plus ? »</p>
                            
                            <p class="lead">Mr CASSAR, lui-même directeur d'école et son épouse enseignante ont l'idée, de créer une classe intégrée dans l'école juive ordinaire, avec le soutien de M. Jean-Paul AMOYELLE, alors Président national du groupe scolaire Ozar Hatorah. Cette initiative leur permet d'être en accord avec leur culture, leur identité, leurs convictions. « C'est l'avenir, et croyons-nous, de nombreux enfants « ordinaires » gagneraient à être en contact avec des enfants dits différents du même âge »</p>
                            
                            <p>Très vite, d'autres parents d'enfants en situation de handicap mental et psychique de tout horizon rejoignent les parents de Benjamin. Ils confrontent leur vécu, leurs problèmes, discutent de ce projet novateur, de cet espoir. L'attente est si forte que même sans moyens financiers pérennes, ils acceptent de rejoindre le couple Cassar qui crée à Paris une classe pour offrir à son enfant la possibilité d'être reconnu et accepté pour lui-même, d'être accompagné et pris en charge selon ses besoins.</p>
                            
                            <h3 class="mb-3">ANNÉES 1990. LA GENÈSE</h3>
                            <p>Michelle et Guy CASSAR, la mère de Benjamin crée en 1988 une première classe intégrée au sein de l'école élémentaire privée sous contrat d'association, Ozar Hatorah (Paris 20°). Cinq jeunes enfants en situation de handicap mental, âgés de 6 à 9 ans, y sont accueillis et accompagnés par une équipe pluridisciplinaire thérapeutique et éducative.</p>
                            
                            <p>Elle se bat pour imposer un accompagnement qui ne délaisse ni n'ignore les pratiques philosophiques ou religieuses. Elle établit un partenariat avec le CMPP et l'OSE pour le suivi médical et psychologique.</p>
                            
                            <p>Les enfants accueillis et « intégrés » sont heureux, et les parents ravis de voir leur enfant s'épanouir enfin.</p>
                            
                            <p><strong>Dès l'année suivante, d'autres parents souhaitent rejoindre cette « aventure ». Les demandes affluent. Les parents se sentent moins isolés, plus soutenus grâce à l'accompagnement mis en œuvre au profit de leur enfant.</strong></p>
                            
                            <h3 class="mb-3">ANNÉES 2000 : LA RECONNAISSANCE</h3>
                            <p>En 2000, la DDASS autorise la création d'un SESSAD et d'un IME-IMPRO. L'agrément du SESSAD prévoit l'accueil de 40 enfants et adolescents en situation de handicap psychique, celui de l'IME-IMPRO l'accueil de 25 jeunes.</p>
                            
                            <p>En 2009, l'agrément IME-IMPRO est étendu à l'accueil de 15 jeunes supplémentaires avec autisme ou souffrant de troubles du spectre de l'autisme (TSA). L'association BENJAMIN s'installe en mai 2007 dans ses locaux actuels, du 10 rue Juliette Dodu – Paris 10°.</p>
                            
                            <h3 class="mb-3">DÉVELOPPEMENT CONTINU</h3>
                            <p>Grâce à la contribution de généreux donateurs, du soutien décisif du Fonds Social juif Unifié et de l'apport de bénévoles, l'association se développe, au cours de cette décennie. Pour accompagner les enfants au plus proche de leurs besoins, elle met en place une équipe pluridisciplinaire, socio-éducative et thérapeutique, développe un partenariat avec l'Éducation nationale qui met à disposition une professeure des écoles spécialisée.</p>
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
