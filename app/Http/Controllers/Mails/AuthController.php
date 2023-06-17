<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthEmail;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function sendMail(){

        $user = new User();
        $user->name = ' newton';
        $user->password = '123';
        $user->email = 'newtoncurtim@gmail.com';
        $user->save();


        /*return $registerMail; */
        SendAuthEmail::dispatch($user);

    }


}

