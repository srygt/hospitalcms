<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorMeslekiUyelikRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\DoktorMeslekiUyelik,id',
            'doktorid'      => 'required',
            'uyelikadi'     => 'required',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'uyelikadi'       => 'Üyelik Adı Giriniz',
        ];
    }
}
