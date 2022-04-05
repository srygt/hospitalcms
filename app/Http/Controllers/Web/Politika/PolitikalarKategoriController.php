<?php

namespace App\Http\Controllers\Web\Politika;

use App\Http\Controllers\Controller;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\Tanim\TanimPolitikalarKategori;

class PolitikalarKategoriController extends Controller
{
    public function index(String $pklink)
    {
        $politikalarkategori    = TanimPolitikalarKategori::where ('pklink', $pklink)->get();
        $politikalarkat         = TanimPolitikalarKategori::get();
        $ayarlar                = Ayarlar::get();
        return view('web.kategori.index',[
            'ayarlar'               => $ayarlar,
            'politikalarkategori'   => $politikalarkategori,
            'politikalarkat'        => $politikalarkat,
        ]);
    }
}
