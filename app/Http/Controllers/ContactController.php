<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request) {
        $title = 'Mail';

        if ($request->method() == 'POST') {
            $body = "<p><b>Имя:</b> {$request->input('name')} </p>";
            $body .= "<p><b>Email:</b> {$request->input('email')} </p>";
            $body .= "<p><b>Сообщение:</b><br> {$request->input('text')} </p>";
            Mail::to('aleks.lyashenko89@gmail.com')->send(new TestMail($body));
            $request->session()->flash('success', 'Сообщение отправлено успешно');
            return redirect()->route('maxmoll.send');
        }

        return view('maxmoll.send', compact('title'));
    }
}
