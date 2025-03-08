<div class="bg-white">
    <h2 class="py-10 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl">Our Happy Clients</h2>
    <div class="flex justify-center">
        <hr class="w-6/12 border-t-2 border-gray-300">
    </div>
    <div class="flex justify-center">
        <div class="w-3/4 py-4 overflow-hidden" aria-label="Customer Logo Slider">
            <div class="relative max-w-7xl mx-auto px-4">
                <div class="logo-slider overflow-hidden">
                    <div class="logo-slide-track flex space-x-8 animate-scroll">
                        @for ($i = 0; $i < 15; $i++)
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/alliance.svg')}}" alt="Company Logo 1" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/alliance-brokerage.svg')}}" alt="Company Logo 2" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/alliance-construction.svg')}}" alt="Company Logo 3" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/alliance.svg')}}" alt="Company Logo 4" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/alliance-beverage-agro.svg')}}" alt="Company Logo 5" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/hotel-jana.svg')}}" alt="Company Logo 6" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                            <div class="logo-slide flex-shrink-0 transition-all duration-300 scale-110 hover:scale-125 filter grayscale hover:grayscale-0">
                                <img src="{{Vite::asset('resources/images/logo/customers/pixelpulse.svg')}}" alt="Company Logo 6" class="h-24 w-auto object-contain" loading="lazy">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

