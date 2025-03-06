@extends('layouts.app')
@section('title')
    <x-titles.title>3D Modeling - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="High-quality 3D production services, including modeling, animation, and architectural visualization.">
    <meta name="keywords" content="3D modeling, 3D animation, architectural visualization, product rendering, 3D printing">
    <link rel="canonical" href="{{config('opticore.url')}}3d-production">
    <meta property="og:title" content="3D Modeling - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Bring your ideas to life with our professional 3D modeling and animation services.">
    <meta property="og:url" content="{{config('opticore.url')}}3d-production">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:card" content="summery_large_image">
    <meta name="twitter:title" content="3D Modeling - {{config('opticore.brand_name')}}">
    <meta name="twitter:description" content="Need 3D visuals? Opticore Solution Ltd. offers professional 3D production services for various industries.">
    <meta name="twitter:site" content="@osl_opticore">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="{{config('opticore.brand_name')}}">
    <meta name="twitter:creator" content="@osl_opticore">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.3d production.section1');
    @include('includes.services.3d production.section2');
    @include('includes.services.3d production.section3');
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
