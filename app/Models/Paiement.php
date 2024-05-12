<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['methode_paiement','date_paiement','somme','paye','inscription_id'];

    public function Inscription(){
        return $this->belongsTo(Inscription::class);
    }
}
