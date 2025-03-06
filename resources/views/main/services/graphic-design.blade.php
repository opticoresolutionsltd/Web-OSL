@extends('layouts.app')
@section('title')
    <x-titles.title>Graphic Design - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Creative graphic design services, including logo design, branding, social media graphics, and marketing materials.">
    <meta name="keywords" content="graphic design, branding, logo design, social media graphics, business card design, marketing materials">
    <link rel="canonical" href="{{config('opticore.url')}}graphic-design">
    <meta property="og:title" content="Graphic Design - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Need a stunning design? Opticore Solution Ltd. provides professional graphic design services for all business needs.">
    <meta property="og:url" content="{{config('opticore.url')}}graphic-design">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Graphic Design - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Get top-notch graphic design services, from logos to branding materials. Enhance your brand identity with our expertise.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.graphic design.section1')
    @include('includes.services.graphic design.section2')
    @include('includes.services.graphic design.section3')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
