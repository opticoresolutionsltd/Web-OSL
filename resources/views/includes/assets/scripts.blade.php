@vite('resources/js/app.js')

@if(Route::currentRouteName() == 'home')
    @vite('resources/js/home/app.js')
@endif


