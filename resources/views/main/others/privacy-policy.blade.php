@extends('layouts.app')
@section('title')
    <x-titles.title>Privacy Policy - {{config('opticore.brand_name_absolute')}}</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="{{config('opticore.brand_name')}}">
    <meta name="keywords" content="key1, key2, key3">
    <meta property="og:title" content="Privacy & Policy - {{config('opticore.brand_name')}}">
    <meta property="og:description" content="Affordable Services for All">
    <meta property="og:url" content="https://www.opticoresolutionsltd.com/privacy-policy">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{config('opticore.brand_name')}}">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.privacy.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
