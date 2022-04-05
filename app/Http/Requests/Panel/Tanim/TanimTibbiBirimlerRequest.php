<?php

namespace App\Http\Requests\Panel\Tanim;

use Illuminate\Foundation\Http\FormRequest;

class TanimTibbiBirimlerRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Tanim\TanimTibbiBirimler,id',
            'birimadi'      => 'nullable',
            'tlink'         => 'nullable',
            'aciklama'      => 'nullable',
            'resim'         => 'image|mimes:png,jpg,jpeg,gif|max:20000',
            'durumu'        => 'required',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'birimadi'  => 'Birim Adı Giriniz',
        ];
    }
}
