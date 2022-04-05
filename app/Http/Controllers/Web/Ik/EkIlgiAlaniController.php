<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\IlgiAlanlari;

class EkIlgiAlaniController extends Controller
{
    public function epost(\Illuminate\Http\Request $request)
    {     
            $data = new IlgiAlanlari([
                "ikid"              => $request->get('ikid'),
                "ilgialani"         => $request->get('ilgialani'),
            ]);
            $data->save(); 
            return redirect()->back()->with('message','Kayıt İşlemi Başarılı');
    }   
}
