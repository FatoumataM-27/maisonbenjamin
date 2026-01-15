<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Maison Benjamin</title>
    <meta name="description" content="@yield('meta_description', 'Association Maison Benjamin - Un parcours pour la vie')">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#6667ad">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Core+Mellow:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Core Mellow';
            src: url('{{ asset('fonts/CoreMellow35Light.woff2') }}') format('woff2'),
                 url('{{ asset('fonts/CoreMellow35Light.woff') }}') format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Core Mellow';
            src: url('{{ asset('fonts/CoreMellow45Regular.woff2') }}') format('woff2'),
                 url('{{ asset('fonts/CoreMellow45Regular.woff') }}') format('woff');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Core Mellow';
            src: url('{{ asset('fonts/CoreMellow55Medium.woff2') }}') format('woff2'),
                 url('{{ asset('fonts/CoreMellow55Medium.woff') }}') format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Core Mellow';
            src: url('{{ asset('fonts/CoreMellow65Bold.woff2') }}') format('woff2'),
                 url('{{ asset('fonts/CoreMellow65Bold.woff') }}') format('woff');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
    </style>
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Variables de couleurs */
        :root {
            --primary: #6967bd;
            --secondary: #C9A55C;
            --dark: #212529;
            --light: #F8F9FA;
            --ueea-color: #85B125;
            --uema-color: #ec6726;
            --emasco-color: #961478;
        }
        
        /* Styles de base */
        body {
            font-family: 'Barlow', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            font-weight: 400;
            line-height: 1.6;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Core Mellow', serif;
            color: var(--primary);
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        
        /* Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 50px;
            width: auto;
        }
        
        
        .navbar-brand .fs-4 {
            font-family: 'Core Mellow', serif;
            letter-spacing: 0.5px;
        }
        
        .navbar-brand .fs-6 {
            font-family: 'Barlow', sans-serif;
            font-weight: 300;
            font-style: italic;
        }
        
        .nav-link {
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary);
            background-color: rgba(218, 165, 32, 0.1);
        }
        
        
        .nav-link.active {
            color: var(--primary);
            background-color: rgba(218, 165, 32, 0.15);
            font-weight: 600;
        }
        
        /* Boutons */
        .btn {
            font-weight: 500;
            letter-spacing: 0.3px;
            padding: 0.5rem 1.5rem;
            transition: all 0.2s ease-in-out;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: #5553a9;
            border-color: #5553a9;
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            border-color: var(--secondary);
            color: #fff;
        }
        
        .btn-secondary:hover {
            background-color: #b8944f;
            border-color: #b8944f;
            color: #fff;
        }
        
        /* Styles pour les boutons dans la navbar */
        .navbar .btn {
            font-size: 0.9rem;
            padding: 0.4rem 1rem;
            margin-left: 0.3rem;
            border-radius: 20px;
            font-weight: 500;
            white-space: nowrap;
        }
        
        
        .navbar .nav-item:last-child .btn {
            margin-left: 0.5rem;
        }
        
        .navbar .btn-outline-secondary {
            border-color: var(--secondary);
            color: var(--secondary);
        }
        
        .navbar .btn-outline-secondary:hover {
            background-color: var(--secondary);
            border-color: var(--secondary);
            color: #fff;
        }
        
        /* Hero section avec vidéo */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            overflow: hidden;
        }
        
        .hero .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
        }
        
        .hero .video-background video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
        
        .hero .container {
            position: relative;
            z-index: 1;
        }
        
        .hero h2 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        
        .hero .btn {
            font-size: 1.1rem;
            padding: 0.75rem 2rem;
            text-shadow: none;
        }
        
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }
        }
        
        /* Hero section ancienne version */
        .hero-section {
            background-color: var(--primary);
            color: #fff;
            padding: 5rem 0;
        }
        
        .hero-section h1 {
            color: #fff;
            font-weight: 700;
        }
        
        /* Cards */
        .card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Footer */
        footer {
            background-color: var(--primary);
            color: #fff;
            padding: 3rem 0;
        }
        
        footer h5 {
            color: #fff;
            margin-bottom: 1.5rem;
        }
        
        footer a {
            color: #e9ecef;
        }
        
        footer a:hover {
            color: #fff;
        }
        
        /* Sections */
        .section {
            padding: 5rem 0;
        }
        
        .partner-logo {
            max-height: 80px;
            max-width: 150px;
            object-fit: contain;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }
        
        .partner-logo:hover {
            filter: grayscale(0%);
            transform: scale(1.05);
        }
        
        /* Pages intérieures */
        .hero-page {
            background: linear-gradient(135deg, #6967bd 0%, #8e44ad 100%);
            color: white;
            padding: 8rem 0 4rem;
            text-align: center;
        }
        
        .content-block {
            border-left: 4px solid #6967bd;
            padding-left: 2rem;
        }
        
        .content-text p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            text-align: justify;
        }
        
        .values-list {
            list-style: none;
            padding-left: 0;
        }
        
        .values-list li {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
            line-height: 1.7;
        }
        
        .values-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #6967bd;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
    </style>
    
    <style>
        /* Styles pour la section hero */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            overflow: hidden;
        }
        
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .video-background video {
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 1rem;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        
        /* Styles pour les cartes de services */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 0.75rem;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(105, 103, 189, 0.1);
            border-radius: 50%;
        }
        
        /* Application de la police Barlow */
        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-weight: 600;
            line-height: 1.3;
        }
        
        /* Amélioration de la lisibilité des titres */
        .section-title {
            font-weight: 700;
            color: #2c3e50;
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #6967bd;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.25rem;
            }
            
            .hero-content {
                padding: 1.5rem;
            }
            
            .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 1rem;
            }
            
            h1, .h1 { font-size: 2rem; }
            h2, .h2 { font-size: 1.75rem; }
            h3, .h3 { font-size: 1.5rem; }
        }
        
        /* Styles pour les cartes de contact */
        .contact-info {
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .contact-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
    </style>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- Logo ou image à la place du texte -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('association*') ? 'active' : '' }}" href="{{ url('/association') }}">Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nos services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                                <li><a class="dropdown-item" href="{{ url('/services') }}">Tous nos services</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ url('/services/ime-impro') }}">IME / IMPRO</a></li>
                                <li><a class="dropdown-item" href="{{ url('/services/sessad') }}">SESSAD</a></li>
                                <li><a class="dropdown-item" href="{{ url('/services/picors') }}">PICORS</a></li>
                                <li><a class="dropdown-item" href="{{ url('/services/mas') }}">MAS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ url('/services/picors/ueea') }}">UEEA Cesbron</a></li>
                                <li><a class="dropdown-item" href="{{ url('/services/picors/uema') }}">UEMA Joseph de Maistre</a></li>
                                <li><a class="dropdown-item" href="{{ url('/services/picors/emasco') }}">EMASCO PARIS-EST</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('activites*') ? 'active' : '' }}" href="{{ route('activites.index') }}">Activités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('galerie*') ? 'active' : '' }}" href="{{ route('galerie.index') }}">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="ms-auto d-flex gap-2 align-items-center">
                        <a href="https://www.helloasso.com/associations/association-benjamin/adhesions/devenez-membre-de-l-association" target="_blank" class="btn btn-outline-primary btn-sm">Devenir membre</a>
                        <a href="https://www.helloasso.com/associations/association-benjamin/formulaires/1" target="_blank" class="btn btn-success btn-sm">Faire un don</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white">Maison Benjamin</h5>
                    <p class="text-light">Association pour l'accompagnement d'enfants et jeunes adultes en situation de handicap mental et psychique.</p>
                    <p class="text-light">
                        <i class="fas fa-map-marker-alt me-2"></i> 2B VILLA THORETON, PARIS 15<br>
                        <i class="fas fa-phone me-2"></i> 01 43 58 00 71<br>
                        <i class="fas fa-envelope me-2"></i> comm@maisonbenjamin.org
                    </p>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ url('/') }}" class="text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="{{ url('/notre-histoire') }}" class="text-decoration-none">Notre Histoire</a></li>
                        <li class="mb-2"><a href="{{ url('/nos-valeurs') }}" class="text-decoration-none">Nos Valeurs</a></li>
                        <li class="mb-2"><a href="{{ url('/services') }}" class="text-decoration-none">Nos Services</a></li>
                        <li class="mb-2"><a href="{{ url('/services/picors') }}" class="text-decoration-none">PICORS</a></li>
                        <li class="mb-2"><a href="{{ url('/services/mas') }}" class="text-decoration-none">MAS</a></li>
                        <li class="mb-2"><a href="{{ url('/activites') }}" class="text-decoration-none">Activités</a></li>
                        <li class="mb-2"><a href="{{ url('/galerie') }}" class="text-decoration-none">Galerie</a></li>
                        <li class="mb-2"><a href="{{ url('/contact') }}" class="text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white">Nos dispositifs</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ url('/services/picors/ueea') }}" class="text-decoration-none">UEEA Cesbron</a></li>
                        <li class="mb-2"><a href="{{ url('/services/picors/uema') }}" class="text-decoration-none">UEMA Joseph de Maistre</a></li>
                        <li class="mb-2"><a href="{{ url('/services/picors/emasco') }}" class="text-decoration-none">EMASCO PARIS-EST</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-light">&copy; {{ date('Y') }} Maison Benjamin. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <h6 class="text-white mb-3">Suivez-nous</h6>
                    <a href="https://www.tiktok.com/@maisonbenjamin1?lang=en" class="text-light me-3" target="_blank" title="TikTok">
                        <i class="fab fa-tiktok fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/maison_benjamin1/" class="text-light me-3" target="_blank" title="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-light me-3" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/association-benjamin-pour-l-int%C3%A9gration-d-enfants-handicap%C3%A9s/" class="text-light" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialisation des tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Initialisation des popovers
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            popoverTriggerList.forEach(function (popoverTriggerEl) {
                new bootstrap.Popover(popoverTriggerEl);
            });

            // Gestion du menu mobile
            const navbarToggler = document.querySelector('.navbar-toggler');
            if (navbarToggler) {
                navbarToggler.addEventListener('click', function() {
                    document.body.classList.toggle('mobile-menu-open');
                });
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
