@extends('layouts.app')
@section('title')
    <x-titles.title>Video Editing - {{config('opticore.brand_name_abosolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="{{config('opticore.brand_name')}}">
    <meta name="keywords" content="key1, key2, key3">
    <link rel="canonical" href="{{config('opticore.url')}}video-editing">
    <meta property="og:title" content="Video Editing - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Affordable Services for All">
    <meta property="og:url" content="{{config('opticore.url')}}video-editing">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.video editing.section1')
    @include('includes.services.video editing.section2')
    @include('includes.services.video editing.section3')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
