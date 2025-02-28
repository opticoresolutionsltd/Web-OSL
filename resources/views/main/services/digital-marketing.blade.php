@extends('layouts.app')
@section('title')
    <x-titles.title>Digital Marketing - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.digital marketing.section1')
    @include('includes.services.digital marketing.section2')
    @include('includes.services.digital marketing.section3')
    @include('includes.basic.footer')
@endsection
