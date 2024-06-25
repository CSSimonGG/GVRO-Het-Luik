<x-app>
    <x-slot:title>
        Gerecht | Summa College Het Luik
    </x-slot:title>
    <div class="bg-white h-screen 2xl:mx-[10%]">
        <div class="m-4 text-xl">
            <img src="{{ asset('imgs/broodjes/groot/' . $sandwich->image_path) }}" alt="{{ $sandwich->titel }}"
                class="w-auto h-auto xs:max-w-[400px]">
            <div class="space-y-4 max-w-[600px]">
                <h2 class="font-bold text-2xl">{{ $sandwich->titel }}</h2>
                <div class="flex">
                    @php
                        $symbolen = explode(',', $sandwich->symbolen);
                    @endphp
                    @foreach ($symbolen as $symbool)
                        <img src="{{ asset('imgs/symbolen/' . trim($symbool)) }}" alt="{{ $symbool }}"
                            class="w-7 h-7 mr-2">
                    @endforeach
                </div>
                <p>{{ $sandwich->omschrijving }}</p>
                <div class="flex items-center">
                    <div class="flex-1 sm:flex sm:space-x-8">
                        <p class="font-bold">Duurzaamheid: <img
                                src="{{ asset('imgs/sterren/' . $sandwich->duurzaamheid) }}" alt="Duurzaamheid"></p>
                        <p class="font-bold">Reviews: <img src="{{ asset('imgs/sterren/' . $sandwich->reviews) }}"
                                alt="Reviews"></p>
                    </div>
                    <div
                        class="bg-darkblue py-2 px-5 rounded-full text-white font-bold ml-4 hover:shadow-2xl hover:text-gray">
                        + €{{ number_format($sandwich->prijs, 2) }}
                    </div>
                </div>
                <div class="flex flex-col justify-between max-sm:items-end sm:items-start">
                    <div
                        class="flex space-x-2 bg-darkblue py-2 px-5 rounded-full text-white font-bold mt-4 hover:shadow-2xl">
                        <p>Plaats een review</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"
                            fill="none">
                            <path
                                d="M10 18.3332C14.6024 18.3332 18.3334 14.6022 18.3334 9.99984C18.3334 5.39746 14.6024 1.6665 10 1.6665C5.39765 1.6665 1.66669 5.39746 1.66669 9.99984C1.66669 14.6022 5.39765 18.3332 10 18.3332Z"
                                stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.08331 10H12.0833" stroke="#F8FBFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.4167 12.5L12.9167 10L10.4167 7.5" stroke="#F8FBFD" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-lg:hidden absolute top-[108px] xl:left-[70%] max-xl:lg:left-[664px]">
            <x-bestelling></x-bestelling>
        </div>
    </div>
</x-app>
