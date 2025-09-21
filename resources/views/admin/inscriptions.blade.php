@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Liste des inscriptions</h1>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif


        @if($inscriptions->count())
            <table class="min-w-full border border-gray-300 bg-white shadow-md rounded">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 border">Nom</th>
                        <th class="p-3 border">Prénom</th>
                        <th class="p-3 border">Email</th>
                        <th class="p-3 border">Formation</th>
                        <th class="p-3 border">Statut</th>
                        <th class="p-3 border">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inscriptions as $inscription)
                        <tr class="border-t">
                            <td class="p-3 border">{{ $inscription->user->nom }}</td>
                            <td class="p-3 border">{{ $inscription->user->prenom }}</td>
                            <td class="p-3 border">{{ $inscription->user->email }}</td>
                            <td class="p-3 border">{{ $inscription->formation->titre ?? 'Formation supprimée' }}</td>
                        <td class="p-3 border">
                            <form action="{{ route('admin.inscriptions.updateStatut', $inscription->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="statut" class="border px-2 py-1 rounded text-sm" onchange="this.form.submit()">
                                    <option value="en attente" {{ $inscription->statut == 'en attente' ? 'selected' : '' }}>En attente</option>
                                    <option value="confirmée" {{ $inscription->statut == 'confirmée' ? 'selected' : '' }}>Confirmée</option>
                                    <option value="annulée" {{ $inscription->statut == 'annulée' ? 'selected' : '' }}>Annulée</option>
                                </select>
                            </form>
                        </td>
                            <td class="p-3 border">{{ $inscription->date_inscription }}</td>
                            <td class="p-3 border">
                                <a href="{{ route('admin.inscriptions.show', $inscription->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                    Voir
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-500">Aucune inscription trouvée.</p>
        @endif
    </div>
@endsection
