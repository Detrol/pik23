<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\Rules\ValidHCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Vite;
use RalphJSmit\Laravel\SEO\Support\SEOData;
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

    function index(Request $request)
    {
        return view('welcome', [
            'SEOData' => new SEOData(
                title: '',
                description: 'Fönsterputs i Karlstad, Hammarö, Grums, Molkom & Kil. Med över 10 års erfarenhet så kan jag erbjuda dig hjälp med kunskap, teknik, och rätt utrustning.',
            ),
        ]);
    }

    function prices(Request $request)
    {
        return view('prices', [
            'SEOData' => new SEOData(
                title: 'Priser',
                description: 'Priser på fönsterputs och tilläggstjänster?',
            ),
        ]);
    }

    function services(Request $request)
    {
        return view('services', [
            'SEOData' => new SEOData(
                title: 'Tjänster',
                description: 'En lista på de tjänster jag erbjuder.',
            ),
        ]);
    }

    function miljovanligt(Request $request)
    {
        return view('miljovanligt', [
            'SEOData' => new SEOData(
                title: 'Miljövänligt',
                description: 'Puts i Karlstad är ett helt miljövänligt alternativ för fönsterputs.',
            ),
        ]);
    }

    function faq(Request $request)
    {
        return view('faq', [
            'SEOData' => new SEOData(
                title: 'Vanliga frågor',
                description: 'Allmänviktig information och frågor kunder ställer.',
            ),
        ]);
    }

    function guarantee(Request $request)
    {
        return view('guarantee', [
            'SEOData' => new SEOData(
                title: 'Garanti',
                description: 'Hos mig så har du garanti vid det oväntade.',
            ),
        ]);
    }

    function hus(Request $request)
    {
        return view('hus', [
            'SEOData' => new SEOData(
                title: 'Fönsterputs av hus',
                description: 'Fönsterputsning av hus.',
            ),
        ]);
    }

    function lagenhet(Request $request)
    {
        return view('lagenhet', [
            'SEOData' => new SEOData(
                title: 'Fönsterputs av lägenhet',
                description: 'Fönsterputsning av lägenhet.',
            ),
        ]);
    }

    function kontor(Request $request)
    {
        return view('kontor', [
            'SEOData' => new SEOData(
                title: 'Fönsterputs av kontor',
                description: 'Fönsterputsning av kontor.',
            ),
        ]);
    }

    function trapphus(Request $request)
    {
        return view('trapphus', [
            'SEOData' => new SEOData(
                title: 'Fönsterputs av trapphus',
                description: 'Fönsterputsning av trapphus.',
            ),
        ]);
    }

    function skyltfonster(Request $request)
    {
        return view('skyltfonster', [
            'SEOData' => new SEOData(
                title: 'Fönsterputs av skyltfönster',
                description: 'Fönsterputsning av skyltfönster.',
            ),
        ]);
    }

    function xml(Request $request)
    {
        SitemapGenerator::create(config('app.url'))
            ->getSitemap()
            ->add(Url::create('/')->addImage(Vite::asset('resources/images/jag1.jpg')))
            ->add(Url::create('/priser'))
            ->add(Url::create('/vanliga-fragor'))
            ->add(Url::create('/miljovanligt'))
            ->add(Url::create('/tjanster'))
            ->add(Url::create('/garanti'))

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
            'h-captcha-response' => ['hcaptcha'],
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

            return redirect()->route('index')->with('status', 'Jag har nu mottagit ditt meddelande, och jag svarar oftast inom några timmar.');
        }

        return redirect()->route('index')->with('status', 'Något gick fel.');

    }
}
