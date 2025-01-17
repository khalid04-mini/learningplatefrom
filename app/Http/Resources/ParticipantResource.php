<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'telephone'=>$this->telephone,
            'inscriptions'=> $this->inscription
        ];
    }
}
