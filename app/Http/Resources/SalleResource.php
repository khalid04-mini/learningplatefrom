<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SalleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "nom"=>$this->nom,
            "capacite"=>$this->capacite,
            "disponible"=>$this->disponible ,
            "centre"=> $this->centre
        ];
    }
}
