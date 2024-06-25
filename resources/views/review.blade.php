<x-app>
    <x-slot:title>
        Review | Summa College Het Luik
    </x-slot:title>
    <div class="bg-white h-screen p-4 text-center">
        <div class="py-8 font-bold text-2xl">
            <h1>Review {{ $sandwich->titel }}</h1>
        </div>
        <div class="flex justify-center text-start">
            <div class="bg-darkblue p-4 text-white space-y-4 w-[800px]">
                <div>
                    <h2 class="text-xl font-bold">Naam</h2>
                    <input type="text" class="text-black p-1 rounded-lg w-full">
                </div>
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="24" viewBox="0 0 120 24"
                        fill="none">
                        <path
                            d="M12 1.61804L14.2186 8.4463L14.3309 8.7918H14.6942H21.8738L16.0654 13.0119L15.7715 13.2254L15.8837 13.5709L18.1024 20.3992L12.2939 16.1791L12 15.9656L11.7061 16.1791L5.89763 20.3992L8.11627 13.5709L8.22853 13.2254L7.93464 13.0119L2.12616 8.7918H9.30583H9.6691L9.78136 8.4463L12 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                        <path
                            d="M36 1.61804L38.2186 8.4463L38.3309 8.7918H38.6942H45.8738L40.0654 13.0119L39.7715 13.2254L39.8837 13.5709L42.1024 20.3992L36.2939 16.1791L36 15.9656L35.7061 16.1791L29.8976 20.3992L32.1163 13.5709L32.2285 13.2254L31.9346 13.0119L26.1262 8.7918H33.3058H33.6691L33.7814 8.4463L36 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                        <path
                            d="M60 1.61804L62.2186 8.4463L62.3309 8.7918H62.6942H69.8738L64.0654 13.0119L63.7715 13.2254L63.8837 13.5709L66.1024 20.3992L60.2939 16.1791L60 15.9656L59.7061 16.1791L53.8976 20.3992L56.1163 13.5709L56.2285 13.2254L55.9346 13.0119L50.1262 8.7918H57.3058H57.6691L57.7814 8.4463L60 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                        <path
                            d="M84 1.61804L86.2186 8.4463L86.3309 8.7918H86.6942H93.8738L88.0654 13.0119L87.7715 13.2254L87.8837 13.5709L90.1024 20.3992L84.2939 16.1791L84 15.9656L83.7061 16.1791L77.8976 20.3992L80.1163 13.5709L80.2285 13.2254L79.9346 13.0119L74.1262 8.7918H81.3058H81.6691L81.7814 8.4463L84 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                        <path
                            d="M108 1.61804L110.219 8.4463L110.331 8.7918H110.694H117.874L112.065 13.0119L111.771 13.2254L111.884 13.5709L114.102 20.3992L108.294 16.1791L108 15.9656L107.706 16.1791L101.898 20.3992L104.116 13.5709L104.229 13.2254L103.935 13.0119L98.1262 8.7918H105.306H105.669L105.781 8.4463L108 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Review</h2>
                    <textarea name="review" id="review" class="w-full h-40 text-black p-1 rounded-lg" placeholder="Deel uw ervaring"></textarea>
                </div>
                <a href="/gerecht/{{ $sandwich->id }}">
                    <div
                        class="float-right border rounded-full w-fit flex space-x-2 bg-darkblue py-2 px-8 rounded-full text-white font-bold hover:shadow-2xl">
                        <p>Review plaatsen</p>
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
    </div>
</x-app>
