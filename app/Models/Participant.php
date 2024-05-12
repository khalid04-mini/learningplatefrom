<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','telephone'];



    public function Inscription(){
        return $this->hasMany(Inscription::class);
    }


}
