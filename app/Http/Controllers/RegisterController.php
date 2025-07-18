<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
     public function show()
    {
        return view('register');
    }

    public function submit(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'mdp' => 'required|string|min:4',
    ]);

    User::create([
    'name' => $validated['name'],
    'email' => $request->email,
    'password' => bcrypt($request->mdp),
]);

    return redirect()->route('register')->with('success');
}
public function showRegisterForm() {
    return view('register');
}

public function register(Request $request) {
    // validation + création
}

}
