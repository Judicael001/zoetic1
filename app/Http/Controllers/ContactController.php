<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm() {
        return view('contact');
    }

    public function submitForm(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Exemple d’envoi de mail
        Mail::raw($request->message, function($msg) use ($request) {
            $msg->to('contact@zoetic.com')->subject('Nouveau message de ' . $request->name);
        });

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
