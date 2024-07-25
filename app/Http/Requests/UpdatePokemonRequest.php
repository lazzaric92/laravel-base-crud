<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePokemonRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'pokedex_index' => 'required|integer|min:1|max:1000',
            'category' => 'required|min:3|max:100',
            'category' => 'required|min:3|max:100',
            'gender' => 'required|min:3|max:25',
            'primary_type' => 'required|min:3|max:30',
            'secondary_type' => 'nullable|min:3|max:30',
            'nature' => 'required|min:3|max:30',
            'size' => 'required|numeric|min:0|max:100',
            'image_url' => 'required|url',
            'hp' => 'required|integer|min:1|max:500',
            'atk' => 'required|integer|min:1|max:500',
            'def' => 'required|integer|min:1|max:500',
            'sp_atk' => 'required|integer|min:1|max:500',
            'sp_def' => 'required|integer|min:1|max:500',
            'speed' => 'required|integer|min:1|max:500',
            'tot_stats' => 'required|integer|min:1|max:1000'
        ];
    }
}
