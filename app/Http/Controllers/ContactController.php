<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|min:10',
    ]);

    Contact::create($validated);

    return redirect()->route('contact.show')->with('success', 'Votre message a été enregistré avec succès.');
}
}

