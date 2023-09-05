<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\DemoMail;


class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title'=> 'Mail from oussama',
            'body'=> 'This email is for testing and it is from oussama',
        ];

        Mail::to('jackmarrow06@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfully');
    }
}
