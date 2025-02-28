<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRouteController;

Route::controller(GuestRouteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/graphic-design', 'graphicDesign')->name('graphic-design');
    Route::get('/digital-marketing', 'digitalMarketing')->name('digital-marketing');
    Route::get('/video-editing', 'videoEditing')->name('video-editing');
    Route::get('/3d-production', '_3dProduction')->name('3d-production');
    Route::get('/web-development', 'webDevelopment')->name('web-development');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/about-us', 'about')->name('about');
});
