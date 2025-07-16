<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
public function index()
{
    $user = User::find(1);

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

    return view('cart', compact('cartItems', 'total'));
}


public function add(Request $request)
{
        $request->validate([
            'lunette_id' => 'required|exists:lunettes,id',
        ]);

        $user = User::find(1); 

        $existingItem = DB::table('cart_items')
            ->where('user_id', $user->id)
            ->where('lunette_id', $request->lunette_id)
            ->first();

        if ($existingItem) {
            DB::table('cart_items')
                ->where('id', $existingItem->id)
                ->update([
                    'quantity' => $existingItem->quantity + 1,
                    'updated_at' => now(),
                ]);
        } else {
            DB::table('cart_items')->insert([
                'user_id' => $user->id,
                'lunette_id' => $request->lunette_id,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('cart')->with('success', 'Produit ajouté au panier !');
    }
public function remove($id)
{
    DB::table('cart_items')->where('id', $id)->delete();

    return redirect()->route('cart')->with('success', 'Produit supprimé du panier.');
}

public function updateQuantity(Request $request, $id)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);

    DB::table('cart_items')->where('id', $id)->update([
        'quantity' => $request->quantity,
        'updated_at' => now(),
    ]);

    return redirect()->route('cart')->with('success', 'Quantité mise à jour.');
}

}
