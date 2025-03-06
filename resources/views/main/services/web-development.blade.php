@extends('layouts.app')
@section('title')
    <x-titles.title>Web Development - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Custom web development solutions, including e-commerce, responsive design, and corporate websites tailored to your needs.">
    <meta name="keywords" content="web development, website design, e-commerce development, responsive websites, corporate web design">
    <link rel="canonical" href="{{config('opticore.url')}}web-development">
    <meta property="og:title" content="Wed Development - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Build a professional and responsive website with Opticore Solution Ltd.'s expert web development services.">
    <meta property="og:url" content="{{config('opticore.url')}}web-development">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Web Development - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Need a website? Our custom web development solutions ensure a high-performing, user-friendly online presence.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.web development.section1')
    @include('includes.services.web development.section2')
    @include('includes.services.web development.section3')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
