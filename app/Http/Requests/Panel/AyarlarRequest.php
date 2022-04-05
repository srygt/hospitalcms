<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class AyarlarRequest extends FormRequest
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
            'id'         => 'nullable|numeric|exists:App\Models\Panel\Ayarlar,id',
            'siteadi'    => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'siteadi'   => 'Site Adı Giriniz',
        ];
    }
}
