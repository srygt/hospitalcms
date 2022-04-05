<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\Kurslar;

class EkKurslarController extends Controller
{
    public function epost(\Illuminate\Http\Request $request)
    {     
            $data = new Kurslar([
                "ikid"              => $request->get('ikid'),
                "kurs"              => $request->get('kurs'),
                "sehir"             => $request->get('sehir'),
                "kurum"             => $request->get('kurum'),
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
