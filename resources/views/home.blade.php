@extends('layouts.app')

@section('content')
    <div class="text-center mb-5">
        <h2 class="fw-bold">Bienvenue sur ZoeTIC</h2>
        <p class="text-muted">Votre partenaire en informatique : formation, maintenance et cybersécurité</p>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Bureautique</h5>
                    <p class="card-text">Formations sur Word, Excel, PowerPoint et outils bureautiques.</p>
                    <a href="#" class="btn btn-primary btn-sm">Découvrir</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Cybersécurité</h5>
                    <p class="card-text">Ateliers pratiques sur la protection des données et des systèmes.</p>
                    <a href="#" class="btn btn-primary btn-sm">Découvrir</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Programmation</h5>
                    <p class="card-text">Apprenez à coder en Python, JavaScript, PHP et plus encore.</p>
                    <a href="#" class="btn btn-primary btn-sm">Découvrir</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Outils collaboratifs</h5>
                    <p class="card-text">Formation sur Teams, Slack, Google Workspace, etc.</p>
                    <a href="#" class="btn btn-primary btn-sm">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
@endsection
