<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = ['nom','capacite','centre_id','disponible'];

    public function Centre(){
        return $this->belongsTo(Centre::class);
    }

    public function Formation(){
        return $this->hasOne(Salle::class);
    }
}
