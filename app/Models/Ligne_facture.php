<?php

namespace App\Models;
use App\Models\Facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_facture extends Model
{
    use HasFactory;
    public function Facture(){
        return $this->belongsTo(Facture::class, 'id_fact');
    }
}
