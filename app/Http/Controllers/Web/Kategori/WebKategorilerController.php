<?php

namespace App\Http\Controllers\Web\Kategori;

use App\Http\Controllers\Controller;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\Icerikler;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Tanim\TanimIcerikKategori;
use App\Models\Panel\Tanim\TanimPolitikalarKategori;

class WebKategorilerController extends Controller
{

    public function index($lang,$hlink)
    {
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $katlink            = TanimIcerikKategori::where('hlink',$hlink)->get();
        $katid              = $katlink[0]['id'];
        $kategori           = Icerikler::join('tanim_kategori_icerikler', 'tanim_kategori_icerikler.id', '=', 'icerikler.kategoriid')
        ->leftJoin('tanim_tibbi_birimler','tanim_tibbi_birimler.id','=','icerikler.birimid')
        ->leftJoin('doktorlar','doktorlar.id','=','icerikler.doktorid')
        ->select('icerikler.*','doktorlar.doktorunvani','doktorlar.doktoradi','doktorlar.dlink', 'tanim_kategori_icerikler.kategoriadi','tanim_kategori_icerikler.hlink','tanim_tibbi_birimler.birimadi','tanim_tibbi_birimler.tlink')
        ->where('icerikler.dilid',$lang)
        ->where('icerikler.kategoriid',$katid)
        ->orderBy('id', 'desc')
        ->paginate(15);
        return view('web.kategori.index',[
            'sitemenu'      => $sitemenu,
            'kategori'      => $kategori,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);        
    }  
}
