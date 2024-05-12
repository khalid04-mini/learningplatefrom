<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentaireResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'inscription'=>InscriptionResource::make($this->inscription),
            'commentaire'=>$this->commentaire,
            'valide'=>$this->valide,
            'date_ajout'=>$this->created_at
        ];
    }
}
