<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteBancaire extends Model
{
    use HasFactory;

    protected $table = 'cartes_bancaires'; // Nom exact de la table (important si elle ne suit pas la convention Laravel)

    protected $fillable = [
        'numero_carte',
        'nom_titulaire',
        'expiration',
        'code_securite',
    ];
}
