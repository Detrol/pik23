<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\Rules\ValidHCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Vite;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class HomeController extends Controller
{
    private function getView($viewName)
    {
        if (request()->segment(1) == 'amp') {
            if (view()->exists($viewName . '-amp')) {
                $viewName .= '-amp';
            } else {
                abort(404);
            }
        }
        return $viewName;
    }

    function home(Request $request)
    {
        return $this->getView('welcome');
    }

    function xml(Request $request)
    {
        SitemapGenerator::create(config('app.url'))
            ->getSitemap()
            /*->add(Url::create('/')->addImage(Vite::asset('resources/images/jag1.jpg')))
            ->add(Url::create('/priser'))
            ->add(Url::create('/vanliga-fragor'))
            ->add(Url::create('/miljovanligt'))
            ->add(Url::create('/tjanster'))
            ->add(Url::create('/garanti'))*/

            ->writeToFile(public_path('sitemap.xml'));
    }

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
