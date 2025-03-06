@extends('layouts.app')
@section('title')
    <x-titles.title>{{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Opticore Solution Ltd. - Your one-stop solution for digital marketing, web development, graphic design, video editing, and 3D production. Elevate your brand today!">
    <meta name="keywords" content="digital marketing, web development, graphic design, video editing, 3D production, branding solutions">
    <link rel="canonical" href="{{config('opticore.url')}}">
    <meta property="og:title" content="Home - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Looking for creative digital solutions? Opticore Solution Ltd. provides expert web design, digital marketing, video production, and more!">
    <meta property="og:url" content="{{config('opticore.url')}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Boost your online presence with Opticore Solution Ltd.'s expert digital services in marketing, design, and video production.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')<body lang="en" class="bg-blue-100">
        @include('includes.basic.header')
        @include('includes.home.section1')
        @include('includes.home.section2')
        @include('includes.home.section3')
        @include('includes.home.section4')
        @include('includes.home.section5')
        @include('includes.message.float-icon')
        @include('includes.basic.footer')
@endsection
