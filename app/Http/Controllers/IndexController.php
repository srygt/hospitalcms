<?php

namespace App\Http\Controllers;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Slider;
use App\Models\Panel\Tanim\TanimTibbiBirimler;
use App\Models\Panel\Doktor\Doktorlar;
use App\Models\Panel\Icerikler;

class IndexController extends Controller
{

    public function web(string $lang){
        $sitemenu       = SiteMenu::where('parentid',0)->where('dilid',$lang)->get();
        $sitesmenu      = SiteMenu::where('dilid',$lang)->get();
        $slider         = Slider::where('dilid',$lang)->get();
        $birimler       = TanimTibbiBirimler::where('dilid',$lang)->orderBy('id', 'desc')->get()->random(10);
        $tibbibirimler  = TanimTibbiBirimler::where('dilid',$lang)->orderBy('id', 'desc')->get();
        $doktorlar      = Doktorlar::join('tanim_uzmanlik_alani', 'tanim_uzmanlik_alani.id', '=', 'doktorlar.uzmanlikid')
        ->select('doktorlar.*', 'tanim_uzmanlik_alani.alanadi')->orderBy('id', 'desc')->get();
        $diller         = TanimDil::get();
        $politikalarlist= TanimPolitikalar::where ('kategoriid', 1)->orderBy('id', 'desc')->where('dilid',$lang)->get();
        $ayarlar        = Ayarlar::get();
        $duyurular      = Icerikler::join('tanim_kategori_icerikler', 'tanim_kategori_icerikler.id', '=', 'icerikler.kategoriid')
        ->select('icerikler.*', 'tanim_kategori_icerikler.kategoriadi','tanim_kategori_icerikler.hlink')
        ->where('icerikler.dilid',$lang)
        ->where('icerikler.kategoriid',2)
        ->orderBy('id', 'desc')
        ->get();    
        $haberler       = Icerikler::join('tanim_kategori_icerikler', 'tanim_kategori_icerikler.id', '=', 'icerikler.kategoriid')
        ->select('icerikler.*', 'tanim_kategori_icerikler.kategoriadi','tanim_kategori_icerikler.hlink')
        ->where('icerikler.dilid',$lang)
        ->where('icerikler.kategoriid',1)
        ->orderBy('id', 'desc')
        ->get();        
        $saglikkosesi   = Icerikler::join('tanim_kategori_icerikler', 'tanim_kategori_icerikler.id', '=', 'icerikler.kategoriid')
        ->select('icerikler.*', 'tanim_kategori_icerikler.kategoriadi','tanim_kategori_icerikler.hlink')
        ->where('icerikler.dilid',$lang)
        ->where('icerikler.kategoriid',3)
        ->orderBy('id', 'desc')
        ->get();        

        return view('web.web',[
            'sitemenu'          =>$sitemenu,
            'slider'            =>$slider,
            'sitesmenu'         =>$sitesmenu,
            'diller'            =>$diller,
            'ayarlar'           =>$ayarlar,
            'doktorlar'         =>$doktorlar,
            'duyurular'         =>$duyurular,
            'haberler'          =>$haberler,
            'saglikkosesi'      =>$saglikkosesi,
            'birimler'          =>$birimler,
            'tibbibirimler'     =>$tibbibirimler,
            'politikalarlist'   =>$politikalarlist,
        ]);
    }

}
