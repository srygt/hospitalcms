<?php

namespace App\Http\Controllers\Web\Ik;

use App\Http\Controllers\Controller;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Ayarlar;
use App\Models\Ik\Ik;
use App\Models\Ik\EgitimNitelik;
use App\Models\Ik\IlgiAlanlari;
use App\Models\Ik\Referanslar;
use App\Models\Ik\Beceriler;
use App\Models\Ik\IsDeneyimi;
use App\Models\Ik\Kurslar;
use App\Models\Ik\Diller;
use App\Models\Ik\IkBolum;

class IkController extends Controller
{
    public function index($lang)
    {
        $sitemenu           = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $bolumler           = IkBolum::orderBy('bolumadi','asc')->get();
        $ayarlar            = Ayarlar::get();       
        return view('web.ik.index',[
            'sitemenu'          => $sitemenu,
            'diller'            => $diller,
            'ayarlar'           => $ayarlar,
            'bolumler'          => $bolumler,
            'politikalarlist'   => $politikalarlist,
        ]);        
    }
    public function step($lang,$id)
    {
        $sitemenu           = SiteMenu::where('parentid',0)
                            ->where('dilid',$lang)
                            ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ik                 = Ik::where ('id', $id)->get();
        $egitimnitelik      = EgitimNitelik::where ('ikid', $id)->get();
        $ilgialanlari       = IlgiAlanlari::where ('ikid', $id)->get();
        $referanslar        = Referanslar::where ('ikid', $id)->get();
        $beceriler          = Beceriler::where ('ikid', $id)->get();
        $isdeneyimi         = IsDeneyimi::where ('ikid', $id)->get();
        $kurslar            = Kurslar::where ('ikid', $id)->get();
        $dilleri            = Diller::where ('ikid', $id)->get();
        $ayarlar            = Ayarlar::get(); 
        return view('web.ik.step',[
            'sitemenu'          => $sitemenu,
            'diller'            => $diller,
            'ayarlar'           => $ayarlar,
            'ik'                => $ik,
            'egitimnitelik'     => $egitimnitelik,
            'ilgialanlari'      => $ilgialanlari,
            'referanslar'       => $referanslar,
            'beceriler'         => $beceriler,
            'isdeneyimi'        => $isdeneyimi,
            'kurslar'           => $kurslar,
            'dilleri'           => $dilleri,
            'politikalarlist'   => $politikalarlist,
        ]);        
    }    
    // Kayıt işlemi
    
    public function kaydet(\Illuminate\Http\Request $request)
    {     
        try{
            $data = new Ik([
                "bolumid"           => $request->get('bolumid'),
                "basvurutipi"       => $request->get('basvurutipi'),
                "adi"               => $request->get('adi'),
                "soyadi"            => $request->get('soyadi'),
                "sehir"             => $request->get('sehir'),
                "email"             => $request->get('email'),
                "telefon"           => $request->get('telefon'),
                "adres"             => $request->get('adres'),
                "postakodu"         => $request->get('postakodu'),
                "gun"               => $request->get('gun'),
                "ay"                => $request->get('ay'),
                "yil"               => $request->get('yil'),
                "dogumyeri"         => $request->get('dogumyeri'),
                "ehliyet"           => $request->get('ehliyet'),
                "cinsiyet"          => $request->get('cinsiyet'),
                "askerlik"          => $request->get('askerlik'),
                "medenidurumu"      => $request->get('medenidurumu'),
                "linkedin"          => $request->get('linkedin'),
                "website"           => $request->get('website'),
                "profili"           => $request->get('profili'),
                "basarilari"        => $request->get('basarilari'),
                "yayinlar"          => $request->get('yayinlar'),
                "ozelbolum"         => $request->get('ozelbolum'),
                "kvkk"              => $request->get('kvkk'),
            ]);
            $data->save(); 
            return redirect('/ik/step/'.$data->id.'');
        }
        catch(\Exception $e){
        echo $e->getMessage();
        }
    }  
    // Eğitim
    
}
