<section class="container mx-auto">
    <x-services.sectionLToR>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/59361.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Service One
        </x-slot>
        <x-slot name="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.
        </x-slot>
    </x-services.sectionLToR>

    <x-services.sectionRToL>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/4280794.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Service Two
        </x-slot>
        <x-slot name="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.
        </x-slot>
    </x-services.sectionRToL>

    <x-services.sectionLToR>
        <x-slot name="imageSrc">
            {{Vite::asset('resources/images/59361.jpg')}}
        </x-slot>
        <x-slot name="heading">
            Service Three
        </x-slot>
        <x-slot name="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.
        </x-slot>
    </x-services.sectionLToR>
</section>
