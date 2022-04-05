<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorEgitimRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\DoktorEgitim,id',
            'doktorid'      => 'required',
            'egitimadi'     => 'required',
            'egitimyili'    => 'required',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'egitimadi'       => 'Eğitim Adı Giriniz',
            'egitimyili'      => 'Eğitim Yılı Giriniz',
        ];
    }
}
