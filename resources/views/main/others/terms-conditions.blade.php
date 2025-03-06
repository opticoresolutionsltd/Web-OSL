@extends('layouts.app')
@section('title')
    <x-titles.title>Terms & Conditions - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Read our terms and conditions to understand our service policies and legal guidelines.">
    <meta name="keywords" content="terms and conditions, Opticore Solution Ltd. policies, service terms">
    <link rel="canonical" href="{{config('opticore.url')}}terms-conditions">
    <meta property="og:title" content="Terms & Conditions - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Familiarize yourself with our terms and conditions before using our services.">
    <meta property="og:url" content="{{config('opticore.url')}}terms-conditions">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Terms & Conditions - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Learn about the terms and conditions governing our services.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.terms.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
