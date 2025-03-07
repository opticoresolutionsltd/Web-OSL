<section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="{{$attributes->get('style')}}">
    <div class="px-4 pt-28 pb-12 mx-auto max-w-screen-xl text-center md:py-36 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            {{$heading}}
        </h1>
        <p class="mb-8 text-white text-md text-justify md:text-center md:text-lg font-normal lg:text-xl sm:px-16 lg:px-48">{{$description}}</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <x-hyperlinks.anchor href="{{$hyperLink1}}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#1B4071] hover:bg-[#2C709B]">
                {{$button1Text}}
            </x-hyperlinks.anchor>
        </div>
    </div>
</section>
