<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorBilimselYayinlarRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\DoktorBilimselYayinlar,id',
            'doktorid'      => 'required',
            'yayinadi'      => 'required',
            'aciklama'      => 'nullable',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'yayinadi'      => 'Yayın Adı Giriniz',
        ];
    }
}
