<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function sendMail(){
        $registerMail = new RegisterMail();


        for($i = 0; $i < 1; $i++){
            $teste = Mail::to('newtonplay007@gmail.com')->send($registerMail);

        }
    }
}
