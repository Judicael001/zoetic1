@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Modifier un administrateur</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-medium">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name', $admin->name) }}"
                   class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}"
                   class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block font-medium">Nouveau mot de passe (laisser vide pour ne pas changer)</label>
            <input type="password" name="password" id="password"
                   class="w-full border rounded p-2">
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Enregistrer les modifications
        </button>
    </form>
</div>
@endsection
