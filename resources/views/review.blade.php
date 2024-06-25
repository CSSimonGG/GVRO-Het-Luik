<x-app>
    <x-slot:title>
        Review | Summa College Het Luik
    </x-slot:title>
    <div class="bg-white h-screen p-4 text-center">
        <div class="py-8 font-bold text-2xl">
            <h1>Review {{ $sandwich->titel }}</h1>
        </div>
        <div class="flex justify-center text-start">
            <div class="bg-darkblue p-4 text-white w-[800px]">
                <div class="pb-8">
                    <h2 class="text-xl font-bold">Naam</h2>
                    <input type="text" class="text-black p-1 rounded-lg w-full">
                </div>
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22"
                        fill="none">
                        <path class="ster"
                            d="M12 1.61804L14.2186 8.4463L14.3309 8.7918H14.6942H21.8738L16.0654 13.0119L15.7715 13.2254L15.8837 13.5709L18.1024 20.3992L12.2939 16.1791L12 15.9656L11.7061 16.1791L5.89763 20.3992L8.11627 13.5709L8.22853 13.2254L7.93464 13.0119L2.12616 8.7918H9.30583H9.6691L9.78136 8.4463L12 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22"
                        fill="none">
                        <path class="ster"
                            d="M12 1.61804L14.2186 8.4463L14.3309 8.7918H14.6942H21.8738L16.0654 13.0119L15.7715 13.2254L15.8837 13.5709L18.1024 20.3992L12.2939 16.1791L12 15.9656L11.7061 16.1791L5.89763 20.3992L8.11627 13.5709L8.22853 13.2254L7.93464 13.0119L2.12616 8.7918H9.30583H9.6691L9.78136 8.4463L12 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22"
                        fill="none">
                        <path class="ster"
                            d="M12 1.61804L14.2186 8.4463L14.3309 8.7918H14.6942H21.8738L16.0654 13.0119L15.7715 13.2254L15.8837 13.5709L18.1024 20.3992L12.2939 16.1791L12 15.9656L11.7061 16.1791L5.89763 20.3992L8.11627 13.5709L8.22853 13.2254L7.93464 13.0119L2.12616 8.7918H9.30583H9.6691L9.78136 8.4463L12 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22"
                        fill="none">
                        <path class="ster"
                            d="M12 1.61804L14.2186 8.4463L14.3309 8.7918H14.6942H21.8738L16.0654 13.0119L15.7715 13.2254L15.8837 13.5709L18.1024 20.3992L12.2939 16.1791L12 15.9656L11.7061 16.1791L5.89763 20.3992L8.11627 13.5709L8.22853 13.2254L7.93464 13.0119L2.12616 8.7918H9.30583H9.6691L9.78136 8.4463L12 1.61804Z"
                            fill="#F8FBFD" stroke="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22"
                        fill="none">
                        <path class="ster"
                            d="M12 1.61804L14.2186 8.4463L14.3309 8.7918H14.6942H21.8738L16.0654 13.0119L15.7715 13.2254L15.8837 13.5709L18.1024 20.3992L12.2939 16.1791L12 15.9656L11.7061 16.1791L5.89763 20.3992L8.11627 13.5709L8.22853 13.2254L7.93464 13.0119L2.12616 8.7918H9.30583H9.6691L9.78136 8.4463L12 1.61804Z"
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sterren = document.querySelectorAll('.ster');
        sterren.forEach((ster, index) => {
            ster.addEventListener('click', () => {
                sterren.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.add('fill-yellow');
                    } else {
                        s.classList.remove('fill-yellow');
                    }
                });
            });
        });
    });
</script>
