<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send() {
        $title = 'Mail';

        Mail::to('aleks.lyashenko.ret@gmail.com')->send(new TestMail());

        return view('maxmoll.send', compact('title'));
    }
}
