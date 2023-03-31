@extends('layouts.app')

@section('content')

    <section class="relative h-[10rem]">
        <div class="jarallax relative h-[10rem]" data-jarallax data-video-src="mp4:{{ Vite::asset('resources/images/rain.mp4') }}" style="z-index: 1">
            <div class="absolute bg-gray-900 w-full opacity-60 h-[10rem]" style="z-index: 2;"></div>
        </div>

        <div class="custom-shape-divider-bottom-16802652752 z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="bg-gray-100 relative">
        <div class="items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">

            <div>
                <div class="max-w-2xl">
                    <h1 class="text-4xl text-black">
                        Mina tjänster
                    </h1>
                    <p class="max-w-2xl mt-4 text-lg tracking-tight text-gray-600">
                        Här kan du se olika varianter av fönster som jag putsar
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 lg:grid-cols-4">
                <div class="flex items-end overflow-hidden bg-cover bg-center rounded-lg h-72"
                     style="background-image:url('{{ Vite::asset('resources/images/fonster.jpg') }}')"
                     data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                    <div
                        class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                        <h2 class="text-xl font-semibold text-gray-800 text-center dark:text-white">Vanliga fönster</h2>
                    </div>
                </div>

                <div class="flex items-end overflow-hidden bg-cover bg-center rounded-lg h-72"
                     style="background-image:url('{{ Vite::asset('resources/images/sprojs.jpg') }}')"
                     data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                    <div
                        class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                        <h2 class="text-xl font-semibold text-gray-800 text-center dark:text-white">Spröjsade fönster</h2>
                    </div>
                </div>

                <div class="flex items-end overflow-hidden bg-cover bg-center rounded-lg h-72"
                     style="background-image:url('{{ Vite::asset('resources/images/balkonger.jpg') }}')"
                     data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                    <div
                        class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                        <h2 class="text-xl font-semibold text-gray-800 text-center dark:text-white">Balkongfönster</h2>
                    </div>
                </div>

                <div class="flex items-end overflow-hidden bg-cover bg-center rounded-lg h-72"
                     style="background-image:url('{{ Vite::asset('resources/images/altaner.jpg') }}')"
                     data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                    <div
                        class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                        <h2 class="text-xl font-semibold text-gray-800 text-center dark:text-white">Altanfönster</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1679499722 drop-shadow-2xl">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>


    <section>
        <div class="items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="max-w-xl">
                <div>
                    <h1 class="text-2xl font-medium tracking-tight text-black sm:text-4xl antialiased">
                        Tilläggstjänster
                    </h1>
                    <h2 class="max-w-2xl mt-4 text-lg tracking-tight text-gray-600 antialiased">
                        Ibland kan det vara skönt att få hjälp med lite annat som hör
                        fönstren till när jag är hos dig
                    </h2>
                </div>
            </div>
            <div class="mx-auto mt-12 text-left">
                <div>
                    <div class="grid grid-cols-1 text-sm gap-x-2 gap-y-14 lg:grid-cols-2 lg:gap-20">
                        <article data-aos="fade-right" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Putsning av speglar
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Rena speglar ger också ett starkt helhetsintryck i ditt hem,
                                    så passa på att få dessa skinande också när jag är i farten.
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-up" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Skrapning av fönster
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Färgfläckar och liknande som inte går att putsa bort,
                                    går i många fall att skrapa. Så vill du bli kvitt detta
                                    och få dina fönster ännu glansigare så kan du välja till detta.
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-right" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Rengöring av fönsterkarm
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Snickeriet runt glaset samlar också gärna på sig smuts med tiden,
                                    och särskilt emellan fönstren. Jag har även tillgång till en mini-dammsugare
                                    för att bli kvitt lös smuts som samlar sig där.
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-up" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Rengöring av fönsterbleck
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Fönsterblecket är den metallskena som sitter utanpå de flesta fönster,
                                    och här samlas ofta mycket smuts, och att få rent detta ökar också
                                    helhetsintrycket av hela ditt fönster utifrån.
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-right" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Rengöring av persienner
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Persienner är oftast något man inte tänker på att få rengjort,
                                    men det är också något man inte brukar behöva rengöra så ofta,
                                    så har du inte gjort rent dom på länge, så kanske det är dags nu?
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-up" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Demontering/montering samt rengöring av löstagbara spröjs
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Detta kan kännas lite bökigt att pyssla med själv, så givetvis
                                    så kan jag hjälpa till med detta också när jag är i farten.
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-right" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Undanplock i fönster
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    För att du ska behöva krångla med så lite som möjligt,
                                    så kan du också boka till detta.
                                </p>
                            </div>
                        </article>
                        <article data-aos="fade-up" data-aos-duration="500" data-aos-offset="100" data-aos-delay="200"
                                 data-aos-easing="ease-in-out">
                            <div class="space-y-3">
                                <div class="gap-2 lg:inline-flex lg:items-center">
                                    <p class="mt-2 text-lg font-medium leading-6 text-black">
                                        Smörjning av gångjärn
                                    </p>
                                </div>
                                <p class="mt-2 text-base text-gray-500">
                                    Gångjärn på fönster, dörrar, men även handtag blir utslitna efter
                                    ett tag, och dessa behöver också underhållas. Det märker du
                                    om det är trögt att öppna eller stänga. Därför kan jag erbjuda
                                    att smörja dessa åt dig.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

@endsection
