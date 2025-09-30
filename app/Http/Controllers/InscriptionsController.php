<?php

namespace App\Http\Controllers;

use App\Models\inscriptions;
use Illuminate\Http\Request;

class InscriptionsController extends Controller
{
    public function create()
    {
        return view('inscriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'formation' => 'required|string',
        ]);

        inscriptions::create($request->all());

        return redirect()->back()->with('success', 'Votre inscription a été enregistrée avec succès !');
    }
}

