<?php

namespace App\Http\Requests\Channel;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'client_id' => 'required|string|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'status' => 'status',
            'client_id' => 'cliente',
        ];
    }
}
