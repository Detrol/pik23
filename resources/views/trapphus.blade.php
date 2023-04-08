@extends('layouts.app')

@section('content')

    <section class="relative h-[13rem] md:h-[15rem]">
        <div class="jarallax relative h-[13rem] md:h-[15rem]" data-jarallax
             data-video-src="mp4:{{ Vite::asset('resources/images/rain.mp4') }}" style="z-index: 1">
            <div class="absolute bg-gray-900 w-full opacity-60 h-[13rem] md:h-[15rem]" style="z-index: 2;"></div>
        </div>

        <div class="custom-shape-divider-bottom-1680265275 z-10 -mb-1">
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


    <section>
        <div class="items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="text-left">
                <div class="items-center mx-auto lg:inline-flex">
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                        <div>
                            <h1 class="text-2xl font-medium tracking-tight text-black sm:text-4xl">
                                Fönsterputsning av trapphus
                            </h1>
                        </div>
                        <div class="lg:ml-auto">
                            <h2 class="mt-4 text-lg tracking-tight text-gray-600 lg:mt-0">
                                Här kommer en kort förklaring av hur jag kan hjälpa med att putsa era trapphus.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative items-center w-full mx-auto mt-12">
                <img class="object-cover object-center w-full bg-gray-300 h-96"
                     src="{{ Vite::asset('resources/images/trapphus.jpg') }}" alt="hus">
            </div>
            <div>
                <div class="pt-12 mx-auto lg:max-w-7xl">
                    <div class="text-base text-gray-500">
                        <p class="mb-3 revealUp">
                            Som professionell fönsterputsare har jag många års erfarenhet av att rengöra fönster av
                            olika storlekar och former. Jag är stolt över att kunna erbjuda mina kunder en högkvalitativ
                            service som alltid överträffar förväntningarna.
                        </p>
                        <p>
                            Mitt mål är att lämna varje trapphus med fönster som är skinande rena och ser ut som nya.
                            Jag är övertygad om att rena fönster kan göra en stor skillnad för trapphuset och skapa en
                            välkomnande atmosfär för dess invånare och besökare.
                        </p>
                        <p class="mb-3 revealUp">
                            Jag är flexibel och kan hantera alla typer av fönsterputsjobb, oavsett storlek eller form.
                            Det är dock viktigt att notera att jag som mest kan arbeta med fönster som är upp till 6
                            meters höjd med hjälp av trappstege och stativ.
                        </p>
                        <p class="mb-3 revealUp">
                            Förutom fönsterputsning erbjuder jag även tilläggstjänster som rengöring av fönsterkarmar
                            och lister. Jag vill alltid se till att mina kunder är nöjda och lämnar aldrig ett trapphus
                            innan jag är säker på att resultatet är perfekt.
                        </p>
                        <p class="mb-3 revealUp">
                            Så om du letar efter en pålitlig och erfaren fönsterputsare för ditt trapphus, tveka inte
                            att kontakta mig! Oavsett om du är en enskild fastighetsägare eller en mindre förening så
                            hjälper jag dig gärna att få dina fönster att glänsa.
                        </p>
                        <p class="mb-3 revealUp">
                            Har ni några särskilda önskemål eller funderingar så är ni mer än välkomna att
                            <a href="{{ route('index') . '#contact' }}"
                               class="p-1 rounded border font-semibold duration-200 hover:text-gray-800 focus:outline-none focus-visible:outline-gray-600">höra
                                av er</a>.
                        </p>

                        <a href="https://karlstad.putsamer.se" target="_blank"
                           class="revealUp items-center justify-center mt-12 w-full px-6 py-2.5 text-xl text-white text-center rounded inline-flex md:w-auto bg-primary focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-cyan-500 active:bg-cyan-400 active:text-white focus-visible:outline-black">
                            Boka fönsterputs av trapphus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
