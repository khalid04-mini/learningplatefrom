<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaiementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'paye'=>$this->paye,
            'methode_paiement'=>$this->methode_paiement,
            'somme'=>$this->somme,
            'date_paiement'=>$this->date_paiement,
            'inscription_id'=>$this->inscription_id,
        ];
    }
}
