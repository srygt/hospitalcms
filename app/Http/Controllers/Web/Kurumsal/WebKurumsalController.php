<?php

namespace App\Http\Controllers\Web\Kurumsal;
use App\Http\Controllers\Controller;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Hakkimizda;
use App\Models\Panel\Tanim\TanimPolitikalar;

class WebKurumsalController extends Controller
{
    public function index($lang,$halink)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $hakkimizda         = Hakkimizda::where('hlink',$halink)->where ('dilid', $lang)->get();
        $hakkimizdalist     = Hakkimizda::where ('dilid', $lang)->get();

        return view('web.kurumsal.index',[
            'sitemenu'      => $sitemenu,
            'hakkimizda'    => $hakkimizda,
            'hakkimizdalist'=> $hakkimizdalist,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }    
}
