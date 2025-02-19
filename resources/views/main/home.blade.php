@extends('layouts.app')
@section('title')
    <x-titles.title>Home - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
        @include('includes.basic.header')
        @include('includes.home.section1')
        @include('includes.home.section2')
        @include('includes.home.section3')
        @include('includes.home.section4')
        @include('includes.home.section5')
        @include('includes.basic.footer')
@endsection
