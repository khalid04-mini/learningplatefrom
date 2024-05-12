<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Formation extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable= ['nom','description','date_debut','date_fin','formateur_id','salle_id'];

    public function Formateur(){
        return $this->belongsTo(Formateur::class);
    }

    public function Salle(){
        return $this->belongsTo(Salle::class);
    }
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nom')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
