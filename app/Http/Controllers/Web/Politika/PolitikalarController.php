<?php

namespace App\Http\Controllers\Web\Politika;

use App\Http\Controllers\Controller;
use App\Models\Panel\TanimDil;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\Tanim\TanimPolitikalarKategori;
use App\Models\Panel\Doktor\Doktorlar;

class PolitikalarController extends Controller
{
    public function index($lang,$pklink,$plink)
    {
        $ayarlar        = Ayarlar::get();
        $diller         = TanimDil::get();
        $sitemenu       = SiteMenu::where('dilid',$lang)->get();
        dd($diller);
        return view('web.politikalar.index',[
            'sitemenu'              => $sitemenu,
            'diller'                => $diller,            
            'ayarlar'               => $ayarlar,
        ]);
    }
}
