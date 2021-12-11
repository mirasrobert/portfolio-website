<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function contact(Request $request) {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer();

         //Server settings
         $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
         $mail->isSMTP();                                            //Send using SMTP
         $mail->Host       = env('PHP_MAILER_HOST');                     //Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
         $mail->Username   = env('PHP_MAILER_USERNAME');                     //SMTP username
         $mail->Password   = env('PHP_MAILER_PASSWORD');                               //SMTP password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
         $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

         //Recipients
         $mail->setFrom('mrmirasrobert@gmail.com', $request->name);
         $mail->addAddress('mrmirasrobert@gmail.com');

         //Content
         $mail->isHTML(true);                                  //Set email format to HTML
         $mail->Subject = $request->subject;
         $mail->Body    = 'From: '.$request->email.'
         <p>'.$request->message.'</p>';

         if(!$mail->send()) {
            return $mail->ErrorInfo;
         }

         return redirect()->route('index')->with('success', 'Email has been sent!');
    }
}
