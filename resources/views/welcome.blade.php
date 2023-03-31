@extends('layouts.app')

@section('title', 'Professionell & Prisvärd fönsterputs i och runt Karlstad')

@section('content')
    <section class="relative h-screen" x-data x-init="$scrollTo({ targetId: 'about' })">
        <div class="jarallax relative h-screen" data-jarallax
             data-video-src="mp4:{{ Vite::asset('resources/images/rain.mp4') }}" style="z-index: 1">
            <div class="absolute bg-gray-900 w-full h-screen opacity-60" style="z-index: 2;"></div>
            <div class="absolute left-0 right-0 px-3 items-center justify-center text-center py-52" style="z-index: 3">
                <p class="text-4xl lg:text-6xl font-medium text-white">
                    Välkommen till
                </p>
                <img class="w-12/12 lg:w-6/12 mx-auto py-8 md:py-16" width="800" height="112"
                     src="{{ Vite::asset('resources/images/text-nologo-trimmed.png') }}" alt="">
                <div class="flex flex-col items-center justify-center gap-3 lg:flex-row pb-32 md:pb-48">
                    <a href="https://karlstad.putsamer.se" target="_blank"
                       class="items-center justify-center w-full px-6 py-2.5 text-xl text-white text-center rounded-full inline-flex lg:w-auto bg-gradient-to-r from-cyan-400 to-cyan-600 hover:from-cyan-600 hover:to-cyan-700">
                        Boka tid
                    </a>
                    <a href="{{ route('prices') }}"
                       class="inline-flex items-center justify-center text-xl text-white duration-200 hover:text-gray-300 focus:outline-none focus-visible:outline-gray-600">
                        Se priser
                        <span aria-hidden="true"> → </span>
                    </a>
                </div>
                <a href="#about" x-on:click.prevent="$scrollTo">
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
        <div class="container pb-32 pt-20 md:pb-48 md:pt-28 max-w-7xl">
            <div class="flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                        <div class="max-w-xl">
                            <div>
                                <p class="block font-sans text-3xl font-semibold leading-relaxed text-inherit antialiased lg:text-left"
                                   data-aos="fade-right" data-aos-duration="500" data-aos-offset="100"
                                   data-aos-easing="ease-in-out">
                                    Hej!
                                </p>
                                <h1 class="mt-4 block font-sans text-lg font-normal leading-relaxed text-inherit antialiased text-gray-600"
                                    data-aos="fade-right" data-aos-duration="500" data-aos-offset="100"
                                    data-aos-delay="200"
                                    data-aos-easing="ease-in-out">
                                    Andreas heter jag, och jag erbjuder prisvärt fönsterputs
                                    i Karlstad, Hammarö, Vålberg, Grums, Molkom, Kil & Väse med mera.
                                </h1>
                                <h2 class="mt-4 block font-sans text-lg font-normal leading-relaxed text-inherit antialiased text-gray-600"
                                    data-aos="fade-up" data-aos-duration="500" data-aos-offset="100"
                                    data-aos-delay="200"
                                    data-aos-easing="ease-in-out">
                                    Med över 10 års erfarenhet av fönsterputs så kan jag erbjuda dig
                                    professionell
                                    hjälp med kunskap, teknik, och rätt utrustning.
                                </h2>
                            </div>
                            <!--<div
                                class="flex flex-col items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                                <a href="#"
                                   class="inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600 antialiased">
                                    Mer om mig
                                    <span aria-hidden="true"> → </span>
                                </a>
                            </div>-->
                            <div class="pt-12 mx-auto lg:max-w-7xl">
                                <div class="bg-white rounded-[24px] px-4 lg:py-4 shadow-sm">
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
                        <img
                            class="object-cover object-center w-full mx-auto bg-black lg:ml-auto rounded-[10px] drop-shadow-xl"
                            alt="hero" loading="lazy" width="600" height="600"
                            src="{{ Vite::asset('resources/images/jag1.jpg') }}">
                    </div>
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

    <section class="relative">
        <div class="container items-center py-12 max-w-7xl lg:py-16">
            <div class="justify-center w-full text-center lg:p-10 max-auto">
                <div class="justify-center w-full mx-auto">
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


    <section class="bg-cover bg-repeat bg-center relative jarallax"
             style="background-image: url('{{ Vite::asset('resources/images/house.jpg') }}')" loading="lazy">

        <div class="custom-shape-divider-top-1679499812 z-20 -mt-1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="w-full h-full flex justify-center items-center backdrop-brightness-50">
            <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="max-w-xl py-4 mx-auto lg:max-w-7xl">
                    <div>
                        <div
                            class="grid grid-cols-2 gap-y-12 gap-x-6 lg:gap-x-12 md:grid-cols-4 lg:space-y-0 text-center text-white antialiased">
                            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-24 h-24 text-black bg-gray-100 rounded-full mx-auto">
                                        <i class="fa-duotone fa-seedling text-4xl text-lime-500"></i>
                                    </div>
                                    <p class="mt-4 text-xl font-medium leading-6 uppercase">
                                        Grönare
                                    </p>
                                </div>
                                <div
                                    class="mt-4 block font-sans font-normal leading-relaxed text-inherit antialiased text-gray-600">
                                    Jag erbjuder ett fullständigt
                                    miljövänligt alternativ, till skillnad från många konkurrenter
                                </div>
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-24 h-24 text-black bg-gray-100 rounded-full mx-auto">
                                        <i class="fa-duotone fa-code text-4xl text-lime-500"></i>
                                    </div>
                                    <p class="mt-4 text-xl font-medium leading-6 uppercase">
                                        Modernare
                                    </p>
                                </div>
                                <div
                                    class="mt-4 block font-sans font-normal leading-relaxed text-inherit antialiased text-gray-600">
                                    Hos mig hittar du ett unikt och modernt bokningssystem som
                                    ingen annan på marknaden erbjuder
                                </div>
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-24 h-24 text-black bg-gray-100 rounded-full mx-auto">
                                        <i class="fa-duotone fa-gauge-max text-4xl text-lime-500"></i>
                                    </div>
                                    <p class="mt-4 text-xl font-medium leading-6 uppercase">
                                        Effektivare
                                    </p>
                                </div>
                                <div
                                    class="mt-4 block font-sans font-normal leading-relaxed text-inherit antialiased text-gray-600">
                                    Med över 10 år i branschen så jobbar jag väldigt snabbt och effektivt,
                                    utan att slarva med resultatet
                                </div>
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="100"
                                 data-aos-easing="ease-in-out">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-24 h-24 text-black bg-gray-100 rounded-full mx-auto">
                                        <i class="fa-duotone fa-tags text-4xl text-lime-500"></i>
                                    </div>
                                    <p class="mt-4 text-xl font-medium leading-6 uppercase">
                                        Prisvärdare
                                    </p>
                                </div>
                                <div
                                    class="mt-4 block font-sans font-normal leading-relaxed text-inherit antialiased text-gray-600">
                                    Jag erbjuder schyssta priser,
                                    och personliga rabatter för mina återkommande kunder
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1679499722 -mb-1">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="container items-center py-12 max-w-7xl lg:py-16">
            <div class="justify-center w-full text-center lg:p-10 max-auto">
                <div class="justify-center w-full mx-auto">
                    <div class="elfsight-app-764c0ace-e1e3-42c8-9caf-4a0012cfb2db" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
