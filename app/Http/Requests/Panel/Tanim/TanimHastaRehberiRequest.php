<?php

namespace App\Http\Requests\Panel\Tanim;

use Illuminate\Foundation\Http\FormRequest;

class TanimHastaRehberiRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Tanim\TanimHastaRehberi,id',
            'baslik'        => 'required',
            'dilid'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'baslik'        => 'Başlık Giriniz',
        ];
    }
}
