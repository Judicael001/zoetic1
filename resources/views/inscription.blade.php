@extends('layouts.app')

@section('content')
<section class="py-12 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-green-700 text-center mb-6">Formulaire d'inscription</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('inscription.store') }}" method="POST" class="space-y-4 bg-white shadow p-6 rounded">
        @csrf

        <div>
            <label for="nom" class="block font-medium">Nom</label>
            <input type="text" name="nom" id="nom" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label for="prenom" class="block font-medium">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label for="telephone" class="block font-medium">Téléphone</label>
            <input type="text" name="telephone" id="telephone" class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label for="formation_id" class="block font-medium">Choisir une formation</label>
            <select name="formation_id" id="formation_id" class="w-full border px-3 py-2 rounded" required>
                <option value="">-- Sélectionner une formation --</option>
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->titre }}</option>
                @endforeach
            </select>
        </div>


        <div>
            <label for="message" class="block font-medium">Message (optionnel)</label>
            <textarea name="message" id="message" class="w-full border px-3 py-2 rounded"></textarea>
        </div>

        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">
            S'inscrire
        </button>

        @if ($errors->any())
        <div class="mt-4 bg-red-100 text-red-800 p-4 rounded">
            <strong>Erreurs :</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </form>
</section>
@endsection
