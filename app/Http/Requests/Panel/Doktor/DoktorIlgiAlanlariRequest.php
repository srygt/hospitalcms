<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorIlgiAlanlariRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\DoktorIlgiAlanlari,id',
            'doktorid'      => 'required',
            'alanadi'       => 'required',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'alanadi'       => 'İlgi Alan Adı Giriniz',
        ];
    }
}
