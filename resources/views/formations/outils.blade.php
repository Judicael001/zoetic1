@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Outils collaboratifs</h2>
    <p>Cette formation vous permettra de maîtriser les outils collaboratifs modernes pour mieux travailler en équipe :</p>
    <ul>
        <li>Microsoft Teams : réunions, partage de fichiers, collaboration en temps réel</li>
        <li>Slack : communication instantanée et organisation des projets</li>
        <li>Google Workspace : Docs, Sheets, Drive et agenda</li>
        <li>Conseils pour organiser le travail à distance efficacement</li>
        <li>Ateliers pratiques pour chaque outil</li>
    </ul>
    <a href="{{ route('home') }}" class="btn btn-secondary">Retour à l'accueil</a>
</div>
@endsection
