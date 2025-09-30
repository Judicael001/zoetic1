@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Bureautique</h2>
    <p>Dans cette formation, vous apprendrez à utiliser Word, Excel, PowerPoint et d’autres outils bureautiques de manière efficace. Nous couvrons :</p>
    <ul>
        <li>Création de documents professionnels</li>
        <li>Formules et tableaux dans Excel</li>
        <li>Présentations PowerPoint impactantes</li>
        <li>Astuces pour gagner du temps dans votre travail quotidien</li>
    </ul>
    <a href="{{ route('home') }}" class="btn btn-secondary">Retour à l'accueil</a>
</div>
@endsection
