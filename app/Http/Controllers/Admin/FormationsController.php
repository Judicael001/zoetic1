<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\formations;

class FormationsController extends Controller
{
    // Liste des formations
    public function index()
    {
        $formations = formations::latest()->get();
        return view('admin.formations.index', compact('formations'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        return view('admin.formations.create');
    }

    // Enregistre une nouvelle formation
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duree' => 'required|integer|min:1',
            'prix' => 'required|numeric|min:0',
        ]);

        formations::create($request->all());

        return redirect()->route('admin.formations.index')->with('success', 'Formation ajoutée avec succès.');
    }

    // Affiche le formulaire d'édition
    public function edit(formations $formation)
    {
        return view('admin.formations.edit', compact('formation'));
    }

    // Met à jour la formation
    public function update(Request $request, formations $formation)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duree' => 'required|integer|min:1',
            'prix' => 'required|numeric|min:0',
        ]);

        $formation->update($request->all());

        return redirect()->route('admin.formations.index')->with('success', 'Formation modifiée avec succès.');
    }

    // Supprime la formation
    public function destroy(formations $formation)
    {
        $formation->delete();
        return redirect()->route('admin.formations.index')->with('success', 'Formation supprimée.');
    }
}
