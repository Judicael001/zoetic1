@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cybersécurité</h2>
    <p>Cette formation vous permettra de protéger vos données et vos systèmes informatiques. Au programme :</p>
    <ul>
        <li>Principes de base de la cybersécurité</li>
        <li>Protection des données personnelles et professionnelles</li>
        <li>Détection et prévention des cyberattaques</li>
        <li>Bonnes pratiques pour sécuriser vos mots de passe et comptes en ligne</li>
        <li>Ateliers pratiques et études de cas réels</li>
    </ul>
    <a href="{{ route('home') }}" class="btn btn-secondary">Retour à l'accueil</a>
</div>
@endsection
