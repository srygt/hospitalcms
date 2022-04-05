<?php

use Illuminate\Database\Seeder;

class IkBolumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['bolumadi' => 'Hemşire'],
            ['bolumadi' => 'Aşçı'],
            ['bolumadi' => 'Fizik Tedavi Teknikeri - Teknisyeni'],
            ['bolumadi' => 'Anestezi Teknikeri - Teknisyeni'],
            ['bolumadi' => 'İnsan Kaynakları'],
            ['bolumadi' => 'Muhasebe'],
            ['bolumadi' => 'Halkla İlişkiler'],
            ['bolumadi' => 'Yönetici Asistanı'],
            ['bolumadi' => 'Arşiv'],
            ['bolumadi' => 'Şoför'],
            ['bolumadi' => 'Tıbbi Sekreter'],
            ['bolumadi' => 'İdari Personel'],
            ['bolumadi' => 'Kalite'],
            ['bolumadi' => 'Teknik Servis Elemanı'],
            ['bolumadi' => 'ATT'],
            ['bolumadi' => 'Radyoloji Teknikeri'],
            ['bolumadi' => 'Tıbbi Laboratuvar Teknikeri'],
            ['bolumadi' => 'EEG VE EMG Teknikeri'],
            ['bolumadi' => 'Özel Sigortalar'],
            ['bolumadi' => 'Diyetisyen'],
            ['bolumadi' => 'Eczacılık Teknikeri'],
            ['bolumadi' => 'Bilgi İşlem'],
            ['bolumadi' => 'Temizlik Görevlisi'],
            ['bolumadi' => 'Hasta Kayıt Kabul Görevlisi'],
            ['bolumadi' => 'Hasta Danışmanı'],
            ['bolumadi' => 'Satın Alma'],
            ['bolumadi' => 'Pazarlama'],
            ['bolumadi' => 'Mutfak'],
            ['bolumadi' => 'Güvenlik'],
            ['bolumadi' => 'Ebe'],
            ['bolumadi' => 'Estetisyen'],
            ['bolumadi' => 'Eczacı'],
            ['bolumadi' => 'Güzellik Uzmanı'],
            ['bolumadi' => 'Laborant'],
            ['bolumadi' => 'Odyometri'],
            ['bolumadi' => 'Çağrı Merkezi'],
            ['bolumadi' => 'Sosyal Medya Uzmanı'],
            ['bolumadi' => 'Diğer'],
        ];

        foreach($query as $d){
            \App\Models\Ik\IkBolum::create($d);        
        }
    }
}
