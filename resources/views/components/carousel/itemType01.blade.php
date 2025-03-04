<div class="hidden duration-1000 ease-in-out bg-blue-50" data-carousel-item="{{$attributes->get('data-carousel-item')}}" >
    <div class="grid max-w-screen-xl px-4  pt-20 pb-8 mx-auto lg:gap-8 xl:gap-10 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-6">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                {{$heading}}
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                {{$description}}
            </p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-6 lg:flex scale-110 w-full">
            {{$image}}
        </div>
    </div>
</div>
