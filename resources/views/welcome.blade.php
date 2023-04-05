@extends('layouts.app')

@section('content')

    <section class="relative h-screen overflow-hidden">
        <div class="relative h-screen">
            <video autoplay loop muted class="absolute w-auto min-w-full min-h-full max-w-none ukiyo"
                   style="z-index: 0">
                <source src="{{ Vite::asset('resources/images/rain.mp4') }}" type="video/mp4"/>
                Your browser does not support the video tag.
            </video>

            <div class="absolute bg-gray-900 w-full h-screen opacity-60" style="z-index: 2;"></div>
            <div
                class="absolute left-0 right-0 px-3 items-center justify-center text-center py-52 mt-10 md:mt-40 lg:mt-20"
                style="z-index: 3">

                <h1 class="text-4xl md:text-6xl lg:text-6xl font-medium text-white">
                    Välkommen till <span class="hidden">Puts i Karlstad!</span>
                </h1>

                <img class="w-12/12 md:w-10/12 lg:w-6/12 mx-auto py-8 md:py-16 " width="800" height="112"
                     src="{{ Vite::asset('resources/images/text-nologo-trimmed.png') }}" alt="logo">

                <div class="flex flex-col items-center justify-center gap-3 md:flex-row pb-24 md:pb-64 xl:pb-36">
                    <a href="https://karlstad.putsamer.se" target="_blank"
                       class="items-center justify-center w-full px-6 py-2.5 text-xl text-white text-center rounded-full inline-flex md:w-auto bg-gradient-to-r from-cyan-400 to-cyan-600 hover:from-cyan-600 hover:to-cyan-700">
                        Boka tid
                    </a>
                    <a href="{{ route('prices') }}"
                       class="inline-flex items-center justify-center text-xl text-white duration-200 hover:text-gray-300 focus:outline-none focus-visible:outline-gray-600">
                        Se priser
                        <span aria-hidden="true"> → </span>
                    </a>
                </div>

                <a href="#about">
                    <i class="fa-thin fa-arrow-circle-down text-white text-4xl animate-bounce"></i>
                </a>
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1679525888 z-10 -mb-1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="bg-gray-100 relative" id="about">
        <div class="container pb-32 pt-20 md:pb-48 md:pt-28 max-w-3xl lg:max-w-7xl">
            <div class="flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-10 lg:gap-24">
                    <div class="relative items-center md:inline-flex md:order-first">
                        <div class="max-w-xl min-w-full">
                            <div class="textbox w-full text-left justify-start items-start min-h-[270px]">
                                <p class="block font-sans text-3xl font-semibold leading-relaxed antialiased hej">&nbsp;</p>
                                <p class="mt-4 block font-sans text-lg font-normal leading-relaxed antialiased text-gray-600 jag">&nbsp;</p>
                                <p class="mt-4 block font-sans text-lg font-normal leading-relaxed antialiased text-gray-600 erfarenhet">&nbsp;</p>
                                <p class="mt-4 block font-sans text-lg font-semibold leading-relaxed antialiased text-gray-600 customers">&nbsp;</p>
                                <h2 class="hej-decoy hidden">
                                    Hej!
                                </h2>
                                <p class="jag-decoy hidden">
                                    Andreas heter jag, och jag erbjuder prisvärd fönsterputs
                                    i Karlstad, Hammarö, Vålberg, Grums, Molkom, Kil & Väse med mera.
                                </p>
                                <p class="erfarenhet-decoy hidden">
                                    Med över 10 års erfarenhet av fönsterputs så kan jag erbjuda dig
                                    professionell
                                    hjälp med kunskap, teknik, och rätt utrustning.
                                </p>
                                <p class="customers-decoy hidden">
                                    För både privatpersoner och företag.
                                </p>
                            </div>
                            <!--<div
                                class="flex flex-col items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                                <a href="#"
                                   class="inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600 antialiased">
                                    Mer om mig
                                    <span aria-hidden="true"> → </span>
                                </a>
                            </div>-->
                            <div class="pt-12 mx-auto lg:max-w-7xl md:hidden lg:block numberbox">
                                <div class="bg-white rounded-[24px] px-4 lg:py-4 shadow-md">
                                    <dl class="grid grid-cols-1 space-y-0 text-center lg:grid-cols-3 lg:text-left divide-y sm:divide-y-0 sm:divide-x">
                                        <div class="text-center py-6 lg:py-4 antialiased">
                                            <div>
                                                <p class="text-3xl font-medium leading-6 text-gray-700">
                                                    <span class="animCounter">60000</span>+
                                                </p>
                                            </div>
                                            <div class="mt-3 text-base text-gray-500">
                                                putsade fönster
                                            </div>
                                        </div>
                                        <div class="text-center py-6 lg:py-4 antialiased">
                                            <div>
                                                <p class="text-3xl font-medium leading-6 text-gray-700">
                                                    <span class="animCounter">4000</span>+
                                                </p>
                                            </div>
                                            <div class="mt-3 text-base text-gray-500">
                                                nöjda kunder
                                            </div>
                                        </div>
                                        <div class="text-center py-6 lg:py-4 antialiased">
                                            <div>
                                                <p class="text-3xl font-medium leading-6 text-gray-700">
                                                    <span class="animCounter">10</span> år+
                                                </p>
                                            </div>
                                            <div class="mt-3 text-base text-gray-500">
                                                i branschen
                                            </div>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-first block w-full mt-12 aspect-square lg:mt-0">
                        <div class='revealRight'>
                            <img
                                class="object-cover object-center w-full mx-auto lg:ml-auto rounded-lg shadow-md"
                                alt="jag" loading="lazy" width="600" height="600"
                                src="{{ Vite::asset('resources/images/jag1.jpg') }}">
                        </div>

                    </div>
                </div>
                <div class="pt-12 mx-auto md:max-w-7xl w-12/12 hidden md:block lg:hidden numberbox">
                    <div class="bg-white rounded-[24px] px-4 py-4 shadow-md">
                        <dl class="grid grid-cols-1 space-y-0 text-center grid-cols-3 divide-y">
                            <div class="text-center py-6 lg:py-4 antialiased">
                                <div>
                                    <p class="text-3xl font-medium leading-6 text-gray-700">
                                        <span class="animCounter">60000</span>+
                                    </p>
                                </div>
                                <div class="mt-3 text-base text-gray-500">
                                    putsade fönster
                                </div>
                            </div>
                            <div class="text-center py-6 lg:py-4 antialiased">
                                <div>
                                    <p class="text-3xl font-medium leading-6 text-gray-700">
                                        <span class="animCounter">4000</span>+
                                    </p>
                                </div>
                                <div class="mt-3 text-base text-gray-500">
                                    nöjda kunder
                                </div>
                            </div>
                            <div class="text-center py-6 lg:py-4 antialiased">
                                <div>
                                    <p class="text-3xl font-medium leading-6 text-gray-700">
                                        <span class="animCounter">10</span> år+
                                    </p>
                                </div>
                                <div class="mt-3 text-base text-gray-500">
                                    i branschen
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-cyan-700 relative overflow-hidden">

        <div class="custom-shape-divider-top-1680709279">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <div
            class="w-full h-full px-5 py-24 mx-auto items-center justify-center md:px-0 md:px-16 md:py-24"
            style="z-index: 3;">
            <div class="max-w-7xl mx-auto pb-4">
                <h2 class="text-3xl font-semibold tracking-wide text-white dark:text-white lg:text-4xl">Varför välja Puts i Karlstad?</h2>
            </div>
            <div class="relative items-center justify-center w-full h-full max-w-7xl mx-auto">
                <div class="py-4 mx-auto">
                    <div>
                        <div
                            class="grid grid-cols-1 gap-y-12 gap-x-6 md:gap-x-16 md:gap-y-10 md:grid-cols-2 md:space-y-0 text-center text-white antialiased">
                            <div class="flex flex-col col-span-1" data-aos="zoom-in" data-aos-duration="1000"
                                 data-aos-offset="100" data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div
                                    class="grid grid-cols-1 lg:flex w-full h-full p-6 text-black bg-gradient-to-b from-white to-gray-100 rounded-xl mx-auto lg:divide-x gap-y-2 gap-x-6 items-center">
                                    <div class="w-12/12 lg:w-4/12 items-center justify-center text-center">
                                        <i class="fa-duotone fa-seedling text-4xl lg:text-4xl text-secondary"></i>
                                        <h3 class="mt-4 text-lg lg:text-lg font-medium leading-6 uppercase">
                                            Grönare
                                        </h3>
                                    </div>

                                    <div
                                        class="flex flex-col items-start text-left text-gray-900 pl-4 pt-2 dark:text-gray-200 text-base lg:text-base">
                                        <div>
                                            <i class="fa fa-check text-green-500"></i>
                                            <span class="ml-3">Miljövänliga medel</span>
                                        </div>

                                        <div>
                                            <div class="items-start justify-start">
                                                <i class="fa fa-check text-green-500"></i>
                                                <span class="ml-3">Ingen pappersfakturering</span>
                                            </div>
                                        </div>

                                        <div class="text-left mt-2 text-gray-600 text-sm">
                                            <p>Jag erbjuder ett helt
                                               miljövänligt alternativ, till skillnad från många konkurrenter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col col-span-1" data-aos="zoom-in" data-aos-duration="1000"
                                 data-aos-offset="100" data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div
                                    class="grid grid-cols-1 lg:flex w-full h-full p-6 text-black bg-gradient-to-b from-white to-gray-100 rounded-xl mx-auto lg:divide-x gap-y-2 gap-x-6 items-center">
                                    <div class="w-12/12 lg:w-4/12 items-center justify-center text-center">
                                        <i class="fa-duotone fa-lightbulb-on text-4xl lg:text-4xl text-secondary"></i>
                                        <h3 class="mt-4 text-lg lg:text-lg font-medium leading-6 uppercase">
                                            Modernare
                                        </h3>
                                    </div>

                                    <div
                                        class="flex flex-col items-start text-left text-gray-900 pl-4 pt-2 dark:text-gray-200 text-base lg:text-base">
                                        <div>
                                            <i class="fa fa-check text-green-500"></i>
                                            <span class="ml-3">Onlinebokning</span>
                                        </div>

                                        <div>
                                            <div class="items-start justify-start">
                                                <i class="fa fa-check text-green-500"></i>
                                                <span class="ml-3">Automatiserade händelsenotiser</span>
                                            </div>
                                        </div>

                                        <div class="text-left mt-2 text-gray-600 text-sm">
                                            <p>Hos mig hittar du ett unikt och modernt bokningssystem som
                                               ingen annan på marknaden erbjuder.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col col-span-1" data-aos="zoom-in" data-aos-duration="1000"
                                 data-aos-offset="100"
                                 data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div
                                    class="grid grid-cols-1 lg:flex w-full h-full p-6 text-black bg-gradient-to-b from-white to-gray-100 rounded-xl mx-auto lg:divide-x gap-y-2 gap-x-6 items-center">
                                    <div class="w-12/12 lg:w-4/12 items-center justify-center text-center">
                                        <i class="fa-duotone fa-gauge-max text-4xl lg:text-4xl text-secondary"></i>
                                        <h3 class="mt-4 text-lg lg:text-lg font-medium leading-6 uppercase">
                                            Effektivare
                                        </h3>
                                    </div>

                                    <div
                                        class="flex flex-col items-start text-left text-gray-900 pl-4 pt-2 dark:text-gray-200 text-base lg:text-base">
                                        <div>
                                            <i class="fa fa-check text-green-500"></i>
                                            <span class="ml-3">Proffsutrustning</span>
                                        </div>

                                        <div>
                                            <div class="items-start justify-start">
                                                <i class="fa fa-check text-green-500"></i>
                                                <span class="ml-3">Snabb och effektiv putsning</span>
                                            </div>
                                        </div>

                                        <div class="text-left mt-2 text-gray-600 text-sm">
                                            <p>Med över 10 år i branschen så jobbar jag väldigt snabbt och effektivt,
                                               utan att slarva med resultatet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col col-span-1" data-aos="zoom-in" data-aos-duration="1000"
                                 data-aos-offset="100"
                                 data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div
                                    class="grid grid-cols-1 lg:flex w-full h-full p-6 text-black bg-gradient-to-b from-white to-gray-100 rounded-xl mx-auto lg:divide-x gap-y-2 gap-x-6 items-center">
                                    <div class="w-12/12 lg:w-4/12 items-center justify-center text-center">
                                        <i class="fa-duotone fa-tags text-4xl lg:text-4xl text-secondary"></i>
                                        <h3 class="mt-4 text-lg lg:text-lg font-medium leading-6 uppercase">
                                            Prisvärdare
                                        </h3>
                                    </div>

                                    <div
                                        class="flex flex-col items-start text-left text-gray-900 pl-4 pt-2 dark:text-gray-200 text-base lg:text-base">
                                        <div>
                                            <i class="fa fa-check text-green-500"></i>
                                            <span class="ml-3">Schyssta priser</span>
                                        </div>

                                        <div>
                                            <div class="items-start justify-start">
                                                <i class="fa fa-check text-green-500"></i>
                                                <span class="ml-3">Rabatter för återkommande kunder</span>
                                            </div>
                                        </div>

                                        <div class="text-left mt-2 text-gray-600 text-sm">
                                            <p>Jag erbjuder schyssta priser,
                                               och personliga rabatter för mina återkommande kunder.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1679499722 -mb-[1px] z-10">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="container items-center py-24 max-w-3xl lg:max-w-7xl lg:py-16">
            <div class="justify-center w-full text-center lg:p-10 max-auto min-h-[500px]">
                <div class="justify-center w-full mx-auto revealRight">
                    <div class="elfsight-app-f3b9f6e1-f786-4b53-9df8-f861679578f1" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1679499722">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="relative overflow-hidden">
        <!--<div class="absolute w-auto min-w-full min-h-full max-w-none bg-cover ukiyo"
             style="background-image: url('{{ Vite::asset('resources/images/house.jpg') }}'); z-index: 0;"></div>-->

        <div class="motiv motiv01 w-auto min-w-full min-h-full max-w-none bg-cover bg-center"
             style="background-image: url('{{ Vite::asset('resources/images/house.jpg') }}');"></div>

        <div class="motiv motiv01 w-auto min-w-full min-h-full max-w-none bg-cover bg-center"
             style="background-image: url('{{ Vite::asset('resources/images/lagenheter.jpg') }}');"></div>

        <div class="motiv motiv01 w-auto min-w-full min-h-full max-w-none bg-cover bg-center"
             style="background-image: url('{{ Vite::asset('resources/images/kontor.jpg') }}');"></div>

        <div class="motiv motiv01 w-auto min-w-full min-h-full max-w-none bg-cover bg-center"
             style="background-image: url('{{ Vite::asset('resources/images/trapphus.jpg') }}');"></div>

        <div class="motiv motiv01 w-auto min-w-full min-h-full max-w-none bg-cover bg-center"
             style="background-image: url('{{ Vite::asset('resources/images/skyltfonster.jpg') }}');"></div>

        <div class="custom-shape-divider-top-1679499812 z-20 -mt-1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="w-full h-full flex justify-center items-center backdrop-opacity-50 bg-black/60" style="z-index: 3;">
            <div class="relative items-center w-full px-5 py-20 mx-auto md:px-12 lg:px-20 max-w-7xl">
                <div class="max-w-7xl mx-auto pb-4">
                    <h2 class="text-3xl font-semibold tracking-wide text-white dark:text-white lg:text-4xl text-center">Vad önskar du få putsat?</h2>
                </div>
                <div class="grid w-full grid-cols-2 mx-auto lg:grid-cols-3 flex">
                    <div class="p-6 w-full items-center justify-center text-center"
                         data-aos="zoom-out" data-aos-duration="1000"
                         data-aos-offset="100" data-aos-delay="100"
                         data-aos-easing="ease-in-out">
                        <div
                            class="flex mx-auto items-center justify-center text-center w-14 h-14 text-gray-500 bg-gray-50 rounded-xl">
                            <i class="fa fa-house text-2xl"></i>
                        </div>
                        <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
                            Hus
                        </p>
                    </div>
                    <div class="p-6 w-full items-center justify-center text-center"
                         data-aos="zoom-out" data-aos-duration="1000"
                         data-aos-offset="100" data-aos-delay="100"
                         data-aos-easing="ease-in-out">
                        <div
                            class="flex mx-auto items-center justify-center text-center w-14 h-14 text-gray-500 bg-gray-50 rounded-xl">
                            <i class="fa fa-building-user text-2xl"></i>
                        </div>
                        <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
                            Lägenhet
                        </p>
                    </div>
                    <div class="p-6 w-full items-center justify-center text-center"
                         data-aos="zoom-out" data-aos-duration="1000"
                         data-aos-offset="100" data-aos-delay="100"
                         data-aos-easing="ease-in-out">
                        <div
                            class="flex mx-auto items-center justify-center text-center w-14 h-14 text-gray-500 bg-gray-50 rounded-xl">
                            <i class="fa fa-chair-office text-2xl"></i>
                        </div>
                        <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
                            Kontor
                        </p>
                    </div>
                    <div class="p-6 w-full items-center justify-center text-center"
                         data-aos="zoom-out" data-aos-duration="1000"
                         data-aos-offset="100" data-aos-delay="100"
                         data-aos-easing="ease-in-out">
                        <div
                            class="flex mx-auto items-center justify-center text-center w-14 h-14 text-gray-500 bg-gray-50 rounded-xl">
                            <i class="fa fa-buildings text-2xl"></i>
                        </div>
                        <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
                            Trapphus
                        </p>
                    </div>
                    <div class="p-6 w-full items-center justify-center text-center"
                         data-aos="zoom-out" data-aos-duration="1000"
                         data-aos-offset="100" data-aos-delay="100"
                         data-aos-easing="ease-in-out">
                        <div
                            class="flex mx-auto items-center justify-center text-center w-14 h-14 text-gray-500 bg-gray-50 rounded-xl">
                            <i class="fa fa-square text-2xl"></i>
                        </div>
                        <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
                            Skyltfönster
                        </p>
                    </div>
                    <div class="p-6 w-full items-center justify-center text-center"
                         data-aos="zoom-out" data-aos-duration="1000"
                         data-aos-offset="100" data-aos-delay="100"
                         data-aos-easing="ease-in-out">
                        <div
                            class="flex mx-auto items-center justify-center text-center w-14 h-14 text-gray-500 bg-gray-50 rounded-xl">
                            <i class="fa fa-question-circle text-2xl"></i>
                        </div>
                        <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
                            Hör av dig om annat
                        </p>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto pt-6">
                    <h2 class="text-lg font-normal tracking-wide text-gray-100 dark:text-white lg:text-xl text-center revealUp">
                        Du kan enkelt boka allt detta, och mycket mer direkt via bokningssidan
                    </h2>
                </div>
            </div>


            <div class="custom-shape-divider-bottom-1679499722 -mb-[1px] z-10">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="container relative overflow-hidden">
        <div class="container items-center py-24 max-w-3xl lg:max-w-7xl lg:py-16">
            <div class="justify-center w-full text-center lg:p-10 max-auto">
                <div class="justify-center w-full mx-auto revealLeft min-h-[400px]">
                    <div class="elfsight-app-764c0ace-e1e3-42c8-9caf-4a0012cfb2db" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="absolute w-auto min-w-full min-h-full max-w-none bg-cover ukiyo"
             style="background-image: url('{{ Vite::asset('resources/images/email.jpg') }}'); z-index: 0;"></div>

        <div class="custom-shape-divider-top-1680553802 z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="md:flex flex-col min-h-screen bg-black/60 backdrop-brightness-75">
            <div class="max-w-7xl flex flex-col flex-1 px-3 py-28 mx-auto">
                <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
                    <div class="text-white lg:w-1/2 lg:mx-6 text-center md:text-start">

                        <div>
                            <h2 class="text-2xl font-semibold lg:text-3xl mb-2">Chatta med mig</h2>
                            <p class="mb-4">Klicka på knappen för att skicka mig ett direktmeddelande.</p>
                        </div>

                        <div class="mb-10 mt-2">
                            <div class="elfsight-app-49c08c19-0997-4735-bdeb-c3b38a442f25"
                                 data-elfsight-app-lazy></div>
                        </div>

                        <div class="md:flex -mx-2 mb-4 revealUp">
                            <i class="fa fa-clock text-xl mr-3 hidden md:block"></i>

                            <div>
                                <h3 class="text-2xl font-semibold">Öppettider</h3>
                                <p class="text-xl">Måndag - Fredag: 9 - 17</p>
                            </div>
                        </div>

                        <div class="md:grid gap-y-8 gap-x-8 grid-cols-1 md:grid-cols-2">
                            <div class="md:flex -mx-2 mb-4 md:mb-0 revealUp">
                                <i class="fa fa-envelope text-xl mr-3 hidden md:block"></i>

                                <div>
                                    <h3 class="text-2xl font-semibold">E-Post</h3>
                                    <a class="text-xl mb-4 duration-200 hover:text-primary focus:outline-none focus-visible:outline-gray-600"
                                       href="mailto:info@putsikarlstad.se">info@putsikarlstad.se</a>
                                </div>
                            </div>

                            <div class="md:flex -mx-2 pb-8 md:mb-0 revealUp">
                                <i class="fa fa-phone text-xl mr-3 hidden md:block"></i>

                                <div>
                                    <h3 class="text-2xl font-semibold">Telefon</h3>
                                    <p class="text-xl">Ej tillgängligt</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 lg:w-1/2 lg:mx-6"
                         data-aos="fade-in" data-aos-duration="500" data-aos-delay="100" data-aos-offset="100">
                        <div
                            class="w-full px-8 py-10 mx-auto overflow-hidden bg-white shadow-2xl rounded-xl dark:bg-gray-900 lg:max-w-xl">
                            <div class="revealUp">
                                <h2 class="text-xl font-medium text-gray-700 dark:text-gray-200">Kontaktformulär</h2>

                                <p class="mt-2 text-gray-500 dark:text-gray-400">
                                    Ställ mig gärna frågor, men kom ihåg att bokningar sker via bokningsformuläret.
                                </p>
                            </div>

                            <form class="mt-6" method="post" action="{{ route('form_mail') }}">
                                @csrf
                                <input type="hidden" name="action" value="contact_form_submit" tabindex="-1">
                                <input type="text" name="norobot" value="" class="hidden" tabindex="-1">

                                <div class="flex-1 revealUp">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Namn</label>
                                    <input type="text" placeholder="Svea Svensson" name="name" required
                                           class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"/>
                                </div>

                                <div class="flex-1 mt-6 revealUp">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">E-Post</label>
                                    <input type="email" placeholder="svensson@exempel.se" name="email" required
                                           class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"/>
                                </div>

                                <div class="w-full mt-6 revealUp">
                                    <label
                                        class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Meddelande</label>
                                    <textarea name="message" required
                                              class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-32 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                              placeholder="Meddelande"></textarea>
                                </div>

                                <div class="flex-1 mt-6 revealUp">
                                    <div class="h-captcha" data-sitekey="6fa67746-f883-4721-9f61-c8672088dfff"></div>
                                    <script src="https://js.hcaptcha.com/1/api.js?hl=sv" async defer></script>
                                </div>

                                <button
                                    class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white transition-colors duration-300 transform bg-primary rounded-md hover:bg-cyan-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50 revealUp">
                                    Skicka meddelande
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade hidden" id="anlita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLg"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLg">Varför anlita mig?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p>När du anlitar mig så anlitar du någon som har ett unikt engagemang.</p>

                    <p class="font-weight-medium m-0">Men varför skulle mitt engagemang vara mer unikt?</p>
                    <p>När jag var runt 13 år så fick jag en diagnos inom det autistiska spektrat, och något som är
                       vanligt
                       hos
                       folk inom det är att de har väldigt få, men starka intressen. Något som kan
                       yttra sig i form av en naturbegåvning.</p>

                    <p class="font-weight-medium m-0">Detta är väldigt sant när det gäller mig.</p>
                    <p>Fönsterputs är inget jobb eller arbete för mig. Det är en konst, en passion och terapi. Något som
                       gör mig jordad och får mig att må bra, och leder mig in i ett meditativt tillstånd.</p>

                    <p>Därför kan du räkna med att jag lägger ner hela mitt hjärta när jag utför fönsterputs hos dig,
                       och
                       jag blir inte nöjd innan det är perfekt. Nästan perfekt.</p>

                    <p>Inga fönster går att få perfekta, något som jag behövt lära mig och acceptera med tid. Även om
                       det
                       är svårt än idag, efter många år av fönsterputsande.<br/>
                       Det finns alltid små fläckar, repor och annat som sitter gjutet i glaset som inte går att göra
                       något
                       åt om man inte har starka kemikalier som är skadligt för naturen, något som jag vägrar att
                       nyttja.</p>

                    <p>Men det är oftast saker bara jag ser, som mina kunder aldrig ens kommer lägga märke till.</p>

                    <p>Sedan så kommer ni kanske få ta del av den sociala skyggheten jag bär på vissa dagar,
                       men detta bjuder jag på &#128522;. Detta är också varför ni ej ser ett telefonnummer på
                       hemsidan.</p>

                    Mvh Andreas
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fi fi-close"></i>
                        Stäng
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade hidden" id="exampleModalMd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelMd"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelMd">Information till dig som tidigare kund</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Hej och välkommen tillbaka!</h6>

                    <p>Som du ser så är det ständig förnyelse här, då verksamheten
                       växer så det knakar, och jag är väldigt engagerad i att göra det så smidigt
                       som möjligt för alla mina kunder att kunna boka, och återkomma.</p>

                    <p>Från och med i år så går det inte längre att boka direkt via Puts i Karlstad,
                       utan jag har flyttat bokningssystemet till en ny tjänst jag driver, som heter Putsa Mer.
                       Där jag kommer hyra ut mitt bokningssystem till andra egenanställda fönsterputsare runtom i
                       Sverige.</p>

                    <p>Bokningssystemet för dig som kund, är exakt detsamma(förutom en del förbättringar), som det du
                       använde om du bokade i höstas.</p>

                    <p>Var det däremot längre sedan ändå sedan du bokade, ja då har du en helt del nytt att se.
                       Då bokningssystemet fick sig ett ordentligt lyft under hösten 2022.</p>

                    <p>Bokade du innan det nya systemet lanserades i höstas så behöver du tyvärr också
                       skaffa dig ett nytt kundkonto. Men tro mig, det kommer vara värt det!</p>

                    <p>Som en bonus för dig som återkommande kund från det gammla systemet, så kan du under
                       medlemssidan importera dina gamla bokningar, som du sedan kan konvertera till en rabattkod
                       där du får avdrag på <strong>5% per bokning</strong> som du tidigare gjort.</p>

                    <h6>Hoppas vi ses igen!</h6>
                    Med vänlig hälsning<br/>
                    Andreas
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fi fi-close"></i>
                        Stäng
                    </button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
