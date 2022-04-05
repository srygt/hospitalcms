<?php

namespace App\Http\Controllers\Web\Kurum;
use App\Http\Controllers\Controller;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\SiteMenu;
use App\Models\Panel\Tanim\TanimAnlasmaliKurumKategori;
use App\Models\Panel\Tanim\TanimAnlasmaliKurumlar;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\TanimDil;

class AnlasmaliKurumlarController extends Controller
{
    public function index($lang)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $anlasmalikurumlar  = TanimAnlasmaliKurumlar::where ('dilid', $lang)->get();
        $anlasmalikurumlark = TanimAnlasmaliKurumKategori::where ('dilid', $lang)->get();

        return view('web.anlasmalikurumlar.index',[
            'sitemenu'          => $sitemenu,
            'anlasmalikurumlar' => $anlasmalikurumlar,
            'anlasmalikurumlark'=> $anlasmalikurumlark,
            'diller'            => $diller,
            'ayarlar'           => $ayarlar,
            'politikalarlist'   => $politikalarlist,
        ]);
    }   
}
