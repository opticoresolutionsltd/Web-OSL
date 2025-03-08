<section class="bg-white h-auto">
    <div class="pt-28 pb-10 px-4 mx-auto max-w-screen-xl md:pt-32 md:pb-20 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <img src="{{Vite::asset('resources/images/errors/503.png')}}" alt="Team Collaboration" class="scale-95">
            <p class="mb-4 text-2xl md:text-3xl font-light text-gray-500 ">We’re Taking a Short Break! Our service is currently unavailable as we’re performing some quick maintenance or experiencing high demand.</p>
            <p class="mb-8 text-xl md:text-2xl font-light text-gray-900">We promise it won’t take long—thank you for your patience! Please check back soon. In the meantime:</p>
            <p class="text-lg md:text-xl font-bold text-gray-900">Contact us at <x-hyperlinks.anchor href="mailto:{{config('opticore.email_address')}}" class="text-blue-600">{{config('opticore.email_address')}}</x-hyperlinks.anchor> if you need immediate assistance.</p>
            <p class="text-lg md:text-xl font-bold text-gray-900">Your experience means the world to us, and we’re working hard to make it better.</p>
        </div>
    </div>
</section>
