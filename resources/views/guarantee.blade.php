@extends('layouts.app')

@section('content')

    <section class="relative h-[13rem] md:h-[15rem]">
        <div class="relative" style="z-index: 0">
            <video autoplay muted class="absolute w-full object-center object-cover h-[13rem] md:h-[15rem]" style="z-index: 1">
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
            <div class="w-full mx-auto text-left">
                <div class="relative">
                    <div class="justify-center flex flex-col text-left min-h-[60vh]">
                        <h1 class="text-4xl text-black antialiased">
                            Garanti
                        </h1>
                        <h2 class="max-w-7xl mt-4 mb-10 text-lg tracking-tight text-gray-600">
                            Hos mig så har du garanti vid det oväntade
                        </h2>

                        <div class="mt-3 text-base text-gray-500">
                            <p class="mb-3">Givetvis får du garanti när jag utför jobbet hos dig, då även de bästa kan
                                råka få ränder eller missa vissa fläckar. Fönster är väldigt knepiga eftersom vissa
                                saker inte alltid syns i vissa ljus och vinklar. Du har 7 dagars garanti på arbetet och
                                du kan höra av dig om du upptäcker detta efter utfört jobb. Tänk dock på att vissa
                                fläckar kan vara skador i glaset som inte går bort.</p>

                            <p class="mb-3">En annan sak som i vissa fall kan hända är att fåglar, kanske av ren
                                djävulskap, får för sig att skita på dina fönster direkt efter att de blivit putsade.
                                Men oroa dig inte! Detta åtgärdar jag givetvis också, och i detta fall har du 14 dagar
                                på dig efter utfört arbete att utnyttja garantin.</p>

                            <p class="font-bold">
                                Om du vill utnyttja garantin kan du boka ett kundbesök via bokningssystemet och ange i
                                kommentarerna att du vill göra detta. Reseersättning kan tillkomma.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
