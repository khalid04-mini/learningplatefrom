<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $fillable = ['nom','adresse','telephone'];

    public function Salles(){
        return $this->hasMany(Salle::class);
    }
}
