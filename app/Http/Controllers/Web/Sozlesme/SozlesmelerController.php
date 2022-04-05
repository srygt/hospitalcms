<?php

namespace App\Http\Controllers\Web\Sozlesme;
use App\Http\Controllers\Controller;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Tanim\TanimPolitikalarKategori;
use App\Models\Panel\Doktor\Doktorlar;
class SozlesmelerController extends Controller
{
    public function index($lang,$plink)
    {   
        $ayarlar        = Ayarlar::get();
        $diller         = TanimDil::get();
        $politikalar    = TanimPolitikalar::join('tanim_kategori_politikalar', 'tanim_kategori_politikalar.id', '=', 'tanim_politikalar.kategoriid')
        ->select('tanim_politikalar.*', 'tanim_kategori_politikalar.kategoriadi','tanim_kategori_politikalar.pklink')
        ->where('tanim_politikalar.plink',$plink)
        ->where('tanim_politikalar.dilid',$lang)
        ->get();        
        $politikalarlist= TanimPolitikalar::where('dilid',$lang)->get();
        $politikalarkat = TanimPolitikalarKategori::where('dilid',$lang)->get();
        $doktorlar      = Doktorlar::select('doktorlar.*')
        ->join('tanim_uzmanlik_alani', 'doktorlar.uzmanlikid', '=', 'tanim_uzmanlik_alani.id')
        ->get();
        $sitemenu       = SiteMenu::where('dilid',$lang)->get();
    
        return view('web.sozlesmeler.index',[
            'sitemenu'      => $sitemenu,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalar'           => $politikalar,
            'politikalarlist'       => $politikalarlist,
            'politikalarkategori'   => $politikalarkat,
            'doktorlar'             => $doktorlar,
        ]);
    }    
}
