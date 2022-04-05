<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\Referanslar;

class EkReferansController extends Controller
{
    public function epost(\Illuminate\Http\Request $request)
    {     
            $data = new Referanslar([
                "ikid"              => $request->get('ikid'),
                "sirket"            => $request->get('sirket'),
                "kisi"              => $request->get('kisi'),
                "telefon"           => $request->get('telefon'),
                "email"             => $request->get('email'),
            ]);
            $data->save(); 
            return redirect()->back()->with('message','Kayıt İşlemi Başarılı');
    }   
}
