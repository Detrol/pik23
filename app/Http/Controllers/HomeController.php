<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\Rules\ValidHCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function form_mail(Request $request)
    {
        $title = 'Kontaktformulär';

        $request->validate([
            'message' => 'required',
            'email' => 'required|email',
            'name' => 'required',
            //'h-captcha-response' => ['required', new ValidHCaptcha()]
        ]);

        $subject = 'Kontaktformulär';

        $mailData = [
            "subject" => $subject,
            'message' => $request->message,
            'title' => $title,
            'contact_name' => $request->name,
            'contact_email' => $request->email,
        ];

        if ($request->norobot != '') {
            return redirect()->route('home')->with('status', 'Något gick fel.');
        }

        if ($request->action == 'contact_form_submit') {
            Mail::to('info@putsikarlstad.se')->send(new FormMail($mailData));

            return redirect()->route('home')->with('status', 'Jag har nu mottagit ditt meddelande, och jag svarar oftast inom några timmar.');
        }

        return redirect()->route('home')->with('status', 'Något gick fel.');

    }
}
