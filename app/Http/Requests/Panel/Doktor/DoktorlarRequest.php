<?php

namespace App\Http\Requests\Panel\Doktor;

use Illuminate\Foundation\Http\FormRequest;

class DoktorlarRequest extends FormRequest
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
            'id'            => 'nullable|numeric|exists:App\Models\Panel\Doktor\Doktorlar,id',
            'dlink'         => 'required',
            'doktorunvani'  => 'required',
            'doktoradi'     => 'required',
            'dogumyeri'     => 'nullable',
            'dogumtarihi'   => 'nullable',
            'cinsiyeti'     => 'required',
            'telno'         => 'nullable',
            'email'         => 'nullable',
            'website'       => 'nullable',
            'ozgecmis'      => 'nullable',
            'resim'         => 'image|mimes:png,jpg,jpeg,gif|max:2048',
            'hastaneid'     => 'required',
            'uzmanlikid'    => 'required',
            'facebook'      => 'nullable',
            'instagram'     => 'nullable',
            'twitter'       => 'nullable',
            'linkedin'      => 'nullable',
            'durumu'        => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'adi'       => 'Doktor Adı Giriniz',
            'soyadi'    => 'Doktor Soyadı Giriniz',
            'cinsiyeti' => 'Doktor Cinsiyeti Seçiniz',
            'hastaneid' => 'Hastane Seçiniz',
            'uzmanlikid'=> 'Uzmanlık Alanını Seçiniz',
        ];
    }
}
