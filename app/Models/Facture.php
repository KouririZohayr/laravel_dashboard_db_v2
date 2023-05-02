<?php

namespace App\Models;
use App\Models\Fournisseur;
use App\Models\Ligne_facture;
use App\Models\Souscategorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class Facture extends Model
{
    use HasFactory,Searchable;
    public function fournisseurs(){
        return $this->belongsTo(Fournisseur::class, 'id_fournisseur');
    }
    public function LigneFactures(){
        return $this->hasMany(Ligne_facture::class, 'id_fact');
    }
    public function souscategorie(){
        return $this->hasMany(Souscategorie::class, 'sousCategorie');
    }
    public function run()
    {
        Facture::factory()
            ->count(50)
            ->create();
    }
    #[SearchUsingPrefix('id')]
    public function toSearchableArray(){
        return [
            "id"=> $this->id,
            "numero_fact"=> $this->numero_fact,
            "date_fact"=> $this->date_fact,
            "TVA"=> $this->TVA,
            "id_fournisseur"=> $this->id_fournisseur,
            "sousCategorie"=> $this->sousCategorie,
            "classeur"=> $this->classeur,
            "description"=> $this->description,
        ];
    }
}
