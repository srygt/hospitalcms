<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class TanimDilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'    => 'nullable|numeric|exists:App\Models\Panel\TanimDil,id',
            'diladi'=> 'required',
            'sembol'=> 'required',
            'durumu'=> 'required',
        ];
    }

    public function attributes()
    {
        return [
            'diladi'  => 'Dil Adı Giriniz',
            'sembol'  => 'Sembol Giriniz',
        ];
    }
}
