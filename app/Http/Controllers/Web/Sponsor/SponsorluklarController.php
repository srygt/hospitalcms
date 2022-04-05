<?php

namespace App\Http\Controllers\Web\Sponsor;

use App\Http\Controllers\Controller;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Sponsorluklar;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\TanimDil;
use Illuminate\Http\Request;

class SponsorluklarController extends Controller
{
    public function index($lang)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $sponsorluklar      = Sponsorluklar::where ('dilid', $lang)->get();

        return view('web.sponsorluklar.index',[
            'sitemenu'      => $sitemenu,
            'sponsorluklar' => $sponsorluklar,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }    
}
