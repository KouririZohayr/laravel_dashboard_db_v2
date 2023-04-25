<?php

namespace App\Models;
use App\Models\Facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    public function facturs(){
        return $this->hasMany(Facture::class, 'id_fournisseur');
    }
}
