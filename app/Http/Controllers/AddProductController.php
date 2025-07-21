<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lunette; 

class AddProductController extends Controller
{
    public function index()
    {
        $lunettes = Lunette::all();
        return view('add-product', compact('lunettes'));
    }

    public function updateQuantity(Request $request, $id)
{
    $request->validate([
        'stock' => 'required|integer|min:0',
        'prix' => 'required|numeric|min:0',
        'name' => 'required|string|max:100',
    ]);

    $lunette = Lunette::findOrFail($id);
    $lunette->stock = $request->input('stock');
    $lunette->prix = $request->input('prix');
    $lunette->name = $request->input('name');
    $lunette->save(); 

    return redirect()->back()->with('success', 'Stock mis à jour avec succès.');
}


    public function remove($id)
    {
        $lunette = Lunette::findOrFail($id); 
        $lunette->delete();

        return redirect()->back()->with('success', 'Lunette supprimée avec succès.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'prix' => 'required|numeric|min:0',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'genre' => 'nullable|string|max:50',
            'taille' => 'nullable|string|max:50',
            'type' => 'nullable|string|max:50',
            'forme' => 'nullable|string|max:50',
            'stock' => 'required|integer|min:0',
        ]);

        $imagePath = null;
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('lunettes', 'public');
        }

        Lunette::create([ 
            'name' => $request->input('name'),
            'prix' => $request->input('prix'),
            'img' => $imagePath ?? 'default.jpg',
            'genre' => $request->input ('genre'),
            'taille' => $request->input ('taille'),
            'type' => $request->input ('type,'),
            'forme' => $request->input ('forme'),
            'stock' => $request->input ('stock'),
        ]);

        return redirect()->back()->with('success', 'Lunette ajoutée avec succès.');
    }
}
