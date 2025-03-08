<section class="bg-white h-auto">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:pt-12 lg:pb-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <img src="{{Vite::asset('resources/images/errors/500.png')}}" alt="Team Collaboration" class="scale-75">
            <p class="mb-4 text-2xl font-light text-gray-500">Oops! Something Went Wrong. We're experiencing an internal server hiccup, but don't worry—our team is already on it!</p>
            <p class="mb-4 text-xl font-light text-gray-900">We apologize for the inconvenience and appreciate your patience as we work to get things back on track. In the meantime, you can either:</p>
            <p class="text-lg font-bold text-gray-900">Go back to <x-hyperlinks.anchor href="{{route('home')}}" class="text-blue-600">homepage</x-hyperlinks.anchor>.</p>
            <p class="text-lg font-bold text-gray-900">or</p>
            <p class="mb-2 text-lg font-bold text-gray-900">Contact our support team at <x-hyperlinks.anchor href="mailto:{{config('opticore.email_address')}}" class="text-blue-600">{{config('opticore.email_address')}}</x-hyperlinks.anchor>.</p>
        </div>
    </div>
</section>
