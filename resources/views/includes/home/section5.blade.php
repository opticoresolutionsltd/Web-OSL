<div class="bg-white">
    <h2 class="py-10 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl">Our Happy Clients</h2>
    <div class="logos border-t-2">
        <div class="logos-slide py-8">
            @for ($i = 0; $i < 15; $i++)
                <img src="{{Vite::asset('resources/images/logo/customers/alliance.svg')}}" class="h-24 scale-125 grayscale hover:grayscale-0" />
                <img src="{{Vite::asset('resources/images/logo/customers/alliance-brokerage.svg')}}" class="h-24 scale-125 grayscale hover:grayscale-0"/>
                <img src="{{Vite::asset('resources/images/logo/customers/alliance-construction.svg')}}" class="h-24 scale-125 grayscale hover:grayscale-0"/>
                <img src="{{Vite::asset('resources/images/logo/customers/alliance.svg')}}" class="h-24 scale-125 grayscale hover:grayscale-0"/>
                <img src="{{Vite::asset('resources/images/logo/customers/alliance-beverage-agro.svg')}}" class="h-24 scale-125 grayscale hover:grayscale-0"/>
                <img src="{{Vite::asset('resources/images/logo/customers/hotel-jana.svg')}}" class="h-24 scale-125 grayscale hover:grayscale-0"/>
            @endfor
        </div>
    </div>
</div>

