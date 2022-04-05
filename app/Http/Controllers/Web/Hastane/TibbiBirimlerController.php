<?php

namespace App\Http\Controllers\Web\Hastane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panel\Tanim\TanimTibbiBirimler;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;

class TibbiBirimlerController extends Controller
{
    public function show($lang)
    {

        $diller             = TanimDil::get();
        $sitemenu           = SiteMenu::where('dilid',$lang)->get();
        $tibbibirimler      = TanimTibbiBirimler::where('dilid',$lang)->get();
        $ayarlar            = Ayarlar::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where('dilid',$lang)->get();
        return view('web.tibbi-birimler.index',[
            'sitemenu'          =>$sitemenu,
            'diller'            =>$diller,
            'ayarlar'           =>$ayarlar,
            'tibbibirimler'     =>$tibbibirimler,
            'politikalarlist'   =>$politikalarlist,
        ]);
    }
}
