@extends('layouts.app')

@section('content')

<!-- CECI EST LE CONTENU DE TA PAGE D’ACCUEIL -->

<section class="text-center py-10 bg-gray-100">
    <h1 class="text-4xl font-bold text-green-700">Bienvenue sur ZoeTIC</h1>
    <p class="mt-4 text-lg text-gray-600">Des formations informatiques pour tous</p>
    <a href="{{ url('/formations') }}" class="mt-6 inline-block bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">
        Découvrir nos formations
    </a>
</section>

@endsection
