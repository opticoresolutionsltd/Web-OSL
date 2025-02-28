<nav class="bg-white w-full z-50 fixed top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <x-hyperlinks.anchor href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <x-images.image src="{{Vite::asset('resources/images/logo/opticore-logo-full.png')}}" class="h-8 md:h-9 lg:h-10" alt="Opticore Solutions Ltd.- Logo"/>
        </x-hyperlinks.anchor>
        <div class="flex xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse">
            <x-hyperlinks.anchor href="tel:{{config('opticore.phone_number')}}">
                <x-buttons.button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                    Call Us
                </x-buttons.button>
            </x-hyperlinks.anchor>
            <x-buttons.button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </x-buttons.button>
        </div>
        <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 xl:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 xl:space-x-5 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0 xl:bg-white">
                <x-navitems.item href="{{route('graphic-design')}}">
                    Graphic Design
                </x-navitems.item>
                <x-navitems.item href="{{route('digital-marketing')}}">
                    Digital Marketing
                </x-navitems.item>
                <x-navitems.item href="{{route('video-editing')}}">
                    Video Editing
                </x-navitems.item>
                <x-navitems.item href="{{route('3d-production')}}">
                    3D Production
                </x-navitems.item>
                <x-navitems.item href="{{route('web-development')}}">
                    Web Development
                </x-navitems.item>
                <x-navitems.item href="{{route('contact')}}">
                    Contact
                </x-navitems.item>
            </ul>
        </div>
    </div>
</nav>
