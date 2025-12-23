@extends('layouts.app')

@section('title', 'Détail du message - Administration')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">
                    <i class="fas fa-envelope-open me-2"></i>
                    Détail du message
                </h1>
                <div>
                    <a href="{{ route('admin.contacts') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left me-1"></i> Retour à la liste
                    </a>
                    @if(!$contact->traite)
                        <form method="POST" action="{{ route('admin.contact.marquer-traite', $contact) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check me-1"></i> Marquer comme traité
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Message principal -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Message</h6>
                    @if($contact->traite)
                        <span class="badge bg-success">
                            <i class="fas fa-check me-1"></i> Traité
                        </span>
                    @else
                        <span class="badge bg-warning">
                            <i class="fas fa-clock me-1"></i> Non traité
                        </span>
                    @endif
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="text-primary">{{ $contact->sujet }}</h5>
                    </div>
                    <div class="message-content">
                        {!! nl2br(e($contact->message)) !!}
                    </div>
                </div>
            </div>

            <!-- Actions de réponse -->
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Actions de réponse</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->sujet }}" 
                               class="btn btn-primary w-100">
                                <i class="fas fa-reply me-2"></i>
                                Répondre par email
                            </a>
                        </div>
                        @if($contact->telephone)
                        <div class="col-md-6 mb-3">
                            <a href="tel:{{ $contact->telephone }}" class="btn btn-success w-100">
                                <i class="fas fa-phone me-2"></i>
                                Appeler
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Informations du contact -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations du contact</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom complet</label>
                        <p class="mb-0">{{ $contact->nom_complet }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Adresse email</label>
                        <p class="mb-0">
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        </p>
                    </div>
                    
                    @if($contact->telephone)
                    <div class="mb-3">
                        <label class="form-label fw-bold">Téléphone</label>
                        <p class="mb-0">
                            <a href="tel:{{ $contact->telephone }}">{{ $contact->telephone }}</a>
                        </p>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Date de réception</label>
                        <p class="mb-0">{{ $contact->created_at->format('d/m/Y à H:i') }}</p>
                    </div>
                    
                    <div class="mb-0">
                        <label class="form-label fw-bold">Dernière modification</label>
                        <p class="mb-0">{{ $contact->updated_at->format('d/m/Y à H:i') }}</p>
                    </div>
                </div>
            </div>

            <!-- Statistiques -->
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistiques</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Longueur du message</label>
                        <p class="mb-0">{{ strlen($contact->message) }} caractères</p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nombre de mots</label>
                        <p class="mb-0">{{ str_word_count($contact->message) }} mots</p>
                    </div>
                    
                    <div class="mb-0">
                        <label class="form-label fw-bold">Temps écoulé</label>
                        <p class="mb-0">{{ $contact->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div class="toast show" role="alert">
        <div class="toast-header">
            <i class="fas fa-check-circle text-success me-2"></i>
            <strong class="me-auto">Succès</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif

<style>
.message-content {
    background-color: #f8f9fa;
    padding: 1.5rem;
    border-radius: 0.5rem;
    border-left: 4px solid #007bff;
    font-size: 1.1rem;
    line-height: 1.6;
}
</style>
@endsection
