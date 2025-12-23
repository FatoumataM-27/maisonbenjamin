@extends('layouts.app')

@section('title', 'Gestion des contacts - Administration')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">
                    <i class="fas fa-envelope me-2"></i>
                    Gestion des messages de contact
                </h1>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Retour au tableau de bord
                </a>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.contacts') }}" class="row g-3">
                        <div class="col-md-4">
                            <label for="statut" class="form-label">Statut</label>
                            <select name="statut" id="statut" class="form-select">
                                <option value="">Tous les messages</option>
                                <option value="non_traite" {{ request('statut') == 'non_traite' ? 'selected' : '' }}>
                                    Non traités
                                </option>
                                <option value="traite" {{ request('statut') == 'traite' ? 'selected' : '' }}>
                                    Traités
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="search" class="form-label">Recherche</label>
                            <input type="text" name="search" id="search" class="form-control" 
                                   placeholder="Nom, email, sujet..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-search me-1"></i> Filtrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des messages -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Messages de contact ({{ $contacts->total() }} résultats)
                    </h6>
                </div>
                <div class="card-body">
                    @if($contacts->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Nom complet</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Sujet</th>
                                        <th>Message</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                    <tr class="{{ !$contact->traite ? 'table-warning' : '' }}">
                                        <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <strong>{{ $contact->nom_complet }}</strong>
                                        </td>
                                        <td>
                                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                        </td>
                                        <td>
                                            @if($contact->telephone)
                                                <a href="tel:{{ $contact->telephone }}">{{ $contact->telephone }}</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($contact->sujet, 30) }}</td>
                                        <td>{{ Str::limit($contact->message, 50) }}</td>
                                        <td>
                                            @if($contact->traite)
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check me-1"></i> Traité
                                                </span>
                                            @else
                                                <span class="badge bg-warning">
                                                    <i class="fas fa-clock me-1"></i> Non traité
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.contact.voir', $contact) }}" 
                                                   class="btn btn-sm btn-outline-primary" title="Voir le détail">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                @if(!$contact->traite)
                                                    <form method="POST" action="{{ route('admin.contact.marquer-traite', $contact) }}" 
                                                          class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-outline-success" 
                                                                title="Marquer comme traité">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $contacts->appends(request()->query())->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">Aucun message trouvé</h5>
                            <p class="text-muted">Aucun message ne correspond à vos critères de recherche.</p>
                        </div>
                    @endif
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
@endsection
