@extends('layouts.app')

@section('content')

    <section class="relative h-[13rem] md:h-[15rem]">
        <div class="jarallax relative h-[13rem] md:h-[15rem]" data-jarallax data-video-src="mp4:{{ Vite::asset('resources/images/rain.mp4') }}" style="z-index: 1">
            <div class="absolute bg-gray-900 w-full opacity-60 h-[13rem] md:h-[15rem]" style="z-index: 2;"></div>
        </div>

        <div class="custom-shape-divider-bottom-1680265275 z-10 -mb-1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
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
                                    Vad många oftast tror är att fönster är partiet som man ser ut och in genom.
                                    <br/><br/>
                                    Fönsterputsföretag däremot, liksom jag, räknar antal fönster per handtag.
                                    Om du till exempel har 1 fönster i sovrummet i 2 delar med 2 handtag,
                                    då räknar jag det som 2 fönster och inte som 1 fönster.
                                </div>

                                <a class="text-blue-500 hover:text-blue-700" data-fslightbox="balkong_sma"
                                   href="{{ Vite::asset('resources/images/fonsterguide-min.jpg') }}">Se bildexempel</a>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Gäller RUT-avdrag hos dig?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Givetvis! Alla priser på hemsidan, och i bokningssystemet räknar alla
                                    priser inkl. RUT-avdrag. Du behöver heller inte tänka på någonting,
                                    Frilans Finans som jag fakturerar igenom sköter alltihop. Detta
                                    gäller endast privatpersoner däremot, och att du inte redan har förbrukat
                                    RUT/ROT-avdrag á 50,000 kr/år. Det gäller heller inte vid dödsbo.
                                </div>
                            </li>
                            <li class="revealLeft">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        På vilka höjder arbetar du?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Jag arbetar totalt på höjder upp till ca 6 meter.<br />
                                    Utan stege eller stativ så når jag ca 2 meter.<br />
                                    Med stege eller stativ så när jag ca 3 meter.<br />
                                    Med stege och stativ når jag ca 6 meter.<br /><br />

                                    Tyvärr så har jag ingen licens för skylift, och jag får inte
                                    arbeta på högre stegar eftersom jag jobbar ensam.
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
                                    Skulle något av nedanstående uppstå när du bokat så är det väldigt enkelt att byta tid.
                                    <br /><br />

                                    <div class="bg-white mx-auto border border-gray-200" x-data="{selected:null}">
                                        <ul class="shadow-box">

                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Minusgrader och kalla vindar</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>Vid minusgrader så putsar jag inte alls.</p>
                                                        <p>Är det kallt väder ute på grund av vind och låga grader, och om du bor
                                                        i en bostad som kräver utomhusarbete så flyttas normalt putset. Dessvärre
                                                        är mina händer extremt känsliga för kyla.</p>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Regn</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>
                                                            Bor du i en bostad där arbete kräver utomhusarbete så beror det helt
                                                            på hur mycket regn det handlar om. Önskar du puts av delningsbara fönster
                                                            som går utåt så putsar jag dom ej, även om det bara duggar, detta för
                                                            att skydda fönstren.
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="relative border-b border-gray-200">

                                                <button type="button" class="w-full px-3 py-3 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                                    <div class="flex items-center justify-between font-bold">
                                                        <span>Blåsigt väder</span>
                                                        <span class="fa fa-plus-circle"></span>
                                                    </div>
                                                </button>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                                    <div class="px-3 pb-3">
                                                        <p>Är det mycket vind vid putstillfället så putsar jag ej,
                                                           då det riskerar skador på fönster och i vissa fall även mig själv.</p>
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
                                    Jag står för allt material, och det tillkommer heller ingen extra kostnad för detta.
                                </div>
                            </li>
                            <li class="revealRight">
                                <div>
                                    <p class="mt-5 text-lg font-medium leading-6 text-black">
                                        Måste jag vara hemma?
                                    </p>
                                </div>
                                <div class="mt-2 text-base text-gray-500">
                                    Absolut inte, jag är väldigt självgående, och skulle jag ha några frågor eller funderingar
                                    så kan jag ringa eller skicka ett SMS till dig.
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
                                    är kundens ansvar att se till att fönstren som ska putsas är i tillräckligt gott skick.
                                    Fönster som har synliga skador eller sprickor putsas inte alls.<br /><br />

                                    Skulle något gå sönder genom att jag mot all förmodan skulle råka välta någon prydnad eller liknande
                                    så ersätter jag det genom att köpa nytt i första hand, om inte skulle gå så har jag också ansvarsförsäkring
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
                                    Utrustningen som jag använder åstadkommer inte repor i glas, då det är speciellt utformat för detta.<br />
                                    Däremot så kan tidigare skador och repor dyka fram som varit där tidigare, men som du kanske inte sett då fönstren varit smutsiga.
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
