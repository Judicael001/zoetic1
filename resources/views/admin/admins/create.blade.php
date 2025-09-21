@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Créer un administrateur</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.admins.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-medium">Nom</label>
            <input type="text" name="name" id="name"
                   class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email"
                   class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block font-medium">Mot de passe</label>
            <input type="password" name="password" id="password"
                   class="w-full border rounded p-2" required>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Enregistrer
        </button>
    </form>
</div>
@endsection
