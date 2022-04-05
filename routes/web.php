<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Yönetim Paneli
    // Doktorlar
    // Doktor İşlemleri
    Route::get('doktor','DoktorController@Web')
    ->name('doktor.doktorlar.liste');
 
    Route::prefix('yonetici/panel')->middleware('logincontrol')->group(function (){
        Route::get('giris', 'Panel\AuthController@index')
            ->name('Login');
        Route::post('giris', 'Panel\AuthController@LoginPost')
            ->name('Login.post');
    });



    
Route::prefix('yonetici/panel')->middleware('AuthControl')->group(function (){
    Route::get('anasayfa','Panel\MainController@Home')
        ->name('home');
    Route::get('yonetici/panel/cikis','Panel\AuthController@logout')
        ->name('cikis');

    // Editör
    Route::post('ckeditor/upload', 'Panel\CKEditorController@upload')->name('ckeditor.image-upload');    
    // Tanımlar
    // Dil İşlemleri
    Route::get('tanim/dil','Panel\TanimDilController@index')
    ->name('yonetici.tanim.dil.liste');
    Route::get('tanim/dil/ekle','Panel\TanimDilController@storeGet')
    ->name('yonetici.tanim.dil.store.get');
    Route::post('tanim/dil','Panel\TanimDilController@storePost')
    ->name('yonetici.tanim.dil.store.post');        
    Route::get('tanim/dil/{id}','Panel\TanimDilController@guncelleGet')
    ->name('yonetici.tanim.dil.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/dil/{id}','Panel\TanimDilController@destroy')
    ->name('yonetici.tanim.dil.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/dil/{id}','Panel\TanimDilController@update')
    ->name('yonetici.tanim.dil.update')
    ->where(['id' => '[0-9]+']);   
    // Hastane İşlemleri
    Route::get('tanim/hastane','Panel\TanimHastaneController@index')
    ->name('yonetici.tanim.hastane.liste');
    Route::get('tanim/hastane/ekle','Panel\TanimHastaneController@storeGet')
    ->name('yonetici.tanim.hastane.store.get');
    Route::post('tanim/hastane','Panel\TanimHastaneController@storePost')
    ->name('yonetici.tanim.hastane.store.post');        
    Route::get('tanim/hastane/{id}','Panel\TanimHastaneController@guncelleGet')
    ->name('yonetici.tanim.hastane.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/hastane/{id}','Panel\TanimHastaneController@destroy')
    ->name('yonetici.tanim.hastane.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/hastane/{id}','Panel\TanimHastaneController@update')
    ->name('yonetici.tanim.hastane.update')
    ->where(['id' => '[0-9]+']);   
    // Hızlı Menü İşlemleri
    Route::get('tanim/hizlimenu','Panel\TanimHizliMenuController@index')
    ->name('yonetici.tanim.hizlimenu.liste');
    Route::get('tanim/hizlimenu/ekle','Panel\TanimHizliMenuController@storeGet')
    ->name('yonetici.tanim.hizlimenu.store.get');
    Route::post('tanim/hizlimenu','Panel\TanimHizliMenuController@storePost')
    ->name('yonetici.tanim.hizlimenu.store.post');        
    Route::get('tanim/hizlimenu/{id}','Panel\TanimHizliMenuController@guncelleGet')
    ->name('yonetici.tanim.hizlimenu.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/hizlimenu/{id}','Panel\TanimHizliMenuController@destroy')
    ->name('yonetici.tanim.hizlimenu.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/hizlimenu/{id}','Panel\TanimHizliMenuController@update')
    ->name('yonetici.tanim.hizlimenu.update')
    ->where(['id' => '[0-9]+']);   
    // Yayın İşlemleri
    Route::get('tanim/yayinlar','Panel\Tanim\TanimYayinlarController@index')
    ->name('yonetici.tanim.yayinlar.liste');
    Route::get('tanim/yayinlar/ekle','Panel\Tanim\TanimYayinlarController@storeGet')
    ->name('yonetici.tanim.yayinlar.store.get');
    Route::post('tanim/yayinlar','Panel\Tanim\TanimYayinlarController@storePost')
    ->name('yonetici.tanim.yayinlar.store.post');        
    Route::get('tanim/yayinlar/{id}','Panel\Tanim\TanimYayinlarController@guncelleGet')
    ->name('yonetici.tanim.yayinlar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/yayinlar/{id}','Panel\Tanim\TanimYayinlarController@destroy')
    ->name('yonetici.tanim.yayinlar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/yayinlar/{id}','Panel\Tanim\TanimYayinlarController@update')
    ->name('yonetici.tanim.yayinlar.update')
    ->where(['id' => '[0-9]+']);   
    // Anlaşmalı Kurum İşlemleri
    Route::get('tanim/anlasmalikurumlar','Panel\Tanim\TanimAnlasmaliKurumlarController@index')
    ->name('yonetici.tanim.anlasmalikurumlar.liste');
    Route::get('tanim/anlasmalikurumlar/ekle','Panel\Tanim\TanimAnlasmaliKurumlarController@storeGet')
    ->name('yonetici.tanim.anlasmalikurumlar.store.get');
    Route::post('tanim/anlasmalikurumlar','Panel\Tanim\TanimAnlasmaliKurumlarController@storePost')
    ->name('yonetici.tanim.anlasmalikurumlar.store.post');        
    Route::get('tanim/anlasmalikurumlar/{id}','Panel\Tanim\TanimAnlasmaliKurumlarController@guncelleGet')
    ->name('yonetici.tanim.anlasmalikurumlar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/anlasmalikurumlar/{id}','Panel\Tanim\TanimAnlasmaliKurumlarController@destroy')
    ->name('yonetici.tanim.anlasmalikurumlar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/anlasmalikurumlar/{id}','Panel\Tanim\TanimAnlasmaliKurumlarController@update')
    ->name('yonetici.tanim.anlasmalikurumlar.update')
    ->where(['id' => '[0-9]+']);   
    // Tıbbi Birim İşlemleri
    Route::get('tanim/tibbibirimler','Panel\Tanim\TanimTibbiBirimlerController@index')
    ->name('yonetici.tanim.tibbibirimler.liste');
    Route::get('tanim/tibbibirimler/ekle','Panel\Tanim\TanimTibbiBirimlerController@storeGet')
    ->name('yonetici.tanim.tibbibirimler.store.get');
    Route::post('tanim/tibbibirimler','Panel\Tanim\TanimTibbiBirimlerController@storePost')
    ->name('yonetici.tanim.tibbibirimler.store.post');   
    Route::get('tanim/tibbibirimler/{id}','Panel\Tanim\TanimTibbiBirimlerController@guncelleGet')
    ->name('yonetici.tanim.tibbibirimler.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/tibbibirimler/{id}','Panel\Tanim\TanimTibbiBirimlerController@destroy')
    ->name('yonetici.tanim.tibbibirimler.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/tibbibirimler/{id}','Panel\Tanim\TanimTibbiBirimlerController@update')
    ->name('yonetici.tanim.tibbibirimler.update')
    ->where(['id' => '[0-9]+']);   
    Route::post('tanim/tibbibirimler/data','Panel\Tanim\TanimTibbiBirimlerController@data')
    ->name('yonetici.tanim.tibbibirimler.data');       
    // İçerik Kategori İşlemleri
    Route::get('tanim/icerikkategori','Panel\Tanim\TanimIcerikKategoriController@index')
    ->name('yonetici.tanim.icerikkategori.liste');
    Route::get('tanim/icerikkategori/ekle','Panel\Tanim\TanimIcerikKategoriController@storeGet')
    ->name('yonetici.tanim.icerikkategori.store.get');
    Route::post('tanim/icerikkategori','Panel\Tanim\TanimIcerikKategoriController@storePost')
    ->name('yonetici.tanim.icerikkategori.store.post');        
    Route::get('tanim/icerikkategori/{id}','Panel\Tanim\TanimIcerikKategoriController@guncelleGet')
    ->name('yonetici.tanim.icerikkategori.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/icerikkategori/{id}','Panel\Tanim\TanimIcerikKategoriController@destroy')
    ->name('yonetici.tanim.icerikkategori.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/icerikkategori/{id}','Panel\Tanim\TanimIcerikKategoriController@update')
    ->name('yonetici.tanim.icerikkategori.update')
    ->where(['id' => '[0-9]+']);   
    Route::post('tanim/icerikkategori/data','Panel\Tanim\TanimIcerikKategoriController@data')
    ->name('yonetici.tanim.icerikkategori.data');   
    // Politika Kategori İşlemleri
    Route::get('tanim/politikalarkategori','Panel\Tanim\TanimPolitikalarKategoriController@index')
    ->name('yonetici.tanim.politikalarkategori.liste');
    Route::get('tanim/politikalarkategori/ekle','Panel\Tanim\TanimPolitikalarKategoriController@storeGet')
    ->name('yonetici.tanim.politikalarkategori.store.get');
    Route::post('tanim/politikalarkategori','Panel\Tanim\TanimPolitikalarKategoriController@storePost')
    ->name('yonetici.tanim.politikalarkategori.store.post');        
    Route::get('tanim/politikalarkategori/{id}','Panel\Tanim\TanimPolitikalarKategoriController@guncelleGet')
    ->name('yonetici.tanim.politikalarkategori.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/politikalarkategori/{id}','Panel\Tanim\TanimPolitikalarKategoriController@destroy')
    ->name('yonetici.tanim.politikalarkategori.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/politikalarkategori/{id}','Panel\Tanim\TanimPolitikalarKategoriController@update')
    ->name('yonetici.tanim.politikalarkategori.update')
    ->where(['id' => '[0-9]+']);   
    // Anlaşmalı Kurum Kategori İşlemleri
    Route::get('tanim/anlasmalikurumkategori','Panel\Tanim\TanimAnlasmaliKurumKategoriController@index')
    ->name('yonetici.tanim.anlasmalikurumkategori.liste');
    Route::get('tanim/anlasmalikurumkategori/ekle','Panel\Tanim\TanimAnlasmaliKurumKategoriController@storeGet')
    ->name('yonetici.tanim.anlasmalikurumkategori.store.get');
    Route::post('tanim/anlasmalikurumkategori','Panel\Tanim\TanimAnlasmaliKurumKategoriController@storePost')
    ->name('yonetici.tanim.anlasmalikurumkategori.store.post');        
    Route::get('tanim/anlasmalikurumkategori/{id}','Panel\Tanim\TanimAnlasmaliKurumKategoriController@guncelleGet')
    ->name('yonetici.tanim.anlasmalikurumkategori.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/anlasmalikurumkategori/{id}','Panel\Tanim\TanimAnlasmaliKurumKategoriController@destroy')
    ->name('yonetici.tanim.anlasmalikurumkategori.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/anlasmalikurumkategori/{id}','Panel\Tanim\TanimAnlasmaliKurumKategoriController@update')
    ->name('yonetici.tanim.anlasmalikurumkategori.update')
    ->where(['id' => '[0-9]+']);   
    // Uzmanlık Alanı İşlemleri
    Route::get('tanim/uzmanlikalani','Panel\Tanim\TanimUzmanlikAlaniController@index')
    ->name('yonetici.tanim.uzmanlikalani.liste');
    Route::get('tanim/uzmanlikalani/ekle','Panel\Tanim\TanimUzmanlikAlaniController@storeGet')
    ->name('yonetici.tanim.uzmanlikalani.store.get');
    Route::post('tanim/uzmanlikalani','Panel\Tanim\TanimUzmanlikAlaniController@storePost')
    ->name('yonetici.tanim.uzmanlikalani.store.post');        
    Route::get('tanim/uzmanlikalani/{id}','Panel\Tanim\TanimUzmanlikAlaniController@guncelleGet')
    ->name('yonetici.tanim.uzmanlikalani.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/uzmanlikalani/{id}','Panel\Tanim\TanimUzmanlikAlaniController@destroy')
    ->name('yonetici.tanim.uzmanlikalani.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/uzmanlikalani/{id}','Panel\Tanim\TanimUzmanlikAlaniController@update')
    ->name('yonetici.tanim.uzmanlikalani.update')
    ->where(['id' => '[0-9]+']);    
    // Politika İşlemleri
    Route::get('tanim/politikalar','Panel\Tanim\TanimPolitikalarController@index')
    ->name('yonetici.tanim.politikalar.liste');
    Route::get('tanim/politikalar/ekle','Panel\Tanim\TanimPolitikalarController@storeGet')
    ->name('yonetici.tanim.politikalar.store.get');
    Route::post('tanim/politikalar','Panel\Tanim\TanimPolitikalarController@storePost')
    ->name('yonetici.tanim.politikalar.store.post');        
    Route::get('tanim/politikalar/{id}','Panel\Tanim\TanimPolitikalarController@guncelleGet')
    ->name('yonetici.tanim.politikalar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/politikalar/{id}','Panel\Tanim\TanimPolitikalarController@destroy')
    ->name('yonetici.tanim.politikalar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/politikalar/{id}','Panel\Tanim\TanimPolitikalarController@update')
    ->name('yonetici.tanim.politikalar.update')
    ->where(['id' => '[0-9]+']); 
    Route::post('tanim/politikalar/data','Panel\Tanim\TanimPolitikalarController@data')
    ->name('yonetici.tanim.politikalar.data');     
    // Hasta Rehberi İşlemleri
    Route::get('tanim/hastarehberi','Panel\Tanim\TanimHastaRehberiController@index')
    ->name('yonetici.tanim.hastarehberi.liste');
    Route::get('tanim/hastarehberi/ekle','Panel\Tanim\TanimHastaRehberiController@storeGet')
    ->name('yonetici.tanim.hastarehberi.store.get');
    Route::post('tanim/hastarehberi','Panel\Tanim\TanimHastaRehberiController@storePost')
    ->name('yonetici.tanim.hastarehberi.store.post');        
    Route::get('tanim/hastarehberi/{id}','Panel\Tanim\TanimHastaRehberiController@guncelleGet')
    ->name('yonetici.tanim.hastarehberi.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('tanim/hastarehberi/{id}','Panel\Tanim\TanimHastaRehberiController@destroy')
    ->name('yonetici.tanim.hastarehberi.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('tanim/hastarehberi/{id}','Panel\Tanim\TanimHastaRehberiController@update')
    ->name('yonetici.tanim.hastarehberi.update')
    ->where(['id' => '[0-9]+']); 
    Route::post('tanim/hastarehberi/data','Panel\Tanim\TanimHastaRehberiController@data')
    ->name('yonetici.tanim.hastarehberi.data');              
    // Doktor İşlemleri
    Route::get('doktor/doktorlar','Panel\Doktor\DoktorlarController@index')
    ->name('yonetici.doktor.doktorlar.liste');
    Route::get('doktor/doktorlar/ekle','Panel\Doktor\DoktorlarController@storeGet')
    ->name('yonetici.doktor.doktorlar.store.get');
    Route::post('doktor/doktorlar','Panel\Doktor\DoktorlarController@storePost')
    ->name('yonetici.doktor.doktorlar.store.post');        
    Route::get('doktor/doktorlar/{id}','Panel\Doktor\DoktorlarController@guncelleGet')
    ->name('yonetici.doktor.doktorlar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/doktorlar/{id}','Panel\Doktor\DoktorlarController@destroy')
    ->name('yonetici.doktor.doktorlar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/doktorlar/{id}','Panel\Doktor\DoktorlarController@update')
    ->name('yonetici.doktor.doktorlar.update')
    ->where(['id' => '[0-9]+']);   
    Route::post('doktor/doktorlar/data','Panel\Doktor\DoktorlarController@data')
    ->name('yonetici.doktor.doktorlar.data');   
    // İlgi Alanı İşlemleri
    Route::get('doktor/ilgialanlari','Panel\Doktor\DoktorIlgiAlanlariController@index')
    ->name('yonetici.doktor.ilgialanlari.liste');
    Route::get('doktor/ilgialanlari/ekle','Panel\Doktor\DoktorIlgiAlanlariController@storeGet')
    ->name('yonetici.doktor.ilgialanlari.store.get');
    Route::post('doktor/ilgialanlari','Panel\Doktor\DoktorIlgiAlanlariController@storePost')
    ->name('yonetici.doktor.ilgialanlari.store.post');        
    Route::get('doktor/ilgialanlari/{id}','Panel\Doktor\DoktorIlgiAlanlariController@guncelleGet')
    ->name('yonetici.doktor.ilgialanlari.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/ilgialanlari/{id}','Panel\Doktor\DoktorIlgiAlanlariController@destroy')
    ->name('yonetici.doktor.ilgialanlari.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/ilgialanlari/{id}','Panel\Doktor\DoktorIlgiAlanlariController@update')
    ->name('yonetici.doktor.ilgialanlari.update')
    ->where(['id' => '[0-9]+']); 
    Route::post('doktor/ilgialanlari/data','Panel\Doktor\DoktorIlgiAlanlariController@data')
    ->name('yonetici.doktor.ilgialanlari.data');  

    // Bilimsel Yayın İşlemleri
    Route::get('doktor/bilimselyayinlar','Panel\Doktor\DoktorBilimselYayinlarController@index')
    ->name('yonetici.doktor.bilimselyayinlar.liste');
    Route::get('doktor/bilimselyayinlar/ekle','Panel\Doktor\DoktorBilimselYayinlarController@storeGet')
    ->name('yonetici.doktor.bilimselyayinlar.store.get');
    Route::post('doktor/bilimselyayinlar','Panel\Doktor\DoktorBilimselYayinlarController@storePost')
    ->name('yonetici.doktor.bilimselyayinlar.store.post');        
    Route::get('doktor/bilimselyayinlar/{id}','Panel\Doktor\DoktorBilimselYayinlarController@guncelleGet')
    ->name('yonetici.doktor.bilimselyayinlar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/bilimselyayinlar/{id}','Panel\Doktor\DoktorBilimselYayinlarController@destroy')
    ->name('yonetici.doktor.bilimselyayinlar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/bilimselyayinlar/{id}','Panel\Doktor\DoktorBilimselYayinlarController@update')
    ->name('yonetici.doktor.bilimselyayinlar.update')
    ->where(['id' => '[0-9]+']); 
    Route::post('doktor/bilimselyayinlar/data','Panel\Doktor\DoktorBilimselYayinlarController@data')
    ->name('yonetici.doktor.bilimselyayinlar.data');  

    // Görev Yaptığı Alan İşlemleri
    Route::get('doktor/yaptigigorevler','Panel\Doktor\DoktorYaptigiGorevlerController@index')
    ->name('yonetici.doktor.yaptigigorevler.liste');
    Route::get('doktor/yaptigigorevler/ekle','Panel\Doktor\DoktorYaptigiGorevlerController@storeGet')
    ->name('yonetici.doktor.yaptigigorevler.store.get');
    Route::post('doktor/yaptigigorevler','Panel\Doktor\DoktorYaptigiGorevlerController@storePost')
    ->name('yonetici.doktor.yaptigigorevler.store.post');        
    Route::get('doktor/yaptigigorevler/{id}','Panel\Doktor\DoktorYaptigiGorevlerController@guncelleGet')
    ->name('yonetici.doktor.yaptigigorevler.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/yaptigigorevler/{id}','Panel\Doktor\DoktorYaptigiGorevlerController@destroy')
    ->name('yonetici.doktor.yaptigigorevler.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/yaptigigorevler/{id}','Panel\Doktor\DoktorYaptigiGorevlerController@update')
    ->name('yonetici.doktor.yaptigigorevler.update')
    ->where(['id' => '[0-9]+']);     
    Route::post('doktor/yaptigigorevler/data','Panel\Doktor\DoktorYaptigiGorevlerController@data')
    ->name('yonetici.doktor.yaptigigorevler.data');         
    // Mesleki Üyelik Alan İşlemleri
    Route::get('doktor/meslekiuyelik','Panel\Doktor\DoktorMeslekiUyelikController@index')
    ->name('yonetici.doktor.meslekiuyelik.liste');
    Route::get('doktor/meslekiuyelik/ekle','Panel\Doktor\DoktorMeslekiUyelikController@storeGet')
    ->name('yonetici.doktor.meslekiuyelik.store.get');
    Route::post('doktor/meslekiuyelik','Panel\Doktor\DoktorMeslekiUyelikController@storePost')
    ->name('yonetici.doktor.meslekiuyelik.store.post');        
    Route::get('doktor/meslekiuyelik/{id}','Panel\Doktor\DoktorMeslekiUyelikController@guncelleGet')
    ->name('yonetici.doktor.meslekiuyelik.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/meslekiuyelik/{id}','Panel\Doktor\DoktorMeslekiUyelikController@destroy')
    ->name('yonetici.doktor.meslekiuyelik.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/meslekiuyelik/{id}','Panel\Doktor\DoktorMeslekiUyelikController@update')
    ->name('yonetici.doktor.meslekiuyelik.update')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/meslekiuyelik/data','Panel\Doktor\DoktorMeslekiUyelikController@data')
    ->name('yonetici.doktor.meslekiuyelik.data');      
    // Ödül Derece İşlemleri
    Route::get('doktor/odulderece','Panel\Doktor\DoktorOdulDereceController@index')
    ->name('yonetici.doktor.odulderece.liste');
    Route::get('doktor/odulderece/ekle','Panel\Doktor\DoktorOdulDereceController@storeGet')
    ->name('yonetici.doktor.odulderece.store.get');
    Route::post('doktor/odulderece','Panel\Doktor\DoktorOdulDereceController@storePost')
    ->name('yonetici.doktor.odulderece.store.post');        
    Route::get('doktor/odulderece/{id}','Panel\Doktor\DoktorOdulDereceController@guncelleGet')
    ->name('yonetici.doktor.odulderece.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/odulderece/{id}','Panel\Doktor\DoktorOdulDereceController@destroy')
    ->name('yonetici.doktor.odulderece.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/odulderece/{id}','Panel\Doktor\DoktorOdulDereceController@update')
    ->name('yonetici.doktor.odulderece.update')
    ->where(['id' => '[0-9]+']);   
    Route::post('doktor/odulderece/data','Panel\Doktor\DoktorOdulDereceController@data')
    ->name('yonetici.doktor.odulderece.data');          
    // Kurslar ve Konferanslar İşlemleri
    Route::get('doktor/kurskonferans','Panel\Doktor\DoktorKursKonferansController@index')
    ->name('yonetici.doktor.kurskonferans.liste');
    Route::get('doktor/kurskonferans/ekle','Panel\Doktor\DoktorKursKonferansController@storeGet')
    ->name('yonetici.doktor.kurskonferans.store.get');
    Route::post('doktor/kurskonferans','Panel\Doktor\DoktorKursKonferansController@storePost')
    ->name('yonetici.doktor.kurskonferans.store.post');        
    Route::get('doktor/kurskonferans/{id}','Panel\Doktor\DoktorKursKonferansController@guncelleGet')
    ->name('yonetici.doktor.kurskonferans.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/kurskonferans/{id}','Panel\Doktor\DoktorKursKonferansController@destroy')
    ->name('yonetici.doktor.kurskonferans.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/kurskonferans/{id}','Panel\Doktor\DoktorKursKonferansController@update')
    ->name('yonetici.doktor.kurskonferans.update')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/kurskonferans/data','Panel\Doktor\DoktorKursKonferansController@data')
    ->name('yonetici.doktor.kurskonferans.data');        
    // Eğitimler İşlemleri
    Route::get('doktor/egitimler','Panel\Doktor\DoktorEgitimController@index')
    ->name('yonetici.doktor.egitimler.liste');
    Route::get('doktor/egitimler/ekle','Panel\Doktor\DoktorEgitimController@storeGet')
    ->name('yonetici.doktor.egitimler.store.get');
    Route::post('doktor/egitimler','Panel\Doktor\DoktorEgitimController@storePost')
    ->name('yonetici.doktor.egitimler.store.post');        
    Route::get('doktor/egitimler/{id}','Panel\Doktor\DoktorEgitimController@guncelleGet')
    ->name('yonetici.doktor.egitimler.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('doktor/egitimler/{id}','Panel\Doktor\DoktorEgitimController@destroy')
    ->name('yonetici.doktor.egitimler.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('doktor/egitimler/{id}','Panel\Doktor\DoktorEgitimController@update')
    ->name('yonetici.doktor.egitimler.update')
    ->where(['id' => '[0-9]+']);  
    Route::post('doktor/egitimler/data','Panel\Doktor\DoktorEgitimController@data')
    ->name('yonetici.doktor.egitimler.data');      
    // Ameliyathane İşlemleri
    Route::get('ameliyathaneler','Panel\AmeliyathanelerController@index')
    ->name('yonetici.ameliyathaneler.liste');
    Route::get('ameliyathaneler/ekle','Panel\AmeliyathanelerController@storeGet')
    ->name('yonetici.ameliyathaneler.store.get');
    Route::post('ameliyathaneler','Panel\AmeliyathanelerController@storePost')
    ->name('yonetici.ameliyathaneler.store.post');        
    Route::get('ameliyathaneler/{id}','Panel\AmeliyathanelerController@guncelleGet')
    ->name('yonetici.ameliyathaneler.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('ameliyathaneler/{id}','Panel\AmeliyathanelerController@destroy')
    ->name('yonetici.ameliyathaneler.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('ameliyathaneler/{id}','Panel\AmeliyathanelerController@update')
    ->name('yonetici.ameliyathaneler.update')
    ->where(['id' => '[0-9]+']);
    Route::post('ameliyathaneler/data','Panel\AmeliyathanelerController@data')
    ->name('yonetici.ameliyathaneler.data');     
    // İçerik İşlemleri
    Route::get('icerikler','Panel\IceriklerController@index')
    ->name('yonetici.icerikler.liste');
    Route::get('icerikler/ekle','Panel\IceriklerController@storeGet')
    ->name('yonetici.icerikler.store.get');
    Route::post('icerikler','Panel\IceriklerController@storePost')
    ->name('yonetici.icerikler.store.post');        
    Route::get('icerikler/{id}','Panel\IceriklerController@guncelleGet')
    ->name('yonetici.icerikler.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('icerikler/{id}','Panel\IceriklerController@destroy')
    ->name('yonetici.icerikler.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('icerikler/{id}','Panel\IceriklerController@update')
    ->name('yonetici.icerikler.update')
    ->where(['id' => '[0-9]+']);
    Route::post('icerikler/data','Panel\IceriklerController@data')
    ->name('yonetici.icerikler.data'); 
    // Foto Galeri İşlemleri
    Route::get('fotogaleri','Panel\FotoGaleriController@index')
    ->name('yonetici.fotogaleri.liste');
    Route::get('fotogaleri/ekle','Panel\FotoGaleriController@storeGet')
    ->name('yonetici.fotogaleri.store.get');
    Route::post('fotogaleri','Panel\FotoGaleriController@storePost')
    ->name('yonetici.fotogaleri.store.post');        
    Route::get('fotogaleri/{id}','Panel\FotoGaleriController@guncelleGet')
    ->name('yonetici.fotogaleri.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('fotogaleri/{id}','Panel\FotoGaleriController@destroy')
    ->name('yonetici.fotogaleri.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('fotogaleri/{id}','Panel\FotoGaleriController@update')
    ->name('yonetici.fotogaleri.update')
    ->where(['id' => '[0-9]+']);
    Route::post('fotogaleri/data','Panel\FotoGaleriController@data')
    ->name('yonetici.fotogaleri.data');    
    // Hakkımızda İşlemleri
    Route::get('hakkimizda','Panel\HakkimizdaController@index')
    ->name('yonetici.hakkimizda.liste');
    Route::get('hakkimizda/ekle','Panel\HakkimizdaController@storeGet')
    ->name('yonetici.hakkimizda.store.get');
    Route::post('hakkimizda','Panel\HakkimizdaController@storePost')
    ->name('yonetici.hakkimizda.store.post');        
    Route::get('hakkimizda/{id}','Panel\HakkimizdaController@guncelleGet')
    ->name('yonetici.hakkimizda.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('hakkimizda/{id}','Panel\HakkimizdaController@destroy')
    ->name('yonetici.hakkimizda.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('hakkimizda/{id}','Panel\HakkimizdaController@update')
    ->name('yonetici.hakkimizda.update')
    ->where(['id' => '[0-9]+']);
    Route::post('hakkimizda/data','Panel\HakkimizdaController@data')
    ->name('yonetici.hakkimizda.data');     
    // Sponsporluk İşlemleri
    Route::get('sponsorluklar','Panel\SponsorluklarController@index')
    ->name('yonetici.sponsorluklar.liste');
    Route::get('sponsorluklar/ekle','Panel\SponsorluklarController@storeGet')
    ->name('yonetici.sponsorluklar.store.get');
    Route::post('sponsorluklar','Panel\SponsorluklarController@storePost')
    ->name('yonetici.sponsorluklar.store.post');        
    Route::get('sponsorluklar/{id}','Panel\SponsorluklarController@guncelleGet')
    ->name('yonetici.sponsorluklar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('sponsorluklar/{id}','Panel\SponsorluklarController@destroy')
    ->name('yonetici.sponsorluklar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('sponsorluklar/{id}','Panel\SponsorluklarController@update')
    ->name('yonetici.sponsorluklar.update')
    ->where(['id' => '[0-9]+']);
    Route::post('sponsorluklar/data','Panel\SponsorluklarController@data')
    ->name('yonetici.sponsorluklar.data');  
    // Site Ayarları
    Route::get('ayarlar','Panel\AyarlarController@index')
    ->name('yonetici.ayarlar.liste');    
    Route::get('ayarlar/ekle','Panel\AyarlarController@storeGet')
    ->name('yonetici.ayarlar.store.get');
    Route::post('ayarlar','Panel\AyarlarController@storePost')
    ->name('yonetici.ayarlar.store.post');        
    Route::get('ayarlar/{id}','Panel\AyarlarController@guncelleGet')
    ->name('yonetici.ayarlar.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('ayarlar/{id}','Panel\AyarlarController@destroy')
    ->name('yonetici.ayarlar.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('ayarlar/{id}','Panel\AyarlarController@update')
    ->name('yonetici.ayarlar.update')
    ->where(['id' => '[0-9]+']);
    Route::post('ayarlar/data','Panel\AyarlarController@data')
    ->name('yonetici.ayarlar.data');   
    // İletişim Ayarları
    Route::get('iletisim','Panel\IletisimController@index')
    ->name('yonetici.iletisim.liste');    
    Route::get('iletisim/ekle','Panel\IletisimController@storeGet')
    ->name('yonetici.iletisim.store.get');
    Route::post('iletisim','Panel\IletisimController@storePost')
    ->name('yonetici.iletisim.store.post');        
    Route::get('iletisim/{id}','Panel\IletisimController@guncelleGet')
    ->name('yonetici.iletisim.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('iletisim/{id}','Panel\IletisimController@destroy')
    ->name('yonetici.iletisim.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('iletisim/{id}','Panel\IletisimController@update')
    ->name('yonetici.iletisim.update')
    ->where(['id' => '[0-9]+']);
    Route::post('iletisim/data','Panel\IletisimController@data')
    ->name('yonetici.iletisim.data');
    // Site Menüsü Ayarları
    Route::get('sitemenu','Panel\SiteMenuController@index')
    ->name('yonetici.sitemenu.liste');    
    Route::get('sitemenu/ekle','Panel\SiteMenuController@storeGet')
    ->name('yonetici.sitemenu.store.get');
    Route::post('sitemenu','Panel\SiteMenuController@storePost')
    ->name('yonetici.sitemenu.store.post');        
    Route::get('sitemenu/{id}','Panel\SiteMenuController@guncelleGet')
    ->name('yonetici.sitemenu.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('sitemenu/{id}','Panel\SiteMenuController@destroy')
    ->name('yonetici.sitemenu.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('sitemenu/{id}','Panel\SiteMenuController@update')
    ->name('yonetici.sitemenu.update')
    ->where(['id' => '[0-9]+']);
    Route::post('sitemenu/data','Panel\SiteMenuController@data')
    ->name('yonetici.sitemenu.data');
    // Kullanıcı Ayarları
    Route::get('kullanici','Panel\KullaniciController@index')
    ->name('yonetici.kullanici.liste');    
    Route::get('kullanici/ekle','Panel\KullaniciController@storeGet')
    ->name('yonetici.kullanici.store.get');
    Route::post('kullanici','Panel\KullaniciController@storePost')
    ->name('yonetici.kullanici.store.post');        
    Route::get('kullanici/{id}','Panel\KullaniciController@guncelleGet')
    ->name('yonetici.kullanici.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('kullanici/{id}','Panel\KullaniciController@destroy')
    ->name('yonetici.kullanici.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('kullanici/{id}','Panel\KullaniciController@update')
    ->name('yonetici.kullanici.update')
    ->where(['id' => '[0-9]+']);
    Route::post('kullanici/data','Panel\KullaniciController@data')
    ->name('yonetici.kullanici.data');      
    // Slider Ayarları
    Route::get('slider','Panel\SliderController@index')
    ->name('yonetici.slider.liste');    
    Route::get('slider/ekle','Panel\SliderController@storeGet')
    ->name('yonetici.slider.store.get');
    Route::post('slider','Panel\SliderController@storePost')
    ->name('yonetici.slider.store.post');        
    Route::get('slider/{id}','Panel\SliderController@guncelleGet')
    ->name('yonetici.slider.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('slider/{id}','Panel\SliderController@destroy')
    ->name('yonetici.slider.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('slider/{id}','Panel\SliderController@update')
    ->name('yonetici.slider.update')
    ->where(['id' => '[0-9]+']);
    Route::post('slider/data','Panel\SliderController@data')
    ->name('yonetici.slider.data'); 
    // İnsan Kaynakları
    Route::get('ik','Panel\Ik\IkController@index')
    ->name('yonetici.ik.liste');    
    Route::get('ik/ekle','Panel\Ik\IkController@storeGet')
    ->name('yonetici.ik.store.get');    
    Route::get('ik/detay/{id}','Panel\Ik\IkController@detay')
    ->name('yonetici.ik.detay');
    Route::post('ik','Panel\Ik\IkController@storePost')
    ->name('yonetici.ik.store.post');        
    Route::get('ik/{id}','Panel\Ik\IkController@guncelleGet')
    ->name('yonetici.ik.guncelle.get')
    ->where(['id' => '[0-9]+']);
    Route::delete('ik/{id}','Panel\Ik\IkController@destroy')
    ->name('yonetici.ik.destroy')
    ->where(['id' => '[0-9]+']);
    Route::post('ik/{id}','Panel\Ik\IkController@update')
    ->name('yonetici.ik.update')
    ->where(['id' => '[0-9]+']);
    Route::post('ik/data','Panel\Ik\IkController@data')
    ->name('yonetici.ik.data');       
});
 
//Web Sitesi 
Route::group(['prefix' => '{locale?}', 'middleware' => 'localize'], function () {
    // Anasayfa
    Route::get('/', 'IndexController@Web')
    ->name('web');   
    // İletişim
    Route::get('/iletisim', 'Web\Iletisim\IletisimController@index')
    ->name('web.iletisim.index'); 
    // İletişim
    Route::post('/send', 'Web\Iletisim\IletisimController@send')
    ->name('web.iletisim.send'); 
    // İk
    Route::get('/ik', 'Web\Ik\IkController@index')->name('web.ik.index'); 
    Route::get('/ik/step/{id}', 'Web\Ik\IkController@step')->name('web.ik.step')->where(['id' => '[0-9]+']);; 
    Route::post('/ik','Web\Ik\IkController@kaydet')->name('web.ik.kaydet'); 
    Route::post('/ik/ek','Web\Ik\EkIkController@epost')->name('web.ek.ik.epost'); 
    Route::post('/ik/ilgialani','Web\Ik\EkIlgiAlaniController@epost')->name('web.ilgialani.ik.epost'); 
    Route::post('/ik/referans','Web\Ik\EkReferansController@epost')->name('web.referans.ik.epost'); 
    Route::post('/ik/beceri','Web\Ik\EkBeceriController@epost')->name('web.beceri.ik.epost'); 
    Route::post('/ik/isdeneyimi','Web\Ik\EkIsDeneyimiController@epost')->name('web.isdeneyimi.ik.epost'); 
    Route::post('/ik/kurslar','Web\Ik\EkKurslarController@epost')->name('web.kurslar.ik.epost'); 
    Route::post('/ik/dilleri','Web\Ik\EkDilController@epost')->name('web.dilleri.ik.epost'); 
    Route::delete('ik/sil/{id}','Web\Ik\EkIkController@destroy')->name('web.sil.ik.destroy')->where(['id' => '[0-9]+']);    
    // Doktorlar
    Route::get('/doktorlarimiz', 'Web\Doktor\DoktorlarController@index')->name('web.doktorlar.index');         
    // Sponsorluklar
    Route::get('/sponsorluklar', 'Web\Sponsor\SponsorluklarController@index')->name('web.sponsorluklar.index');
    // Anlaşmalı Kurumlar
    Route::get('/anlasmalikurumlar', 'Web\Kurum\AnlasmaliKurumlarController@index')->name('web.anlasmalikurumlar.index');
    // Hakkımızda
    Route::get('/kurumsal/{halink}', 'Web\Kurumsal\WebKurumsalController@index')->name('web.kurumsal.index');
    // Sözleşmeler
    Route::get('/sozlesmeler/{plink}', 'Web\Sozlesme\SozlesmelerController@index')->name('web.sozlesmeler.index');
    // Doktorlar
    Route::get('/doktor/{dlink}', 'Web\Doktor\DoktorlarController@detay')->name('web.doktorlar.detay');         
    // Tıbbi Birimler
    Route::get('/tibbi-birimler', 'Web\TibbiBirim\WebTibbiBirimlerController@index')->name('web.tibbi-birimler.index');
    // Hasta Rehberi
    Route::get('/hasta-rehberi', 'Web\HastaRehberi\WebHastaRehberiController@index')->name('web.hasta-rehberi.index');
    // Tıbbi Birimler
    Route::get('/tibbi-birimler/{tlink}', 'Web\TibbiBirim\WebTibbiBirimlerController@detay')->name('web.tibbi-birimler.detay');        
    // Kategoriler
    Route::get('/{hlink}', 'Web\Kategori\WebKategorilerController@index')->name('web.kategori.index');         
    // İçerik Detayı
    Route::get('/{hlink}/{ilink}', 'Web\Icerik\WebIcerikController@index')->name('web.icerik.index'); 
    // Doktor Arama
    Route::get('/search', 'Web\Doktor\DoktorlarController@search')->name('web.doktorlar.search');         

});