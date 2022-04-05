<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class TanimHizliMenuRequest extends FormRequest
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
            'id'        => 'nullable|numeric|exists:App\Models\Panel\TanimHizliMenu,id',
            'baslik'    => 'required',
            'ikon'      => 'nullable',
            'link'      => 'nullable',
            'hastaneid' => 'nullable',
            'dilid'     => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'baslik'     => 'Menü Adını Giriniz',
        ];
    }
}
