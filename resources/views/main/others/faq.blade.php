@extends('layouts.app')
@section('title')
    <x-titles.title>FAQs' - Opticore Solutions Limited</x-titles.title>
@endsection
@section('meta-tags')
    <meta name="description" content="Opticore Solutions Ltd.">
    <meta name="keywords" content="key1, key2, key3">
    <meta property="og:title" content="FAQs' - Opticore Solutions Ltd.">
    <meta property="og:description" content="Affordable Services for All">
    <meta property="og:url" content="https://www.opticoresolutionsltd.com/faq">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Opticore Solutions Ltd.">
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.faq.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
