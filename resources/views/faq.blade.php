@extends('layouts.app')

@section('content')

    <section class="relative h-[13rem] md:h-[15rem]">
        <div class="relative" style="z-index: 0">
            <video autoplay muted class="absolute w-full object-center object-cover h-[13rem] md:h-[15rem]"
                   style="z-index: 1">
                <source src="{{ Vite::asset('resources/images/rain.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute bg-gray-900 w-full opacity-70 h-[13rem] md:h-[15rem]" style="z-index: 2;"></div>
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
        <div class="relative w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div>
                <div class="max-w-2xl">
                    <h1 class="text-4xl text-black antialiased">
                        Vanliga frågor
                    </h1>
                    <h2 class="max-w-2xl mt-4 text-lg tracking-tight text-gray-600 antialiased">
                        Allmänviktig information och frågor kunder ställer
                    </h2>
                </div>
            </div>
            <div class="w-full mx-auto mt-12 text-left min-h-[45vh]">
                <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                    <div class="mx-auto lg:max-w-7xl lg:p-0">
                        <ul role="list" class="grid grid-cols-1 gap-4 list-none md:grid-cols-2 md:gap-10 lg:gap-12">
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Hur räknas egentligen fönster?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500 mb-2">
                                    Det som många oftast tror är att fönster är den glasdel man ser ut och in
                                    genom.<br/><br/>
                                    Fönsterputsföretag, som jag, räknar däremot antal fönster utifrån antalet handtag.
                                    Om du exempelvis har ett fönster i sovrummet med två glasdelar och två handtag,
                                    räknar jag det som två fönster och inte som ett enda.
                                </div>

                                <a class="text-blue-500 hover:text-blue-700" data-fslightbox="balkong_sma"
                                   href="{{ Vite::asset('resources/images/fonsterguide-min.jpg') }}">Se bildexempel</a>
                                <br/>

                                <div class="mt-2 text-base text-gray-500">
                                    Fönster med fasta spröjs och panelrutor räknas per enskild glasskiva.
                                </div>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Gäller RUT-avdrag hos dig?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Givetvis! Alla priser på hemsidan och i bokningssystemet inkluderar RUT-avdrag. Du
                                    behöver inte heller tänka på någonting, eftersom Frilans Finans, som jag fakturerar
                                    genom, sköter alltihop. Observera dock att detta endast gäller för privatpersoner
                                    som inte redan har förbrukat RUT/ROT-avdrag på 50 000 kr per år och att det inte
                                    gäller vid dödsbo.
                                </div>
                            </li>
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        På vilka höjder arbetar du?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Jag arbetar på höjder upp till ca 6 meter. Utan stege eller stativ når jag ca 2
                                    meter, medan jag når ca 3 meter med stege eller stativ. Med både stege och stativ
                                    når jag ca 6 meter. Observera att jag inte har någon licens för skylift och inte får
                                    arbeta på högre höjder eftersom jag jobbar ensam.
                                </div>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Vad gäller vid dåligt väder?
                                    </p>
                                </div>

                                <div class="mt-2 text-base text-gray-500">
                                    Det beror väldigt mycket på situation, och hur du bor.
                                    Om du har bokat och något av följande uppstår, är det mycket enkelt att byta tid.
                                    <br/><br/>

                                    <div class="bg-white mx-auto border border-gray-200" x-data="{selected:null}">
                                        <ul class="shadow-box">

                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left"
                                                        @click="selected !== 1 ? selected = 1 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Minusgrader och kalla vindar</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div
                                                    class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container1"
                                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>
                                                            Vid minusgrader putsar jag inte alls. Om det är kallt ute på
                                                            grund av vind och låga grader, och du bor i en bostad som
                                                            kräver utomhusarbete, så flyttas normalt putsningen. Tyvärr
                                                            är mina händer extremt känsliga för kyla.
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left"
                                                        @click="selected !== 2 ? selected = 2 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Regn</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div
                                                    class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container2"
                                                    x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>
                                                            Om du bor i en bostad där arbete kräver utomhusarbete beror
                                                            det helt på hur mycket regn det handlar om. Om du vill ha
                                                            putsning av delningsbara fönster som öppnas utåt, putsar jag
                                                            dem inte ens om det bara duggar, detta för att skydda
                                                            fönstren.
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left"
                                                        @click="selected !== 3 ? selected = 3 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Blåsigt väder</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div
                                                    class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container3"
                                                    x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>
                                                            Om det är mycket vind vid putstillfället putsar jag inte,
                                                            eftersom det kan orsaka skador på fönstren och i vissa fall
                                                            även på mig själv.
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>


                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left"
                                                        @click="selected !== 4 ? selected = 4 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Varma dagar</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div
                                                    class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container4"
                                                    x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>
                                                            Blir det riktigt varmt, runt 35+ grader, kan ett vanligt
                                                            arbetspass behöva flyttas på. Har du en balkong eller altan
                                                            som behöver putsas och som ligger i direkt solljus redan vid
                                                            25+ grader, kan jag neka det arbetet på plats eftersom det
                                                            blir som att arbeta i en bastu. Tänk därför på vilken tid
                                                            solen ligger på när du bokar tid.
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Vem står för materialet?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Jag står för allt material, och det tillkommer inga extra kostnader för detta.
                                </div>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Måste jag vara hemma?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Absolut inte, jag är väldigt självgående. Skulle jag ha några frågor eller
                                    funderingar så kan jag ringa eller skicka ett SMS till dig.
                                </div>
                            </li>
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Vad händer om någonting går sönder?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Glas som går sönder eller spricker gäller ingen ersättning för, då det
                                    är kundens ansvar att se till att fönstren som ska putsas är i tillräckligt gott
                                    skick.
                                    Fönster som har synliga skador eller sprickor putsas inte alls.<br/><br/>

                                    Skulle något gå sönder genom att jag mot all förmodan skulle råka välta någon
                                    prydnad eller liknande
                                    så ersätter jag det genom att köpa nytt i första hand, om inte skulle gå så har jag
                                    också ansvarsförsäkring
                                    via Frilans Finans.
                                </div>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Det är repor i glaset efter ditt besök!
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Utrustningen som jag använder åstadkommer inte repor i glas, då det är speciellt
                                    utformat för detta.<br/>
                                    Däremot så kan tidigare skador och repor dyka fram som varit där tidigare, men som
                                    du kanske inte sett då fönstren varit smutsiga.
                                </div>
                            </li>
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Vilken kvalité kan jag förvänta mig?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Kvalitet är mitt motto och vad jag brinner för. Är inte du nöjd så är inte jag
                                    nöjd.<br/>
                                    Därför kan du vara säker på att jag gör mitt absolut yttersta för att leverera bästa
                                    möjliga resultat.
                                </div>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Hur ofta ska man egentligen putsa sina fönster?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Till stor del är det upp till hur du själv vill ha det, men det rekommenderas 2
                                    gånger per år för att fönstren ska upprätthålla sin glans.<br/>
                                    Smuts som sitter för länge kan också vara svårare att få bort, och det kan istället
                                    bli dyrare för dig i längden då det kan krävas grövre medel för att få fönstren
                                    spegelklara igen.<br/><br/>

                                    Nya fönster är dessutom ännu viktigare att putsa oftare, då dessa behöver "vänja in
                                    sig", lite som en högtalare.
                                </div>
                            </li>
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Kan jag skapa en prenumeration/löpande bokningar?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    För tillfället är detta inte möjligt, men det kommer att dyka upp! Då jag är en
                                    perfektionist behöver jag vara säker på att alla uträkningar med tider och liknande
                                    stämmer, vilket endast tid kan avgöra. Det nya bokningssystemet släpptes dessutom
                                    under hösten 2022 och det behöver också testas ordentligt innan jag öppnar
                                    möjligheten för automatiska bokningar. Jag räknar med att det kan släppas tidigast
                                    hösten 2023, annars våren 2024.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
