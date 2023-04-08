<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @if ((request()->getHost() != 'localhost'))
        <!-- Start cookieyes banner-->
        <script id="cookieyes" type="text/javascript"
                src="https://cdn-cookieyes.com/client_data/c6d6f38be996256f95bf589d/script.js" async></script>
        <!-- End cookieyes banner -->

        <!-- Google Tag Manager
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TRRFHRQ');</script>-->
        <!-- End Google Tag Manager -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1EBSJD78RB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-1EBSJD78RB');
        </script>
    @endif

    <script type="application/ld+json">
{"@context" : "http://schema.org",
 "@type" : "Organization",
  "name" : "Puts i Karlstad",
  "url" : "https://putsikarlstad.se",
  "logo": "https://putsikarlstad.se/assets/images/logo-blank_smaller.png",
  "image": "https://putsikarlstad.se/assets/images/logo-blank_smaller.png",
   "description": "Fönsterputs i Karlstad, Hammarö, Vålberg, Grums, Molkom, Kil & Väse med omnejd."}

    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! seo($SEOData) !!}

    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com/') }}">
    <link rel="dns-prefetch" href="{{ url('https://fonts.googleapis.com/') }}">

    <!-- Fonts -->
    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,400;0,600;1,200&display=swap"
          as="style">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,400;0,600;1,200&display=swap"
          rel="stylesheet">


    @vite('resources/sass/app.scss')
    @livewireStyles

    @if ((request()->getHost() == 'localhost'))
        <link rel="preload" href="{{ asset('assets/css/thin.css') }}" as="style"
              onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preload" href="{{ asset('assets/css/duotone.css') }}" as="style"
              onload="this.onload=null;this.rel='stylesheet'">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#4fc3e0">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#4fc3e0">

    @yield('script_head')
    <link rel="preload" as="script" href="@livewireScriptPath">
</head>

<body class="">

<header class="sticky top-4 flex flex-wrap md:justify-center md:flex-nowrap z-50 w-full -mt-24 w-12/12 lg:w-8/10">
    <nav
        class="absolute left-0 right-0 -ml-0 ml-5 w-12/12 xl:w-10/12 2xl:w-8/12 bg-white border border-gray-100 rounded-[36px] shadow-md mx-5 py-3 px-4 md:flex md:items-center md:justify-between md:py-0 md:px-6 lg:px-8 xl:mx-auto dark:bg-gray-800 dark:border-gray-700"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a href="/">
                <img class="w-48 lg:w-72" width="400" height="61"
                     src="{{ Vite::asset('resources/images/full-logo-noslogan-trimmed.png') }}" alt="logo-top">
            </a>
            <div class="md:hidden">
                <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-full border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-collapse-with-animation"
             class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
            <div class="flex flex-col mt-5 md:flex-row md:items-center md:mt-0">
                <a class="px-2 md:py-6 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary md:ml-auto"
                   href="/">
                    Hem
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary"
                   href="{{ route('services') }}">
                    Tjänster
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary"
                   href="{{ route('prices') }}">
                    Priser
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary"
                   href="{{ route('faq') }}">
                    Vanliga frågor
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary"
                   href="{{ route('miljovanligt') }}">
                    Miljövänligt
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary"
                   href="{{ route('guarantee') }}">
                    Garanti
                </a>
                <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-l md:border-gray-300 md:my-6 md:pl-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500"
                   href="https://karlstad.putsamer.se" target="_blank">
                    <button
                        class="inline-flex items-center justify-center px-4 py-2 font-semibold text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-cyan-500 active:bg-cyan-400 active:text-white focus-visible:outline-black">
                        Boka tid
                    </button>
                </a>
            </div>
        </div>
    </nav>
</header>

<div class="loading-screen">
    <div class="loading">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div class="">
    @yield('body')
</div>

<button x-data="topBtn" @click="scrolltoTop" id="topButton"
        class="fixed z-10 hidden p-3 bg-gray-100 rounded-full shadow-md bottom-3 right-3 md:bottom-10 md:right-10 animate-bounce">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18">
        </path>
    </svg>
</button>

<footer class="bg-gradient-to-b bg-gray-100 border-t border-gray-200">
    <div class="max-w-7xl px-6 py-8 mx-auto">

        <div class="flex flex-col items-center sm:flex-row sm:justify-between">
            <p class="text-gray-800">&copy; Puts i Karlstad - {{ \Carbon\Carbon::now()->format('Y') }}</p>

            <div class="flex mt-3 -mx-2 sm:mt-0">
                <a href="#"
                   class="mx-2 text-gray-800 transition-colors duration-300 hover:text-gray-300 dark:hover:text-gray-300"
                   aria-label="Cookies"> Cookies </a>
            </div>
        </div>
    </div>
</footer>

<div x-data="{ toast: false, message: '{{ session('status') }}' }"
     x-init="() => { if (message) { toast = true; setTimeout(() => { toast = false }, 5000); } }"
     class="fixed top-0 right-0 mt-5 mr-5 z-50">
    <div x-show="toast" x-transition
         class="flex items-center justify-between max-w-xs p-4 bg-white border rounded-md shadow-sm">
        <div class="flex items-center">
            <svg aria-hidden="true" class="w-8 h-8 text-primary dark:text-blue-500" focusable="false"
                 data-prefix="fas"
                 data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                      d="M511.6 36.86l-64 415.1c-1.5 9.734-7.375 18.22-15.97 23.05c-4.844 2.719-10.27 4.097-15.68 4.097c-4.188 0-8.319-.8154-12.29-2.472l-122.6-51.1l-50.86 76.29C226.3 508.5 219.8 512 212.8 512C201.3 512 192 502.7 192 491.2v-96.18c0-7.115 2.372-14.03 6.742-19.64L416 96l-293.7 264.3L19.69 317.5C8.438 312.8 .8125 302.2 .0625 289.1s5.469-23.72 16.06-29.77l448-255.1c10.69-6.109 23.88-5.547 34 1.406S513.5 24.72 511.6 36.86z"></path>
            </svg>
            <div class="ml-3 text-sm font-normal" x-text="message"></div>
        </div>
        <span @click="toast = false;" class="inline-flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </span>
    </div>
</div>

@vite('resources/js/app.js')
<script async src="https://apps.elfsight.com/p/platform.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('script')

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('topBtn', () => ({
            scrolltoTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        }));
    });

    const topBtn = document.getElementById("topButton");
    window.onscroll = () => {
        (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ?
            topBtn.classList.remove("hidden") : topBtn.classList.add("hidden");

    }

    // END OF CAPTCHA
</script>

</body>
</html>
