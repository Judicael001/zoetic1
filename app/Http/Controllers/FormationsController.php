<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function bureautique()
    {
        return view('formations.bureautique');
    }

    public function cybersecurite()
    {
        return view('formations.cybersecurite');
    }

    public function programmation()
    {
        return view('formations.programmation');
    }

    public function outilsCollaboratifs()
    {
        return view('formations.outils');
    }
}
