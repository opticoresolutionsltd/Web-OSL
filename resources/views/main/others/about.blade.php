@extends('layouts.app')
@section('title')
    <x-titles.title>About Us - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Learn more about Opticore Solution Ltd., our mission, and our expertise in digital services.">
    <meta name="keywords" content="about Opticore Solution Ltd., company history, digital agency, who we are">
    <link rel="canonical" href="{{config('opticore.url')}}about-us">
    <meta property="og:title" content="About Us - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Discover Opticore Solution Ltd.'s journey, mission, and expertise in digital marketing and creative solutions.">
    <meta property="og:url" content="{{config('opticore.url')}}about-us">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="About Us - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Meet the team behind Opticore Solution Ltd. and explore our passion for digital excellence.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.about.section1')
    @include('includes.about.section2')
    @include('includes.about.section3')
    @include('includes.about.section4')
    @include('includes.about.section5')
    @include('includes.about.section6')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
