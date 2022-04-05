<?php

namespace App\Http\Controllers\Web\HastaRehberi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\Tanim\TanimHastaRehberi;

class WebHastaRehberiController extends Controller
{
    public function index($lang)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $hastarehberi       = TanimHastaRehberi::where ('dilid', $lang)->get();

        return view('web.hasta-rehberi.index',[
            'sitemenu'      => $sitemenu,
            'hastarehberi'  => $hastarehberi,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }
}
