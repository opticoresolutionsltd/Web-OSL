@extends('layouts.app')
@section('title')
    <x-titles.title>Digital Marketing - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Drive results with our expert digital marketing services, including SEO, PPC, social media marketing, and email campaigns.">
    <meta name="keywords" content="digital marketing, SEO, social media marketing, PPC advertising, online marketing, email marketing">
    <link rel="canonical" href="{{config('opticore.url')}}digital-marketing">
    <meta property="og:title" content="Digital Marketing - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Boost your online presence with our digital marketing solutions. From SEO to social media, we help you grow.">
    <meta property="og:url" content="{{config('opticore.url')}}digital-marketing">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Digital Marketing - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Expand your reach with Opticore Solution Ltd.'s result-driven digital marketing services.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.digital marketing.section1')
    @include('includes.services.digital marketing.section2')
    @include('includes.services.digital marketing.section3')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
