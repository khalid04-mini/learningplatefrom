<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = ['formation_id','participant_id','statut','date_inscription','paye'];

    public function Formation(){
        return $this->belongsTo(Formation::class);
    }

    public function Participant(){
       return $this->belongsTo(Participant::class);
    }

    public function Paiement(){
        return $this->hasMany(Paiement::class);
    }

    public function Commentaire(){
        return $this->hasMany(Commentaire::class);
    }
}
