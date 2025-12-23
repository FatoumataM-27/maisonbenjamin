@extends('layouts.app')

@section('title', 'Notre Histoire')

@section('meta_description', 'Découvrez l\'histoire de l\'Association Benjamin, créée en mémoire de Benjamin, enfant trisomique, pour l\'intégration d\'enfants handicapés.')

@section('content')
    <!-- Section Hero -->
    <section class="hero-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 mb-4">Notre Histoire</h1>
                    <p class="lead">L'histoire de l'Association Benjamin commence avec Benjamin, un enfant trisomique plein de joie de vivre</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contenu -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <!-- À l'origine, Benjamin -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">À L'ORIGINE, BENJAMIN EST TRISOMIQUE 21</h2>
                        <div class="content-text">
                            <p>À l'âge de 6 ans, ses parents ont des difficultés à l'inscrire à l'école.</p>
                            
                            <p>Ces difficultés ne sont pas dues à Benjamin, mais aux institutrices, non formées à la prise en charge des situations de handicap, qui se retrouvent démunies face à un enfant avec des besoins spécifiques. Elles ne savent ni comment lui parler, ni comment le faire participer aux activités de la classe, ni quoi lui proposer. Pourtant Benjamin malgré ses difficultés, est plein de joie de vivre, déborde d'envie d'apprendre, aime être avec les autres.</p>
                            
                            <p>On suggère aux parents de Benjamin, Mr et Mme CASSAR, d'inscrire leur enfant dans une structure spécialisée. Mais les démarches sont complexes, les places sont rares et, lorsqu'une opportunité se présente, les établissements d'accueil sont peu enclins à prendre en compte les attentes correspondant à l'engagement juif de Benjamin et de sa famille et à considérer le potentiel de Benjamin. « il a déjà une place, pourquoi rechercher plus ? »</p>
                            
                            <p>Mr CASSAR, lui-même directeur d'école et son épouse enseignante ont l'idée, de créer une classe intégrée dans l'école juive ordinaire, avec le soutien de M. Jean-Paul AMOYELLE, alors Président national du groupe scolaire Ozar Hatorah. Cette initiative leur permet d'être en accord avec leur culture, leur identité, leurs convictions.: «C'est l'avenir, et croyez-nous, de nombreux enfants «ordinaires» gagneraient à être en contact avec des enfants dits différents du même âge ».</p>
                            
                            <p>Très vite, d'autres parents d'enfants en situation de handicap mental et psychique de tout horizon rejoignent les parents de Benjamin. Ils confrontent leur vécu, leurs problèmes, discutent de ce projet novateur, de cet espoir. L'attente est si forte que même sans moyens financiers pérennes, ils acceptent de rejoindre le couple Cassar qui crée à Paris une classe pour offrir à son enfant la possibilité d'être reconnu et accepté pour lui-même, d'être accompagné et pris en charge selon ses besoins.</p>
                        </div>
                    </div>

                    <!-- Années 1990 -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">ANNÉES 1990. LA GENÈSE</h2>
                        <div class="content-text">
                            <p>Michelle et Guy CASSAR, la mère de Benjamin crée en 1988 une première classe intégrée au sein de l'école élémentaire privée sous contrat d'association, Ozar Hatorah (Paris 20°). Cinq jeunes enfants en situation de handicap mental, âgés de 6 à 9 ans, y sont accueillis et accompagnés par une équipe pluridisciplinaire thérapeutique et éducative.</p>
                            
                            <p>Elle se bat pour imposer un accompagnement qui ne délaisse ni n'ignore les pratiques philosophiques ou religieuses. Elle établit un partenariat avec le CMPP et l'OSE pour le suivi médical et psychologique.</p>
                            
                            <p>Les enfants accueillis et « intégrés » sont heureux, et les parents ravis de voir leur enfant s'épanouir enfin.</p>
                            
                            <p>Dès l'année suivante, d'autres parents souhaitent rejoindre cette « aventure. Les demandes affluent. Les parents se sentent moins isolés, plus soutenus grâce à l'accompagnement mis en œuvre au profit de leur enfant.</p>
                            
                            <p>Forte de ces succès et encouragée par le CMPP et d'autres institutions de soins intervenant auprès d'enfants en situation de handicap, Michelle CASSAR crée l'Association Benjamin Pour l'Intégration d'Enfants Handicapés (ABPIEH), en mémoire à Benjamin décédé en 1993.</p>
                            
                            <p>Grâce à la contribution de généreux donateurs, du soutien décisif du Fonds Social juif Unifié et de l'apport de bénévoles, l'association se développe, au cours de cette décennie. Pour accompagner les enfants au plus proche de leurs besoins, elle met en place une équipe pluridisciplinaire, socioéducative et thérapeutique, développe un partenariat avec l'Éducation nationale qui met à disposition une professeure des écoles spécialisée.</p>
                        </div>
                    </div>

                    <!-- Années 2000 -->
                    <div class="content-block mb-5">
                        <h2 class="h3 mb-4 text-primary">ANNÉES 2000 : LA RECONNAISSANCE</h2>
                        <div class="content-text">
                            <p>En 2000, la DDASS autorise la création d'un SESSAD et d'un IME-IMPRO. L'agrément du SESSAD prévoit l'accueil de 40 enfants et adolescents en situation de handicap psychique, celui de l'IME-IMPRO l'accueil de 25 jeunes.</p>
                            
                            <p>En 2009, l'agrément IME-IMPRO est étendu à l'accueil de 15 jeunes supplémentaires avec autisme ou souffrant de troubles du spectre de l'autisme (TSA). L'association BENJAMIN s'installe en mai 2007 dans ses locaux actuels, du 10 rue Juliette Dodu – Paris 10°.</p>
                        </div>
                    </div>

                    <!-- Retour vers les autres pages -->
                    <div class="text-center mt-5">
                        <a href="{{ url('/qui-sommes-nous/valeurs') }}" class="btn btn-primary me-3">Nos Valeurs</a>
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
