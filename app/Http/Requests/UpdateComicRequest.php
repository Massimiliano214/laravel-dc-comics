<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\StoreComicRequest;

class UpdateComicRequest extends StoreComicRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    /*
    ereditazione parziale funzioni
    public function rules()
    {
        $regole = parent::rules();
        $regole['title'] = 'required|max:15';
        return $regole;

    }
    */
}
