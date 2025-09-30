<?php

namespace App\Http\Controllers;

use App\Models\inscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.inscriptions');
        }

        return back()->withErrors(['email' => 'Identifiants invalides']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function index()
    {
        $inscriptions = inscriptions::latest()->get();
        return view('admin.inscriptions.index', compact('inscriptions'));
    }

    public function valider($id)
    {
        $inscription = inscriptions::findOrFail($id);
        $inscription->update(['statut' => 'valide']);

        return back()->with('success', 'Inscription validée.');
    }

    public function refuser($id)
    {
        $inscription = inscriptions::findOrFail($id);
        $inscription->update(['statut' => 'refuse']);

        return back()->with('success', 'Inscription refusée.');
    }
}
