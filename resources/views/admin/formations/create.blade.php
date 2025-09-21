@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">Ajouter une formation</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.formations.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nom" class="block font-medium">Nom</label>
            <input type="text" name="nom" id="nom" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" class="w-full border p-2 rounded" required></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Enregistrer
        </button>
    </form>
</div>
@endsection
