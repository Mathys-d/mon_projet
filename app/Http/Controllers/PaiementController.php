<?php

namespace App\Http\Controllers;

use App\Models\CarteBancaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaiementController extends Controller
{
    public function index()
    {
    $user = DB::table('users')->where('id', 1)->first();


    $cartItems = DB::table('cart_items')
        ->join('lunettes', 'cart_items.lunette_id', '=', 'lunettes.id')
        ->where('cart_items.user_id', $user->id)
        ->select(
            'cart_items.id as cart_id',
            'cart_items.quantity',
            'lunettes.name',
            'lunettes.prix',
            'lunettes.img'
        )
        ->get();
        
        $total = $cartItems->sum(fn($item) => $item->prix * $item->quantity);

        return view('paiement', compact('cartItems', 'total', 'user'));
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





