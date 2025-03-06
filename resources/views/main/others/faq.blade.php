@extends('layouts.app')
@section('title')
    <x-titles.title>FAQs' - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Find answers to commonly asked questions about our services, pricing, and work process.">
    <meta name="keywords" content="FAQ, Opticore Solution Ltd. questions, digital services FAQ, customer support">
    <link rel="canonical" href="{{config('opticore.url')}}faq">
    <meta property="og:title" content="FAQs' - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Got questions? Check our FAQ section for details on our services, pricing, and more.">
    <meta property="og:url" content="{{config('opticore.url')}}faq">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}.">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="FAQs' - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Learn more about our services with our comprehensive FAQ section.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.faq.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
