<div class="hidden duration-1000 ease-in-out @if($attributes->get('bg-color')){{$attributes->get('bg-color')}}@endif" data-carousel-item="{{$attributes->get('data-carousel-item')}}">
    <div class="grid max-w-screen-xl px-4 pt-[12%] justify-center lg:mx-auto lg:px-10 lg:gap-4 xl:gap-14 lg:py-16 lg:grid-cols-12 md:pt-[8%] lg:pt-[20%] xl:pt-[14%]">
        <div class="hidden lg:mt-0 lg:col-span-6 lg:flex scale-110 w-full">
            {{$image}}
        </div>
        <div class="mr-auto place-self-center lg:col-span-6">
            <h1 class="max-w-2xl mb-4 text-3xl font-extrabold leading-none tracking-tight text-center lg:text-left md:text-4xl lg:text-5xl xl:text-6xl">
                {{$heading}}
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 text-center lg:text-left lg:mb-8 md:text-lg lg:text-xl">
                {{$description}}
            </p>
        </div>
    </div>
</div>
