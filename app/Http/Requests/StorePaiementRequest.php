<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaiementRequest extends FormRequest
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
            'paye'=>['required'],
            'methode_paiement'=>['required'],
            'somme'=>['required'],
            'date_paiement'=>['required','date'],
            'inscription_id'=>['required','exists:inscriptions,id'],
        ];
    }
}
