<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'participant'=>ParticipantResource::make($this->participant),
            'formtion'=> FormationResource::make($this->formation),
            'paiement'=>PaiementResource::collection($this->paiement),
            'date_inscription'=>$this->date_inscription,
            'paye'=>$this->paye,
            'statut'=>$this->statut,
        ];
    }
}
