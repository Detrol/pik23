@extends('layouts.app')

@section('content')

    <section class="relative h-[10rem]">
        <div class="jarallax relative h-[10rem]" data-jarallax
             data-video-src="mp4:{{ Vite::asset('resources/images/rain.mp4') }}" style="z-index: 1">
            <div class="absolute bg-gray-900 w-full opacity-60 h-[10rem]" style="z-index: 2;"></div>
        </div>

        <div class="custom-shape-divider-bottom-1680265275 z-10">
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

    <section class="bg-white">
        <div class="relative w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">

            <div class="grid grid-cols-1 gap-8 xl:mt-12 xl:gap-12 lg:grid-cols-2">
                <div>
                    <div class="max-w-2xl">
                        <h1 class="text-4xl text-black">
                            Priser
                        </h1>
                        <p class="max-w-2xl mt-4 text-lg tracking-tight text-gray-600 mb-4">
                            Vad kostar fönsterputs hos mig?
                        </p>
                        <div class="mb-10">
                            <p>Priser som visas gäller puts av två sidor, för fyra sidor är priset det dubbla.
                            Ensidig puts finns också som tillval och då till halva priset som står.</p>
                            <p>Företagspriser visas inom parentes.</p>
                            <p>Alla priser räknas inkl. RUT-avdrag för privatpersoner.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="max-w-2xl">
                        <div class="text-4xl text-black mb-4">
                            Hur räknas fönster?
                        </div>
                        <div class="mb-10">
                            Vad många oftast tror är ett fönster är glaset som man ser ut och in genom.
                            <br/><br/>
                            Fönsterputsföretag däremot, liksom jag, räknar antal fönster per handtag.
                            Om du till exempel har 1 fönster i sovrummet i 2 delar med 2 handtag,
                            då räknar jag det som 2 fönster och inte som 1 fönster.
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex flex-col mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <h2 class="text-xl text-black mb-2">
                    Standardfönster
                </h2>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Typ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Bredd
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Pris
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Exempel
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Små</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">0-30 cm</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">30 kr(48 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="litet"
                                           href="{{ Vite::asset('resources/images/litet.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Standard</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">30-90 cm</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">40 kr(64 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="vanligt"
                                           href="{{ Vite::asset('resources/images/vanligt.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Stora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">90-150 cm</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">50 kr(80 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="stort"
                                           href="{{ Vite::asset('resources/images/stort.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Väldigt stora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">> 150 cm</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">80 kr</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="valdigt_stort"
                                           href="{{ Vite::asset('resources/images/valdigt_stort.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Delade med panel</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">-</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">30 kr(48 kr)/glas</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="panel"
                                           href="{{ Vite::asset('resources/images/panel1.jpg') }}">Bild 1</a> /
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="panel"
                                           href="{{ Vite::asset('resources/images/panel2.jpg') }}">Bild 2</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <h2 class="text-xl text-black mb-2">
                    Spröjsade fönster
                </h2>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Typ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Putsade sidor
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Pris
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Exempel
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Glasskiva</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">En</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">13 kr(21 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="sprojs1"
                                           href="{{ Vite::asset('resources/images/sprojs.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Glasskiva</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Två</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">26 kr(42 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="sprojs2"
                                           href="{{ Vite::asset('resources/images/sprojs.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <h2 class="text-xl text-black mb-2">
                    Inglasad balkong
                </h2>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Typ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Pris
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Exempel
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Övre</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">40 kr(64 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="balkong_ovre"
                                           href="{{ Vite::asset('resources/images/balkong_ovre.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Nedre</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">50 kr(80 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Små</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">30 kr(48 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="balkong_sma"
                                           href="{{ Vite::asset('resources/images/balkong_sma.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Stora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">70 kr(112 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="balkong_stora"
                                           href="{{ Vite::asset('resources/images/balkong_stora.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <h2 class="text-xl text-black mb-2">
                    Inglasad altan
                </h2>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Typ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Pris
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Exempel
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Stora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">50 kr(80 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="altan_stora"
                                           href="{{ Vite::asset('resources/images/altan_stora.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Små</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">40 kr(64 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="altan_sma"
                                           href="{{ Vite::asset('resources/images/altan_sma.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Delade</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">60 kr(96 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" data-fslightbox="altan_delade"
                                           href="{{ Vite::asset('resources/images/altan_delade.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Väldigt stora(> 90cm)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">60 kr(96 kr)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700"
                                           data-fslightbox="altan_valdigt_stora"
                                           href="{{ Vite::asset('resources/images/altan_valdigt_stora.jpg') }}">Bild</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <h2 class="text-xl text-black mb-2">
                    Skyltfönster
                </h2>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Typ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">MÅTT(BxH)
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Pris
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Exempel
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Små</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">1.5m x 6m</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">160 kr</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Medelstora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">2m x 6m</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">224 kr</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Stora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">3m x 6m</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">224 kr</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Stora</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">5m x 6m</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">400 kr</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        -
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
