@extends('layouts.app')
@section('title')
    <x-titles.title>Appointment - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Book an appointment or submit queries for Opticore Solutions’ services. Expert consultations for video editing, digital marketing, web development, and 3D production. Quick, reliable support!">
    <meta name="keywords" content="book consultation Opticore, service inquiry, appointment booking, creative solutions query, digital marketing consultation">
    <link rel="canonical" href="{{config('opticore.url')}}faq">
    <meta property="og:title" content="FAQs' - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Schedule a consultation with Opticore Solutions Ltd. for video editing, digital marketing, web development, or 3D production. Expert support awaits!">
    <meta property="og:url" content="{{config('opticore.url')}}faq">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}.">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="FAQs' - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Need expert help? Book a consultation Now">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.appointment.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
