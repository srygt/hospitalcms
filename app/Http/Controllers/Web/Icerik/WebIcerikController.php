<?php

namespace App\Http\Controllers\Web\Icerik;

use App\Http\Controllers\Controller;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\Icerikler;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Tanim\TanimIcerikKategori;

class WebIcerikController extends Controller
{
    public function index($lang,$hlink,$ilink)
    {
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $icerik             = Icerikler::join('tanim_kategori_icerikler', 'tanim_kategori_icerikler.id', '=', 'icerikler.kategoriid')
        ->leftJoin('tanim_tibbi_birimler','tanim_tibbi_birimler.id','=','icerikler.birimid')
        ->leftJoin('doktorlar','doktorlar.id','=','icerikler.doktorid')
        ->select('icerikler.*','doktorlar.doktorunvani','doktorlar.doktoradi','doktorlar.dlink', 'tanim_kategori_icerikler.kategoriadi','tanim_kategori_icerikler.hlink','tanim_tibbi_birimler.birimadi','tanim_tibbi_birimler.tlink')
        ->where('icerikler.ilink',$ilink)
        ->where('tanim_kategori_icerikler.hlink',$hlink)
        ->where('icerikler.dilid',$lang)
        ->get();
        $digericerikler     = Icerikler::join('tanim_kategori_icerikler', 'tanim_kategori_icerikler.id', '=', 'icerikler.kategoriid')
        ->select('icerikler.*', 'tanim_kategori_icerikler.kategoriadi','tanim_kategori_icerikler.hlink')
        ->where('tanim_kategori_icerikler.hlink',$hlink)
        ->where('icerikler.dilid',$lang)
        ->get();        
        $kategoriler        = TanimIcerikKategori::where('dilid',$lang)->get();        
        return view('web.icerik.index',[
            'sitemenu'          => $sitemenu,
            'icerik'            => $icerik,
            'diller'            => $diller,
            'ayarlar'           => $ayarlar,
            'politikalarlist'   => $politikalarlist,
            'digericerikler'    => $digericerikler,
            'kategoriler'       => $kategoriler,
        ]);        
    }
}
