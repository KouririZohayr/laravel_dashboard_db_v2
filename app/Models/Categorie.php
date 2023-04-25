<?php

namespace App\Models;
use App\Models\Souscategorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public function souscategories(){
        return $this->hasMany(Souscategorie::class, 'id_CG');
    } 
}
