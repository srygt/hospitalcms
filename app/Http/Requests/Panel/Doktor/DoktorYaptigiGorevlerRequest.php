<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorYaptigiGorevlerRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\DoktorYaptigiGorevler,id',
            'doktorid'      => 'required',
            'gorevyeri'     => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'gorevyeri'       => 'Görev Yerini Giriniz',
            'doktorid'        => 'Doktor Seçiniz',
        ];
    }
}
