<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()  
    {
        return "Panier";
    }

    public function indexBis($id)  
    {
        return "Fiche du produit " . $id;
    }
}
