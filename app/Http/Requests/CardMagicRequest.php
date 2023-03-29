<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardMagicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required',
            'number' => 'required',
            'name' => 'required',
            'property_id' => 'required',
            'rarity_id' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png',
        ];
    }
}
