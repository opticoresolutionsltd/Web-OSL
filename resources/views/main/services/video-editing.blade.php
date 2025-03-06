@extends('layouts.app')
@section('title')
    <x-titles.title>Video Editing - {{config('opticore.brand_name_abosolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Get professional video editing services for YouTube, social media, ads, and more. High-quality post-production to bring your vision to life.">
    <meta name="keywords" content="video editing, motion graphics, YouTube video editing, video production, visual effects, video post-production">
    <link rel="canonical" href="{{config('opticore.url')}}video-editing">
    <meta property="og:title" content="Video Editing - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Need expert video editing? Opticore Solution Ltd. offers high-quality video editing and post-production services.">
    <meta property="og:url" content="{{config('opticore.url')}}video-editing">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Video Editing - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Professional video editing services to enhance your brand’s storytelling. Get high-quality edits for any platform.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.video editing.section1')
    @include('includes.services.video editing.section2')
    @include('includes.services.video editing.section3')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
