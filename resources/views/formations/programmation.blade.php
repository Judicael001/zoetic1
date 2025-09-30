@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Programmation</h2>
    <p>Apprenez à coder et à développer vos propres applications. La formation couvre :</p>
    <ul>
        <li>Introduction à Python : bases, scripts, automatisation</li>
        <li>JavaScript pour le web et le front-end</li>
        <li>PHP et création d’applications web dynamiques</li>
        <li>Notions de frameworks modernes (Laravel, React, etc.)</li>
        <li>Exercices pratiques pour créer vos propres projets</li>
    </ul>
    <a href="{{ route('home') }}" class="btn btn-secondary">Retour à l'accueil</a>
</div>
@endsection
