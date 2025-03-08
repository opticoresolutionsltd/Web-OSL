<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRouteController;
use App\Http\Controllers\PortfolioRouteController;

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
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/privacy-policy', 'privacy')->name('privacy-policy');
    Route::get('/terms-conditions', 'terms')->name('terms-conditions');
    Route::get('/request-appointment', 'requestAppointment')->name('request-appointment');
});

Route::controller(PortfolioRouteController::class)->group(function(){
    Route::get('/portfolio/logo-identity', 'logoIdentity')->name('portfolio.logo-identity');
    Route::get('/portfolio/photoshop-editing', 'photoshopEditing')->name('portfolio.photoshop-editing');
    Route::get('/portfolio/print-design', 'printDesign')->name('portfolio.print-design');
    Route::get('/portfolio/packaging-design', 'packagingDesign')->name('portfolio.packaging-design');
    Route::get('/portfolio/social-media-graphics', 'socialMediaGraphics')->name('portfolio.social-media-graphics');
});
