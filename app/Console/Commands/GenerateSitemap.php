<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Vite;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Sitemap::create()
            ->add(Url::create('/')->addImage(Vite::asset('resources/images/jag1.jpg')))
            ->add(Url::create('/priser'))
            ->add(Url::create('/vanliga-fragor'))
            ->add(Url::create('/miljovanligt'))
            ->add(Url::create('/tjanster'))
            ->add(Url::create('/garanti'))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
