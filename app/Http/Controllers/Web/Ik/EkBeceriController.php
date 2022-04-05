<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\Beceriler;

class EkBeceriController extends Controller
{
    public function epost(\Illuminate\Http\Request $request)
    {     
            $data = new Beceriler([
                "ikid"              => $request->get('ikid'),
                "beceri"            => $request->get('beceri'),
                "seviye"            => $request->get('seviye'),
            ]);
            $data->save(); 
            return redirect()->back()->with('message','Kayıt İşlemi Başarılı');
    }   
}
