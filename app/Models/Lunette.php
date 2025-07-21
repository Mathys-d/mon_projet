<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lunette extends Model
{
        public $timestamps = false;

        public function users(){
                return $this->belongsToMany(User::class,'cart_items')->withPivot('quantity');
        }
        
        protected $fillable = [
                'name', 'prix', 'img', 'genre', 'taille', 'type', 'forme', 'stock',
        ];
        
}
