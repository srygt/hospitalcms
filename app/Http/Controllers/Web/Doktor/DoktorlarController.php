<?php
namespace App\Http\Controllers\Web\Doktor;
use App\Http\Controllers\Controller;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Doktor\Doktorlar;
use App\Models\Panel\Doktor\DoktorEgitim;
use App\Models\Panel\Doktor\DoktorIlgiAlanlari;
use App\Models\Panel\Doktor\DoktorKursKonferans;
use App\Models\Panel\Doktor\DoktorOdulDerece;
use App\Models\Panel\Doktor\DoktorYaptigiGorevler;

class DoktorlarController extends Controller
{
    public function index($lang)
    {
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $doktorlar          = Doktorlar::join('tanim_uzmanlik_alani', 'tanim_uzmanlik_alani.id', '=', 'doktorlar.uzmanlikid')
        ->select('doktorlar.*', 'tanim_uzmanlik_alani.alanadi')
        ->orderBy('doktorlar.doktoradi','asc')
        ->paginate(16);
        return view('web.doktorlar.index',[
            'sitemenu'      => $sitemenu,
            'doktorlar'     => $doktorlar,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ], compact('doktorlar'));        
    }
    public function detay($lang,$dlink)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $doktorlar          = Doktorlar::where('dlink', $dlink)
        ->join('tanim_uzmanlik_alani', 'tanim_uzmanlik_alani.id', '=', 'doktorlar.uzmanlikid')
        ->select('doktorlar.*', 'tanim_uzmanlik_alani.alanadi')
        ->get();
        $doktorid           = $doktorlar[0]['id'];
        $egitim             = DoktorEgitim::where('doktorid',$doktorid)->where ('dilid', $lang)->get();
        $ilgialanlari       = DoktorIlgiAlanlari::where('doktorid',$doktorid)->where ('dilid', $lang)->get();
        $kurslar            = DoktorKursKonferans::where('doktorid',$doktorid)->where ('dilid', $lang)->get();
        $oduller            = DoktorOdulDerece::where('doktorid',$doktorid)->where ('dilid', $lang)->get();
        $gorevler           = DoktorYaptigiGorevler::where('doktorid',$doktorid)->get();
        return view('web.doktorlar.detay',[
            'sitemenu'      => $sitemenu,
            'doktorlar'     => $doktorlar,
            'ilgialanlari'  => $ilgialanlari,
            'kurslar'       => $kurslar,
            'egitim'        => $egitim,
            'oduller'       => $oduller,
            'gorevler'      => $gorevler,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }

	// Doktor Arama Alanı
					
    public function search(DoktorlarRequest $request)
    {
		$isim				= $request->search;
        $lang               = 'tr';
        $sitemenu           = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
		$search 			= $request->input('q');
		dd($search);
        if($search!=""){		
        $doktorlar          = Doktorlar::join('tanim_uzmanlik_alani', 'tanim_uzmanlik_alani.id', '=', 'doktorlar.uzmanlikid')
        ->select('doktorlar.*', 'tanim_uzmanlik_alani.alanadi')
        ->where('doktorlar.doktoradi','LIKE','%'.$isim.'%')
        ->where(function ($query) use ($search){
              $query->where('doktorlar.doktoradi', 'like', '%'.$search.'%');       
		})			
        ->orderBy('doktorlar.doktoradi','asc')
        ->paginate(16);
		$doktorlar->appends(['q' => $search]);
		}else{
          $doktorlar = Doktorlar::paginate(12);
        }
        return view('web.doktorlar.search',[
            'sitemenu'      => $sitemenu,
            'doktorlar'     => $doktorlar,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ], compact('doktorlar'))->with('data',$doktorlar);        
    }     
}
