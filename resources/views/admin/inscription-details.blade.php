@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-2xl font-semibold mb-4">Détails de l’inscription</h2>

    <div class="bg-white p-6 rounded shadow">
        <p><strong>Nom :</strong> {{ $inscription->user->nom }}</p>
        <p><strong>Prénom :</strong> {{ $inscription->user->prenom }}</p>
        <p><strong>Email :</strong> {{ $inscription->user->email }}</p>
        <p><strong>Téléphone :</strong> {{ $inscription->user->telephone }}</p>
        <p><strong>Formation :</strong> {{ $inscription->formation->titre ?? 'Non précisé' }}</p>
        <p><strong>Message :</strong> {{ $inscription->message }}</p>
        <p><strong>Date :</strong> {{ $inscription->date_inscription }}</p>
        <p><strong>Statut :</strong> {{ $inscription->statut }}</p>
    </div>

    <a href="{{ route('admin.inscriptions') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">← Retour</a>
</div>
@endsection
