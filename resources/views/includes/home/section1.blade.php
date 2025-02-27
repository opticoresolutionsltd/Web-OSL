<div id="controls-carousel" class="relative w-full pt-20" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-[40svh] overflow-hidden md:h-[50svh] lg:h-[60svh]">
        <!-- Item 1 -->
        <x-carousel.itemType01 data-carousel-item="active">
            <x-slot name="heading">
                Transform Your Skills<br>into Income with<br>Opticore Solutions Ltd.
            </x-slot>
            <x-slot name="description">
                Struggling to monetize your talents or find a platform that truly values your skills? At Opticore Solutions Ltd., we understand how frustrating it can be to see your hard work go unnoticed or underpaid. That’s why we’ve created a better, faster, and smarter way to earn money—a platform where you can showcase your talent, save time, and turn your skills into income effortlessly. Whether you’re into graphic design, video editing, digital marketing, or web development, we provide everything you need to stand out and succeed.
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/TEST.gif')}}" alt="hero image"/>
            </x-slot>
        </x-carousel.itemType01>
        <!-- Item 2 -->
        <x-carousel.itemType02>
            <x-slot name="heading">
                Building digital <br>products & brands.
            </x-slot>
            <x-slot name="description">
                This free and open-source landing page template was built using the utility classes from <a href="https://tailwindcss.com" class="hover:underline">
                    Tailwind CSS</a> and based on the components from the <a href="https://flowbite.com/docs/getting-started/introduction/" class="hover:underline">
                    Flowbite Library</a> and the <a href="https://flowbite.com/blocks/" class="hover:underline">Blocks System</a>
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/g.png')}}" alt="hero image"/>
            </x-slot>
        </x-carousel.itemType02>
        <!-- Item 3 -->
        <x-carousel.itemType01>
            <x-slot name="heading">
                Building digital <br>products & brands.
            </x-slot>
            <x-slot name="description">
                This free and open-source landing page template was built using the utility classes from <a href="https://tailwindcss.com" class="hover:underline">
                    Tailwind CSS</a> and based on the components from the <a href="https://flowbite.com/docs/getting-started/introduction/" class="hover:underline">
                    Flowbite Library</a> and the <a href="https://flowbite.com/blocks/" class="hover:underline">Blocks System</a>
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/g.png')}}" alt="hero image"/>
            </x-slot>
        </x-carousel.itemType01>
        <!-- Item 4 -->
        <x-carousel.itemType02>
            <x-slot name="heading">
                Building digital <br>products & brands.
            </x-slot>
            <x-slot name="description">
                This free and open-source landing page template was built using the utility classes from <a href="https://tailwindcss.com" class="hover:underline">
                    Tailwind CSS</a> and based on the components from the <a href="https://flowbite.com/docs/getting-started/introduction/" class="hover:underline">
                    Flowbite Library</a> and the <a href="https://flowbite.com/blocks/" class="hover:underline">Blocks System</a>
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/g.png')}}" alt="hero image"/>
            </x-slot>
        </x-carousel.itemType02>
        <!-- Item 5 -->
        <x-carousel.itemType01>
            <x-slot name="heading">
                Building digital <br>products & brands.
            </x-slot>
            <x-slot name="description">
                This free and open-source landing page template was built using the utility classes from <a href="https://tailwindcss.com" class="hover:underline">
                    Tailwind CSS</a> and based on the components from the <a href="https://flowbite.com/docs/getting-started/introduction/" class="hover:underline">
                    Flowbite Library</a> and the <a href="https://flowbite.com/blocks/" class="hover:underline">Blocks System</a>
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/g.png')}}" alt="hero image"/>
            </x-slot>
        </x-carousel.itemType01>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
