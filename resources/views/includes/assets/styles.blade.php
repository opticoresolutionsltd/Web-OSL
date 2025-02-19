@vite('resources/css/app.css')

@if(Route::currentRouteName() == 'home')
    @vite('resources/css/home/app.css')
@elseif(Route::currentRouteName() != 'home' && Route::currentRouteName() != 'contact')
    @vite('resources/css/services/app.css')
@endif
