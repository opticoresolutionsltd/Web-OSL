@vite('resources/js/app.js')

@if(Route::currentRouteName() == 'home')
    @vite('resources/js/home/app.js')
@endif

@if(Route::currentRouteName() != 'home' && Route::currentRouteName() != 'contact')
    @vite('resources/js/services/app.js')
@endif



