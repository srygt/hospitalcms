<?php

namespace App\Http\Controllers\Web\TibbiBirim;

use App\Http\Controllers\Controller;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\TanimDil;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimTibbiBirimler;

class WebTibbiBirimlerController extends Controller
{
    public function index($lang)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $tibbibirim         = TanimTibbiBirimler::where ('dilid', $lang)->get();
        $tibbibirimcount    = $tibbibirim->count();

        return view('web.tibbi-birimler.index',[
            'sitemenu'      => $sitemenu,
            'tibbibirim'    => $tibbibirim,
            'tibbibirimc'   => $tibbibirimcount,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }
    public function detay($lang,$tlink)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $tibbibirim         = TanimTibbiBirimler::where ('tlink', $tlink)->get();

        return view('web.tibbi-birimler.detay',[
            'sitemenu'      => $sitemenu,
            'tibbibirim'    => $tibbibirim,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }    
}
