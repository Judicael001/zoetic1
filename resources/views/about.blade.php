@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">À propos de Zoetic</h1>
    <p class="text-muted">Votre partenaire de confiance en informatique, formation et cybersécurité</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
        <p>
            Fondée avec la mission de rendre l'informatique accessible et performante, Zoetic est une entreprise spécialisée dans la
            formation, la maintenance informatique et la cybersécurité. Nous accompagnons particuliers, étudiants et professionnels
            pour développer leurs compétences numériques et sécuriser leurs systèmes.
        </p>
        <p>
            Nos programmes de formation couvrent un large éventail de domaines, notamment :
        </p>
        <ul>
            <li>Bureautique : Word, Excel, PowerPoint et outils professionnels.</li>
            <li>Programmation : Python, PHP, JavaScript et développement web.</li>
            <li>Cybersécurité : protection des données, prévention des cyberattaques et bonnes pratiques.</li>
            <li>Outils collaboratifs : Teams, Slack, Google Workspace et gestion efficace des projets.</li>
        </ul>
        <p>
            Chez Zoetic, nous croyons en une approche pratique et personnalisée : chaque formation est conçue pour être interactive, adaptée
            aux besoins réels des participants et orientée vers des résultats concrets. Notre objectif est de vous donner les clés pour
            réussir dans un environnement numérique en constante évolution.
        </p>
        <p>
            Faites confiance à Zoetic pour transformer vos compétences digitales et sécuriser vos environnements informatiques.
        </p>
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('home') }}" class="btn btn-primary">Retour à l'accueil</a>
</div>
@endsection
