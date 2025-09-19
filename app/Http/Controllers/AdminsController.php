<?php

namespace App\Http\Controllers;

use App\Models\admins;
use Illuminate\Http\Request;
use App\Models\inscriptions;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inscriptions()
    {
        $inscriptions = inscriptions::with('user', 'formation')->latest()->get();

        return view('admin.inscriptions', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function updateStatut(Request $request, $id)
    {
        $request->validate([
            'statut' => 'required|in:en attente,confirmée,annulée',
        ]);

        $inscription = \App\Models\inscriptions::findOrFail($id);
        $inscription->statut = $request->statut;
        $inscription->save();

        return redirect()->route('admin.inscriptions')->with('success', 'Statut mis à jour avec succès.');
    }

    public function show($id)
    {
        $inscription = \App\Models\inscriptions::with('user', 'formation')->findOrFail($id);

        return view('admin.inscription-details', compact('inscription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admins $admins)
    {
        //
    }
}
