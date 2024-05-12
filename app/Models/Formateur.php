<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;


    protected $fillable = ['nom','prenom','domaine'];

    public function Formations(){
        return $this->hasMany(Formation::class);
    }
}
