<x-app>
    <x-slot:title>
        Winkelwagen | Summa College Het Luik
    </x-slot:title>
    <div class="bg-white h-screen 2xl:mx-[10%] p-4">
        <div class="lg:absolute lg:top-[108px] xl:left-[70%] max-xl:lg:left-[664px] max-lg:mb-4">
            <div class="bg-darkblue lg:w-[328px] min-h-[200px] text-xl text-white relative">
                <h2 class="font-bold text-center py-4">Je bestelling</h2>
                <hr class="absolute left-0 right-0 border-b border-white">
                <br>
                <div class="mx-4 border-t-2">
                    <h3 class="font-bold mt-2">Totaal</h3>
                    <p>€0.00</p>
                </div>
            </div>

        </div>
        <div class="text-white text-xl bg-darkblue max-2xl:lg:w-[50%] xl:w-[70%] h-auto p-4 space-y-4 pb-20">
            <div>
                <h2>Naam</h2>
                <input type="text" class="text-black p-1 rounded-lg w-full">
            </div>
            <div>
                <h2>Email</h2>
                <input type="text" class="text-black p-1 rounded-lg w-full">
            </div>
            <div>
                <h2>Telefoon</h2>
                <input type="number" class="text-black p-1 rounded-lg w-full">
            </div>
            <div>
                <h2>Tijd</h2>
                <select name="Tijd" id="Tijd" class="text-black p-1 rounded-lg w-full">
                    <option value="11:45">11:45</option>
                    <option value="12:00">12:00</option>
                    <option value="12:15">12:15</option>
                    <option value="12:30">12:30</option>
                    <option value="12:45">12:45</option>
                    <option value="13:00">13:00</option>
                </select>
            </div>
            <div class="pt-4">
                <h2 class="font-bold">Pick up Point</h2>
                <p>Het Luik</p>
            </div>
            <a href="/betalen">
                <div
                    class="xs:float-right max-xs:text-sm max-xs:mt-8 border w-fit flex space-x-2 bg-darkblue py-2 px-8 rounded-full text-white font-bold hover:shadow-2xl">
                    <p>Bestelling plaatsen</p>
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
            </a>
        </div>
    </div>
</x-app>
