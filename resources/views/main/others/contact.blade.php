@extends('layouts.app')
@section('title')
    <x-titles.title>Contact - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Get in touch with Opticore Solution Ltd. for expert digital services in marketing, web design, and video production.">
    <meta name="keywords" content="contact Opticore Solution Ltd., digital agency contact, customer support, inquiries">
    <link rel="canonical" href="{{config('opticore.url')}}contact">
    <meta property="og:title" content="Contact - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Have a project in mind? Contact Opticore Solution Ltd. for professional digital solutions.">
    <meta property="og:url" content="{{config('opticore.url')}}contact">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Contact - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Reach out to Opticore Solution Ltd. for expert digital services. Let’s discuss your project!">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.contact.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
