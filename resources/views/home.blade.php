@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h2 class="fw-bold">Bienvenue sur Zoetic</h2>
    <p class="text-muted">Votre partenaire en informatique : formation, maintenance et cybersécurité</p>
</div>

@php
$services = [
    [
        'title' => 'Bureautique',
        'description' => 'Formations sur Word, Excel, PowerPoint et outils bureautiques.',
        'route' => 'formations.bureautique',
        'image' => 'bureautique.jpg',
    ],
    [
        'title' => 'Cybersécurité',
        'description' => 'Ateliers pratiques sur la protection des données et des systèmes.',
        'route' => 'formations.cybersecurite',
        'image' => 'cybersecurite.jpg',
    ],
    [
        'title' => 'Programmation',
        'description' => 'Apprenez à coder en Python, JavaScript, PHP et plus encore.',
        'route' => 'formations.programmation',
        'image' => 'programmation.jpg',
    ],
    [
        'title' => 'Outils collaboratifs',
        'description' => 'Formation sur Teams, Slack, Google Workspace, etc.',
        'route' => 'formations.outils',
        'image' => 'outils.jpg',
    ],
];
@endphp

<div class="row g-4">
    @foreach($services as $service)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                @if(isset($service['image']))
                    <img src="{{ asset('assets/images/' . $service['image']) }}" class="card-img-top" alt="{{ $service['title'] }}">
                @endif
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $service['title'] }}</h5>
                    <p class="card-text">{{ $service['description'] }}</p>
                    <a href="{{ route($service['route']) }}" class="btn  btn-success btn-sm">Découvrir</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
