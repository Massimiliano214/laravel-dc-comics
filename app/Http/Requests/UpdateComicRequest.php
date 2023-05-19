<?php

namespace App\Http\Requests\Comic;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\StoreComicRequest;

class UpdateComicRequest extends StoreComicRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
