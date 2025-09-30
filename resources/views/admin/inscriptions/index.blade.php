@extends('layouts.app')

@section('content')
<h1>Liste des inscriptions</h1>

@if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Formation</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inscriptions as $inscription)
        <tr>
            <td>{{ $inscription->nom }}</td>
            <td>{{ $inscription->prenom }}</td>
            <td>{{ $inscription->email }}</td>
            <td>{{ $inscription->telephone }}</td>
            <td>{{ $inscription->formation }}</td>
            <td>{{ ucfirst($inscription->statut) }}</td>
            <td>
                @if($inscription->statut == 'en_attente')
                    <form method="POST" action="{{ route('admin.inscriptions.valider', $inscription->id) }}" style="display:inline;">
                        @csrf
                        <button class="btn btn-success btn-sm">Valider</button>
                    </form>
                    <form method="POST" action="{{ route('admin.inscriptions.refuser', $inscription->id) }}" style="display:inline;">
                        @csrf
                        <button class="btn btn-danger btn-sm">Refuser</button>
                    </form>
                @else
                    <span class="badge bg-{{ $inscription->statut == 'valide' ? 'success' : 'danger' }}">
                        {{ ucfirst($inscription->statut) }}
                    </span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
