<x-app>
    <x-slot:title>
        Summa College Het Luik
    </x-slot:title>
    <div class="bg-white max-xl:min-h-screen xl:min-h-[1050px] 2xl:mx-[10%]">
        <div class="m-4 xl:min-w-[864px] xl:w-[60%]">
            @foreach ($sandwiches as $sandwich)
                <div
                    class="max-xl:lg:w-[600px] xl:w-[49%] max-xl:lg:h-[230px] xl:h-[190px] mb-4 border-2 border-black flex p-2 @if ($sandwich->id % 2 === 0) xl:float-right @else xl:float-left @endif">
                    <div class="flex-1">
                        <a href="/gerecht/{{ $sandwich->id }}" class="space-y-2">
                            <h2 class="font-bold text-xl">{{ $sandwich->titel }}</h2>
                            <div class="flex">
                                @php
                                    $symbolen = explode(',', $sandwich->symbolen);
                                @endphp
                                @foreach ($symbolen as $symbool)
                                    <img src="{{ asset('imgs/symbolen/' . trim($symbool)) }}" alt="{{ $symbool }}"
                                        class="w-5 h-5 mr-2">
                                @endforeach
                            </div>
                            <p>{{ $sandwich->omschrijving }}</p>
                            <span class="xl:flex xl:space-x-8">
                                <p class="font-bold">Duurzaamheid: <img
                                        src="{{ asset('imgs/sterren/' . $sandwich->duurzaamheid) }}" alt="Duurzaamheid">
                                </p>
                                <p class="font-bold">Reviews: <img
                                        src="{{ asset('imgs/sterren/' . $sandwich->reviews) }}" alt="Reviews"></p>
                            </span>
                        </a>
                    </div>
                    <div class="flex flex-col justify-between items-end ml-4">
                        <img src="{{ asset('imgs/broodjes/klein/' . $sandwich->image_path) }}"
                            alt="{{ $sandwich->titel }}" class="w-24 h-auto">
                        <div
                            class="bg-darkblue py-2 px-5 rounded-full text-white font-bold mt-4 hover:shadow-2xl hover:text-gray">
                            + €{{ number_format($sandwich->prijs, 2) }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="max-lg:hidden absolute top-[108px] xl:left-[70%] max-xl:lg:left-[664px]">
            <x-bestelling></x-bestelling>
        </div>
    </div>
</x-app>
