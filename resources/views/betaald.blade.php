<x-app>
    <x-slot:title>
        Betaald! | Summa College Het Luik
    </x-slot:title>

    <div class="bg-white h-screen flex justify-center">
        <div class="text-center md:text-2xl max-md:text-xl space-y-5 mt-20 mx-5">
            <h1 class="font-bold md:text-5xl max-md:text-3xl">Bedankt voor uw bestelling!</h1>
            <p>Een bevestiging is verzonden naar <br>uw email</p>
            <p>Uw bestelling staat klaar om 00:00</p>
            <h2 class="font-bold md:text-3xl max-md:text-2xl">Pick up point</h2>
            <p>Het Luik</p>
            <img src="{{ asset('imgs/betaald_image.png') }}" alt="Betaald" class="max-md:w-auto mx-auto">
        </div>
    </div>
</x-app>
