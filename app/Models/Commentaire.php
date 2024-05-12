<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable =['inscription_id','commentaire','valide'];

    public function Inscription(){
        return $this->belongsTo(Inscription::class);
    }
}
