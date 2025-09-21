@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 shadow rounded">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Liste des formations</h2>
        <a href="{{ route('admin.formations.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Ajouter une formation
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 border border-green-400 rounded p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Nom</th>
                <th class="px-4 py-2 text-left">Description</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formations as $formation)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $formation->nom }}</td>
                <td class="px-4 py-2">{{ Str::limit($formation->description, 50) }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('admin.formations.edit', $formation) }}"
                       class="text-blue-600 hover:underline">Modifier</a>
                    <form action="{{ route('admin.formations.destroy', $formation) }}" method="POST" class="inline"
                          onsubmit="return confirm('Supprimer cette formation ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
