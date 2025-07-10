<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lunette;

class ProductController extends Controller
{
public function index()  
{
    $lunettes = Lunette::all(); 
    return view('product-list', compact('lunettes'));
}

    public function indexDetails($id)
    {
        $lunette = Lunette::findOrFail($id); 
        return view('product-details', compact('lunette'));
    }
}
