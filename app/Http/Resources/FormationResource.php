<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nom'=> $this->nom,
            'slug'=> $this->slug,
            'description'=> $this->description,
            'prix'=>$this->prix,
            'formateur'=> FormateurResource::make($this->formateur) ,
            'salle'=> SalleResource::make($this->salle) ,
            ];
    }
}
