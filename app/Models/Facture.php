<?php

namespace App\Models;
use App\Models\Fournisseur;
use App\Models\Ligne_facture;
use App\Models\Souscategorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    public function fournisseurs(){
        return $this->belongsTo(Fournisseur::class, 'id_fournisseur');
    }
    public function LigneFactures(){
        return $this->hasMany(Ligne_facture::class, 'id_fact');
    }
    public function souscategorie(){
        return $this->hasMany(Souscategorie::class, 'sousCategorie');
    }
}
