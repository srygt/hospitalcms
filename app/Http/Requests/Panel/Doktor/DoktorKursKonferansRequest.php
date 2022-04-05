<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorKursKonferansRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\DoktorKursKonferans,id',
            'doktorid'      => 'required',
            'kursadi'       => 'required',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'kursadi'       => 'Kurs ve Konferans Adı Giriniz',
        ];
    }
}
