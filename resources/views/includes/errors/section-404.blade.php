<section class="bg-white h-auto">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-24 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center py-20">
            <img src="{{Vite::asset('resources/images/errors/404.png')}}" alt="Team Collaboration">
            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-5xl dark:text-white pt-10">Something's missing.</p>
            <p class="mb-10 text-2xl font-light text-gray-500">Oops! We seem to have taken a wrong turn. The page you’re looking for might have moved, vanished, or never existed. But don't worry, all roads lead back home!</p>
            <p class="text-xl font-light text-gray-900 ">This page will automatically redirect you to home page within 10 seconds. If it doesn't, <x-hyperlinks.anchor href="{{route('home')}}" class="text-blue-600">click here.</x-hyperlinks.anchor></p>
        </div>
    </div>
</section>
