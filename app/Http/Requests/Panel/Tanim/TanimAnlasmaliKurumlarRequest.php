<?php

namespace App\Http\Requests\Panel\Tanim;

use Illuminate\Foundation\Http\FormRequest;

class TanimAnlasmaliKurumlarRequest extends FormRequest
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
            'id'        => 'nullable|numeric|exists:App\Models\Panel\Tanim\TanimYayinlar,id',
            'kurumadi'  => 'required',
            'dilid'     => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'kurumadi'  => 'Kurum Adı Giriniz',
        ];
    }
}
