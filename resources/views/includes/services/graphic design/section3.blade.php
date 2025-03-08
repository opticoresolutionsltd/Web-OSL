<x-services.portfolio>
    <x-slot name="heading">
        Graphic Design Portfolio Showcase
    </x-slot>
    <x-slot name="description">
        Discover our latest projects and success stories
    </x-slot>
    <x-slot name="imageList">
        <a href="{{route('portfolio.logo-identity')}}"
           class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
            <img src="{{Vite::asset('resources/images/portfolio/graphic design/thumbnail/logo-identity.jpg')}}" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>

            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Logo & Identity</span>
        </a>

        <a href="{{route('portfolio.photoshop-editing')}}"
           class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
            <img src="{{Vite::asset('resources/images/portfolio/graphic design/thumbnail/photoshop-editing.jpg')}}" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>

            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Photoshop Editing</span>
        </a>

        <a href="{{route('portfolio.print-design')}}"
           class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
            <img src="{{Vite::asset('resources/images/portfolio/graphic design/thumbnail/print-design.jpg')}}" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>

            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Print Design</span>
        </a>

        <a href="{{route('portfolio.packaging-design')}}"
           class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
            <img src="{{Vite::asset('resources/images/portfolio/graphic design/thumbnail/packaging-design.jpg')}}" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>

            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Packaging Design</span>
        </a>
        <a href="{{route('portfolio.social-media-graphics')}}"
           class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
            <img src="{{Vite::asset('resources/images/portfolio/graphic design/thumbnail/social-media-design.jpg')}}" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>

            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Social Media Graphics</span>
        </a>
    </x-slot>
</x-services.portfolio>
