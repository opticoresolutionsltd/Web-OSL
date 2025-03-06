@extends('layouts.app')
@section('title')
    <x-titles.title>Privacy Policy - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Read our privacy policy to understand how we handle your personal data and ensure security.">
    <meta name="keywords" content="privacy policy, data protection, Opticore Solution Ltd. privacy, user data security">
    <link rel="canonical" href="{{config('opticore.url')}}privacy-policy">
    <meta property="og:title" content="Privacy & Policy - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Your privacy matters to us. Read our privacy policy for details on data protection and security.">
    <meta property="og:url" content="{{config('opticore.url')}}privacy-policy">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="Privacy Policy - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Find out how we protect your privacy and manage your data securely.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.privacy.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
