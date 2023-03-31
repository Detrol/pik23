@extends('layouts.app')

@section('content')

    <section class="relative h-[10rem]">
        <div class="jarallax relative h-[10rem]" data-jarallax data-video-src="mp4:{{ Vite::asset('resources/images/rain.mp4') }}" style="z-index: 1">
            <div class="absolute bg-gray-900 w-full opacity-60 h-[10rem]" style="z-index: 2;"></div>
        </div>

        <div class="custom-shape-divider-bottom-1680265275 z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section>
        <div class="relative w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="w-full mx-auto text-left">
                <div class="relative">
                    <div class="items-center gap-12 text-left lg:gap-24 lg:inline-flex min-h-[45vh]">
                        <div class="flex flex-col md:order-first">
                            <div class="max-w-xl">
                                <div>
                                    <h1 class="text-4xl text-black antialiased">
                                        Miljövänligt
                                    </h1>
                                    <h2 class="max-w-2xl mt-4 text-lg tracking-tight text-gray-600 antialiased">
                                        Jag bryr mig om miljön
                                    </h2>
                                </div>
                            </div>
                            <div class="mt-6">
                                <ul role="list" class="grid grid-cols-1 md:grid-cols-2 gap-4 list-none lg:gap-6">
                                    <li>
                                        <div>
                                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                                Svanenmärkt
                                            </p>
                                        </div>
                                        <div class="mt-2 text-base text-gray-500">
                                            Jag använder mig enbart av svanenmärkta produkter,
                                            då jag bryr mig om miljön, och kommer aldrig att använda
                                            starka kemikalier hos dig.
                                        </div>
                                        <div
                                            class="flex flex-col gap-3 mt-3 lg:flex-row lg:justify-start">
                                            <a href="https://svanen.se" target="_blank"
                                               class="inline-flex text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600 antialiased">
                                                Besök Svanen
                                                <span aria-hidden="true"> → </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                                Tradehouse
                                            </p>
                                        </div>
                                        <div class="mt-2 text-base text-gray-500">
                                            Fönsterputsmedlet jag nyttjar är tillverkat av en svensk leverantör
                                            som också bryr sig om miljön och producerar endast miljövänliga medel.
                                        </div>
                                        <div
                                            class="flex flex-col gap-3 mt-3 lg:flex-row lg:justify-start">
                                            <a href="https://tradehouse.se" target="_blank"
                                               class="inline-flex text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600 antialiased">
                                                Besök Tradehouse
                                                <span aria-hidden="true"> → </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="order-first block w-full mt-12 lg:mt-0 lg:pt-[5rem]">
                            <img class="object-cover object-center w-full mx-auto lg:ml-auto "
                                 alt="hero" src="{{ Vite::asset('resources/images/svana.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
