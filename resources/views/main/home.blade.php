@extends('layouts.app')
@section('title')
    <x-titles.title>{{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="{{config('opticore.brand_name')}}">
    <meta name="keywords" content="key1, key2, key3">
    <link rel="canonical" href="{{config('opticore.url')}}">
    <meta property="og:title" content="Home - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Affordable Services for All">
    <meta property="og:url" content="{{config('opticore.url')}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Affordable Services for All">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')<body lang="en">
        @include('includes.basic.header')
        @include('includes.home.section1')
        @include('includes.home.section2')
        @include('includes.home.section3')
        @include('includes.home.section4')
        @include('includes.home.section5')
        @include('includes.message.float-icon');
        @include('includes.basic.footer')
@endsection
