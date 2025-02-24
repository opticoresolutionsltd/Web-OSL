<section id="portfolio" class="portfolio-section py-8 px-4 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mt-8 mb-12">
            <h2 class="text-5xl font-bold mb-4">{{$heading}}</h2>
            <p class="text-lg text-indigo-500 font-semibold">{{$description}}</p>
        </div>
        <div class="bg-white dark:bg-gray-800  py-6 sm:py-2 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    {{$imageList}}
                </div>
            </div>
        </div>
</section>
