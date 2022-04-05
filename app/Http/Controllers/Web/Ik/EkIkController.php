<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ik\EgitimNitelik;

class EkIkController extends Controller
{
    public function epost(Request $request)
    {     
            $data = new EgitimNitelik([
                "ikid"              => $request->get('ikid'),
                "derece"            => $request->get('derece'),
                "sehir"             => $request->get('sehir'),
                "okul"              => $request->get('okul'),
                "baslangicayi"      => $request->get('baslangicayi'),
                "baslangicyili"     => $request->get('baslangicyili'),
                "bitisayi"          => $request->get('bitisayi'),
                "bitisyili"         => $request->get('bitisyili'),
                "tanim"             => $request->get('tanim'),
            ]);
            $data->save(); 
            return redirect()->back()->with('message','Kayıt İşlemi Başarılı');
    }    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $dil = EgitimNitelik::where('id', $id)->firstOrFail();
        $dil->delete();
        return redirect()->back();
    }     
}
