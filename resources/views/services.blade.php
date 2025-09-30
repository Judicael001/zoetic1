@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">Nos Services</h1>
    <p class="text-muted">Découvrez nos formations et services en informatique, adaptés à tous les besoins.</p>
</div>

<div class="row g-4">
    <!-- Service 1 : Bureautique -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <img src="{{ asset('assets/images/bureautique.jpg') }}" class="card-img-top" alt="Bureautique">
            <div class="card-body text-center">
                <h5 class="card-title">Bureautique</h5>
                <p class="card-text">Formations sur Word, Excel, PowerPoint et autres outils professionnels.</p>
                <a href="{{ route('formations.bureautique') }}" class="btn btn-primary btn-sm">Découvrir</a>
            </div>
        </div>
    </div>

    <!-- Service 2 : Cybersécurité -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <img src="{{ asset('assets/images/cybersecurite.jpg') }}" class="card-img-top" alt="Cybersécurité">
            <div class="card-body text-center">
                <h5 class="card-title">Cybersécurité</h5>
                <p class="card-text">Ateliers pratiques sur la protection des données et la prévention des cyberattaques.</p>
                <a href="{{ route('formations.cybersecurite') }}" class="btn btn-primary btn-sm">Découvrir</a>
            </div>
        </div>
    </div>

    <!-- Service 3 : Programmation -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <img src="{{ asset('assets/images/programmation.jpg') }}" class="card-img-top" alt="Programmation">
            <div class="card-body text-center">
                <h5 class="card-title">Programmation</h5>
                <p class="card-text">Apprenez à coder en Python, PHP, JavaScript et créer vos propres applications.</p>
                <a href="{{ route('formations.programmation') }}" class="btn btn-primary btn-sm">Découvrir</a>
            </div>
        </div>
    </div>

    <!-- Service 4 : Outils collaboratifs -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <img src="{{ asset('assets/images/outils.jpg') }}" class="card-img-top" alt="Outils collaboratifs">
            <div class="card-body text-center">
                <h5 class="card-title">Outils collaboratifs</h5>
                <p class="card-text">Formation sur Teams, Slack, Google Workspace pour mieux collaborer en équipe.</p>
                <a href="{{ route('formations.outils') }}" class="btn btn-primary btn-sm">Découvrir</a>
            </div>
        </div>
    </div>
</div>
@endsection
