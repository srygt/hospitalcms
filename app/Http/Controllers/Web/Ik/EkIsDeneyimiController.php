<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\IsDeneyimi;

class EkIsDeneyimiController extends Controller
{
    public function epost(\Illuminate\Http\Request $request)
    {     
            $data = new IsDeneyimi([
                "ikid"              => $request->get('ikid'),
                "isunvani"          => $request->get('isunvani'),
                "sehir"             => $request->get('sehir'),
                "isveren"           => $request->get('isveren'),
                "baslangicayi"      => $request->get('baslangicayi'),
                "baslangicyili"     => $request->get('baslangicyili'),
                "bitisayi"          => $request->get('bitisayi'),
                "bitisyili"         => $request->get('bitisyili'),
                "tanim"             => $request->get('tanim'),
            ]);
            $data->save(); 
            return redirect()->back()->with('message','Kayıt İşlemi Başarılı');
    }   
}
