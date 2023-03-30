<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles

    @if ((request()->getHost() == 'localhost'))
        <link rel="preload" href="{{ asset('assets/css/thin.css') }}" as="style"
              onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preload" href="{{ asset('assets/css/duotone.css') }}" as="style"
              onload="this.onload=null;this.rel='stylesheet'">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="dark:bg-slate-900 min-h-[75rem]">

<header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav
        class="relative max-w-[85rem] w-full bg-white border border-gray-100 rounded-[36px] drop-shadow mx-2 py-3 px-4 md:flex md:items-center md:justify-between md:py-0 md:px-6 lg:px-8 xl:mx-auto dark:bg-gray-800 dark:border-gray-700"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a href="/">
                <img class="w-48 lg:w-72"
                     src="{{ Vite::asset('resources/images/full-logo-noslogan-trimmed.png') }}" alt="">
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
                <a class="px-2 md:py-6 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary lg:ml-auto"
                   href="#">
                    Hem
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary" href="#">
                    Vanliga frågor
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary" href="#">
                    Miljövänligt
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary" href="#">
                    Garanti
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary" href="#">
                    Om mig
                </a>
                <a class="px-2 py-2 text-gray-800 dark:text-gray-100 lg:px-6 md:px-3 hover:text-primary" href="#">
                    Kontakta mig
                </a>

                <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-l md:border-gray-300 md:my-6 md:pl-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500"
                   href="#">
                    <button
                        class="block px-4 py-2 mt-2 text-gray-500 md:mt-0 hover:text-primary focus:outline-none focus:shadow-outline">
                        Priser
                    </button>
                    <button
                        class="inline-flex items-center justify-center px-4 py-2 font-semibold text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-cyan-500 active:bg-cyan-400 active:text-white focus-visible:outline-black">
                        Boka tid
                    </button>
                </a>
            </div>
        </div>
    </nav>
</header>

@yield('body')

@livewireScripts

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"
        integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"
        integrity="sha512-AMl4wfwAmDM1lsQvVBBRHYENn1FR8cfOTpt8QVbb/P55mYOdahHD4LmHM1W55pNe3j/3od8ELzPf/8eNkkjISQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/scrollxp/dist/scrollxp.min.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('script')

</body>
</html>
