<?php

namespace App\Http\Controllers\Web\Iletisim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panel\Iletisim;
use App\Models\Panel\Ayarlar;
use App\Models\Panel\Tanim\TanimPolitikalar;
use App\Models\Panel\TanimDil;
use App\Models\Panel\SiteMenu;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class IletisimController extends Controller
{
    public function index($lang)
    {   
        $sitemenu       = SiteMenu::where('parentid',0)
        ->where('dilid',$lang)
        ->get();        
        $diller             = TanimDil::get();
        $politikalarlist    = TanimPolitikalar::where ('kategoriid', 1)->where ('dilid', $lang)->get();
        $ayarlar            = Ayarlar::get();
        $iletisim           = Iletisim::get();
        return view('web.iletisim.index',[
            'sitemenu'      => $sitemenu,
            'iletisim'      => $iletisim,
            'diller'        => $diller,
            'ayarlar'       => $ayarlar,
            'politikalarlist'=> $politikalarlist,
        ]);
    }

    // Mail Gönder
    public function send(Request $request){

        $name       = $request->name;
        $email      = $request->email;
        $phone      = $request->phone;
        $subject    = $request->subject;
        $message    = $request->message;

        require 'PHPMailer/vendor/autoload.php';
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                                      
        $mail->isSMTP();                                          
        $mail->Host       = env('EMAIL_HOST');                        
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = env('EMAIL_USERNAME');                  
        $mail->Password   = env('EMAIL_PASSWORD');                              
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587;
        $mail->setFrom($email, $name); 
        $mail->addAddress('imgeweb@gmail.com');
        $mail->isHTML(true);  
        $mail->Subject = $subject;
        $mail->Body    = $phone.'<br>'.$message;
        $dt = $mail->send();
        if($dt){
            echo 'Başarılı';
        } else{
            echo 'Başarısız';
        }

        
    }
}
