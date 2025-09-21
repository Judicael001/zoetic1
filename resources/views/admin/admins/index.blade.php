@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif


<a href="{{ route('admin.admins.create') }}"
   class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
   + Ajouter un administrateur
</a>

<div class="max-w-4xl mx-auto mt-10 bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold mb-6">Liste des administrateurs</h2>

    <table class="min-w-full bg-white">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="py-2 px-4">Nom</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Créé le</th>
                <th class="py-2 px-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $admin->name }}</td>
                    <td class="py-2 px-4">{{ $admin->email }}</td>
                    <td class="py-2 px-4">{{ $admin->created_at->format('d/m/Y H:i') }}</td>
                    <td class="py-2 px-4 text-right">
                        {{-- ✅ Bouton Modifier --}}
                        <a href="{{ route('admin.admins.edit', $admin->id) }}"
                        class="bg-yellow-400 text-black px-3 py-1 rounded hover:bg-yellow-500 mr-2">
                            Modifier
                        </a>

                        {{-- ✅ Bouton Supprimer (sauf si c’est l’admin connecté) --}}
                        @if ($admin->id !== auth('admin')->id())
                            <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST"
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur ?');"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Supprimer
                                </button>
                            </form>
                        @else
                            <span class="text-gray-400 italic">Connecté</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection
