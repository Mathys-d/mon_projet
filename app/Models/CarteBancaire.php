<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteBancaire extends Model
{
    use HasFactory;

    protected $table = 'cartes_bancaires'; 

    protected $fillable = [
        'numero_carte',
        'nom_titulaire',
        'expiration',
        'code_securite',
    ];
}
