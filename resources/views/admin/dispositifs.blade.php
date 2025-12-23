@extends('layouts.app')

@section('title', 'Gestion des dispositifs - Administration')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">
                    <i class="fas fa-cogs me-2"></i>
                    Gestion des dispositifs
                </h1>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Retour au tableau de bord
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Liste des dispositifs ({{ $dispositifs->count() }})
                    </h6>
                </div>
                <div class="card-body">
                    @if($dispositifs->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Ordre</th>
                                        <th>Nom</th>
                                        <th>Slug</th>
                                        <th>Couleur</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dispositifs as $dispositif)
                                    <tr class="{{ !$dispositif->actif ? 'table-secondary' : '' }}">
                                        <td>
                                            <span class="badge bg-primary">{{ $dispositif->ordre }}</span>
                                        </td>
                                        <td>
                                            <strong>{{ $dispositif->nom }}</strong>
                                        </td>
                                        <td>
                                            <code>{{ $dispositif->slug }}</code>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="color-preview me-2" 
                                                     style="width: 20px; height: 20px; background-color: {{ $dispositif->couleur }}; border-radius: 3px; border: 1px solid #ddd;">
                                                </div>
                                                <small>{{ $dispositif->couleur }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            @if($dispositif->description)
                                                {{ Str::limit($dispositif->description, 50) }}
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($dispositif->image)
                                                <img src="{{ $dispositif->image_url }}" 
                                                     alt="{{ $dispositif->nom }}" 
                                                     class="img-thumbnail" 
                                                     style="max-width: 50px; max-height: 50px;">
                                            @else
                                                <span class="text-muted">Aucune</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($dispositif->actif)
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check me-1"></i> Actif
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">
                                                    <i class="fas fa-times me-1"></i> Inactif
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="/dispositifs/{{ $dispositif->slug }}" 
                                                   target="_blank"
                                                   class="btn btn-sm btn-outline-primary" 
                                                   title="Voir la page">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <form method="POST" action="{{ route('admin.dispositif.toggle', $dispositif) }}" 
                                                      class="d-inline">
                                                    @csrf
                                                    <button type="submit" 
                                                            class="btn btn-sm {{ $dispositif->actif ? 'btn-outline-warning' : 'btn-outline-success' }}" 
                                                            title="{{ $dispositif->actif ? 'Désactiver' : 'Activer' }}">
                                                        <i class="fas {{ $dispositif->actif ? 'fa-pause' : 'fa-play' }}"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">Aucun dispositif trouvé</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Informations -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-info">
                <div class="card-header bg-info text-white">
                    <h6 class="m-0">
                        <i class="fas fa-info-circle me-2"></i>
                        Informations
                    </h6>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Ordre :</strong> Détermine l'ordre d'affichage des dispositifs sur le site</li>
                        <li><strong>Slug :</strong> Identifiant unique utilisé dans l'URL (ex: /dispositifs/ueea)</li>
                        <li><strong>Couleur :</strong> Couleur associée au dispositif pour l'affichage</li>
                        <li><strong>Statut :</strong> Seuls les dispositifs actifs sont visibles sur le site public</li>
                    </ul>
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
