@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px;">

        <!-- Logo Zoetic rond -->
        <div class="mb-3 text-center">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Zoetic" style="width: 120px;">
        </div>

        <h3 class="text-center mb-4">Inscription à une formation</h3>

        @if(session('success')) <div class="alert alert-success"> {{ session('success') }} </div> @endif

        <form method="POST" action="{{ route('inscription.store') }}">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prénom" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Votre email" required>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone :</label>
                <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="Votre numéro" required>
            </div>

            <div class="mb-3">
                <label for="formation" class="form-label">Choisissez une formation :</label>
                <select name="formation" id="formation" class="form-select" required>
                    <option value="" disabled selected>-- Sélectionnez une formation --</option>
                    <option value="Laravel">Laravel</option>
                    <option value="Next.js">Next.js</option>
                    <option value="Flutter">Flutter</option>
                    <option value="Cybersécurité">Cybersécurité</option>
                    <option value="Bureautique">Bureautique</option>
                </select>
            </div>

            <button type="submit" class="btn  btn-success w-100">S'inscrire</button>
        </form>

        <!-- Contact de l'entreprise -->
        <div class="mt-4 text-center">
            <h5>Contactez-nous</h5>
            <p class="mb-1"><strong>Email :</strong> contact@zoetic.com</p>
            <p class="mb-1"><strong>Téléphone :</strong> +225 07 00 00 00 00</p>
            <p class="mb-1"><strong>Adresse :</strong> Riviera Golf 4, Abidjan, Côte d'Ivoire</p>
        </div>
    </div>
</div>
@endsection
