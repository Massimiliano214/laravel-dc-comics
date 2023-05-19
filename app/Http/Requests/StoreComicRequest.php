<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'title' => 'required|max:30',
            'description' => 'nullable|max:50000',
            'thumb' => 'required|url|max:255',
            'price' => 'required|max:8',
            'series' => 'required|max:80',
            'sale_date' => 'nullable',
            'type' => 'required|max:50',
            
        ];
    }
}
