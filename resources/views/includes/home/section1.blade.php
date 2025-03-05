<div id="controls-carousel bg-blue-50" class="relative w-full pt-28" data-carousel="slide" data-carousel-interval="5000">
    <!-- Carousel wrapper -->
    <div class="relative h-[40svh] overflow-hidden md:h-[50svh] lg:h-[60svh]">
        <!-- Item 1 -->
        <x-carousel.itemType01 data-carousel-item="active">
            <x-slot name="heading">
                Your Art, Your Income : Start Earning with Your Designs
            </x-slot>
            <x-slot name="description">
                Love creating eye-catching visuals? With Opticore Solutions Ltd., your designs don’t just impress—they make you money. Show off your talent and get paid what you truly deserve.
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/graphic-design.gif')}}" alt="Graphic Design" class="scale-150"/>
            </x-slot>
        </x-carousel.itemType01>
        <!-- Item 2 -->
        <x-carousel.itemType02>
            <x-slot name="heading">
                Turn Your Edits into Earnings : It’s Time to Shine!
            </x-slot>
            <x-slot name="description">
                Whether you’re cutting clips or crafting stories, your video skills can now bring home the cash. Join us, save time, and let your work speak for itself.
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/video-editing.gif')}}" alt="Video Editing" class="scale-150"/>
            </x-slot>
        </x-carousel.itemType02>
        <!-- Item 3 -->
        <x-carousel.itemType01>
            <x-slot name="heading">
                Help Brands Grow, While You Grow Your Bank Account
            </x-slot>
            <x-slot name="description">
                Got a knack for boosting businesses online? Use your marketing magic on our platform to earn more while making an impact that matters.
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/digital-marketing.gif')}}" alt="Digital Marketing" class="scale-150"/>
            </x-slot>
        </x-carousel.itemType01>
        <!-- Item 4 -->
        <x-carousel.itemType02>
            <x-slot name="heading">
                Build Websites, Build Your Future : Get Paid to Code
            </x-slot>
            <x-slot name="description">
                From simple sites to complex systems, your coding skills can finally pay off big time. Let us connect you with opportunities that value your hard work.
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/website-development.gif')}}" alt="Web Development" class="scale-150"/>
            </x-slot>
        </x-carousel.itemType02>
        <!-- Item 5 -->
        <x-carousel.itemType01>
            <x-slot name="heading">
                Create in 3D, Earn in Real Life : Make Your Ideas Pay Off
            </x-slot>
            <x-slot name="description">
                If you love bringing ideas to life through 3D art, it’s time to turn that passion into profit. We’ll help you showcase your work and get rewarded for it.
            </x-slot>
            <x-slot name="image">
                <x-images.image src="{{Vite::asset('resources/images/3d-editing.gif')}}" alt="3D Production" class="scale-150"/>
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
