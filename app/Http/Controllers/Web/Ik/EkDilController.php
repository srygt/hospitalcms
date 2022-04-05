<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\Diller;

class EkDilController extends Controller
{
    public function epost(\Illuminate\Http\Request $request)
    {     
            $data = new Diller([
                "ikid"              => $request->get('ikid'),
                "dil"               => $request->get('dil'),
                "seviye"            => $request->get('seviye'),
            ]);
            $data->save(); 
            return redirect()->back()->with('message','Kayıt İşlemi Başarılı');
    } 
}
