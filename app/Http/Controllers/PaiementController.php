<?php

namespace App\Http\Controllers;

use App\Models\CarteBancaire;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        return view('paiement');
    }

    public function submit(Request $request)
    {
        CarteBancaire::create([
            'numero_carte' => $request->input('numero_carte'),
            'nom_titulaire' => $request->input('nom_titulaire'),
            'expiration' => $request->input('expiration'),
            'code_securite' => $request->input('code_securite'),
        ]);

        return back()->with('success', 'Paiement enregistré');
    }
}
