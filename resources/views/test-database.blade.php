@extends('layouts.app')

@section('title', 'Test de la Base de Données')

@section('content')
<div class="container py-5">
    <h1>Test de la Base de Données</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="h5 mb-0">Statut de la connexion</h2>
        </div>
        <div class="card-body">
            @if(isset($error))
                <div class="alert alert-danger">
                    <strong>Erreur de connexion :</strong> {{ $error }}
                </div>
            @else
                <div class="alert alert-success">
                    <strong>Connexion réussie !</strong> Base de données : {{ $results['database_name'] }}
                </div>
            @endif
        </div>
    </div>
    
    @if(isset($results) && !isset($error))
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h5 mb-0">Tables disponibles</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom de la table</th>
                                <th>Nombre d'enregistrements</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results['tables'] as $table => $count)
                                <tr>
                                    <td>{{ $table }}</td>
                                    <td>{{ $count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h2 class="h5 mb-0">Articles WordPress (5 premiers)</h2>
            </div>
            <div class="card-body">
                @if(isset($results['posts_error']))
                    <div class="alert alert-warning">
                        <strong>Erreur lors de la récupération des articles :</strong> {{ $results['posts_error'] }}
                    </div>
                @elseif(count($results['posts']) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results['posts'] as $post)
                                    <tr>
                                        <td>{{ $post['ID'] }}</td>
                                        <td>{{ $post['post_title'] }}</td>
                                        <td>{{ $post['post_date'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info">
                        Aucun article trouvé.
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
@endsection
