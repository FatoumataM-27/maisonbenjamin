@extends('layouts.app')

@section('title', 'Contact')

@section('meta_description', 'Contactez l\'association Maison Benjamin pour toute information sur nos structures et dispositifs d\'accompagnement des enfants et jeunes adultes en situation de handicap.')

@section('content')
    <!-- Section Hero Contact -->
    <section class="hero-section hero-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Contact</h1>
                    <p class="lead">Nous sommes à votre écoute pour toute question ou information</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Informations de contact -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="contact-info p-4 h-100">
                        <h3 class="mb-4">Coordonnées</h3>
                        <div class="mb-4">
                            <h5><i class="fas fa-map-marker-alt me-2 text-primary"></i> Adresse</h5>
                            <p class="mb-0">2B VILLA THORETON</p>
                            <p>75015 PARIS</p>
                        </div>
                        <div class="mb-4">
                            <h5><i class="fas fa-phone me-2 text-primary"></i> Téléphone</h5>
                            <p>01 43 58 00 71</p>
                        </div>
                        <div class="mb-4">
                            <h5><i class="fas fa-envelope me-2 text-primary"></i> Email</h5>
                            <p>contact@maisonbenjamin.org</p>
                            <p class="small text-muted">Pour les demandes administratives, professionnelles et institutionnelles</p>
                        </div>
                        <div class="mb-4">
                            <h5><i class="fas fa-envelope me-2 text-primary"></i> Communication</h5>
                            <p>comm@maisonbenjamin.org</p>
                            <p class="small text-muted">Pour les demandes liées à la communication, aux médias et aux projets graphiques</p>
                        </div>
                        <div>
                            <h5><i class="fas fa-clock me-2 text-primary"></i> Horaires</h5>
                            <p class="mb-0">Lundi - Jeudi</p>
                            <p>9h00 - 16h15</p>
                            <p class="mb-0">Vendredi</p>
                            <p>9h00 - 14h00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4">Envoyez-nous un message</h3>
                            
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form id="contactForm" action="{{ url('/contact') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                                        @error('nom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="sujet" class="form-label">Sujet <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('sujet') is-invalid @enderror" id="sujet" name="sujet" value="{{ old('sujet') }}" required>
                                    @error('sujet')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                    @error('g-recaptcha-response')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Carte -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.9376304788146!2d2.2935982!3d48.8362899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6703d4e8d4b3f%3A0x4a32abe0d7a54b0a!2s2b%20Villa%20Thoreton%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1693571234567!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Accessibilité et Recrutement -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="mb-4"><i class="fas fa-wheelchair me-2 text-primary"></i> Accessibilité</h3>
                            <p>Nos locaux sont accessibles aux personnes à mobilité réduite.</p>
                            <p>Nous nous engageons à rendre nos services accessibles à tous et à mettre en place les aménagements nécessaires pour faciliter votre visite et votre participation à nos activités.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="mb-4"><i class="fas fa-users me-2 text-primary"></i> Rejoignez-nous</h3>
                            <p>Nous recherchons régulièrement des professionnels, en accord avec les valeurs de notre association, pour rejoindre notre aventure.</p>
                            <p>Si vous partagez notre engagement pour l'inclusion et souhaitez contribuer à notre mission, n'hésitez pas à nous contacter pour connaître nos opportunités de recrutement.</p>
                            <a href="mailto:contact@maisonbenjamin.org" class="btn btn-primary mt-3">Postuler</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                // Validation côté client
                let isValid = true;
                const requiredFields = ['nom', 'email', 'sujet', 'message'];
                
                requiredFields.forEach(field => {
                    const input = document.getElementById(field);
                    if (!input.value.trim()) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                // Validation email
                const emailInput = document.getElementById('email');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailInput.value && !emailRegex.test(emailInput.value)) {
                    emailInput.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                }
            });
        }
    });
</script>
@endpush
