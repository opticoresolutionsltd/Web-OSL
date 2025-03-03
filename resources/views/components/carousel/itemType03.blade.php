<section class="bg-center bg-no-repeat bg-gray-50 bg-blend-multiply" style="{{$attributes->get('style')}}">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            {{$heading}}
        </h1>
        <p class="mb-8 text-lg font-normal lg:text-xl sm:px-16 lg:px-48">{{$description}}</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <x-hyperlinks.anchor href="{{$hyperLink1}}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                {{$button1Text}}
            </x-hyperlinks.anchor>
            <x-hyperlinks.anchor href="{{$hyperLink2}}" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                {{$button2Text}}
            </x-hyperlinks.anchor>
        </div>
    </div>
</section>
