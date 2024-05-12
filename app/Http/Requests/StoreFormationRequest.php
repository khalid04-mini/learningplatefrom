<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nom' => 'required',
            'formateur_id'=>'exists:formateurs,id',
            'salle_id'=>'exists:salles,id',
            'description' => 'required',
            'date_debut' => 'required|date|after:tomorrow',
            'date_fin' => 'required|date|after:date_debut',
        ];
    }
}
