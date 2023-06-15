<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function sendMail(){
        $name = new User();
        $name->name = ' newton';
        $registerMail = new RegisterMail($name);

        return $registerMail;
        /* for($i = 0; $i < 1; $i++){
            $teste = Mail::to('newtonplay007@gmail.com')->send($registerMail);

        } */

    }


}

