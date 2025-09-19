<?php

namespace App\Http\Controllers;

use App\Models\inscriptions;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formation;

class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'telephone' => 'nullable|string|max:20',
            'formation_id' => 'required|exists:formations,id',
            'message' => 'nullable|string|max:1000',
        ]);

        $user = User::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'] ?? null,
            'password' => bcrypt('secret'),
        ]);

        inscriptions::create([
            'user_id' => $user->id,
            'formation_id' => $validated['formation_id'],
            'message' => $validated['message'] ?? null,
            'statut' => 'en attente',
            'date_inscription' => now(),
        ]);

        return redirect()->back()->with('success', 'Inscription enregistrée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(inscriptions $inscriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inscriptions $inscriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inscriptions $inscriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inscriptions $inscriptions)
    {
        //
    }
}
