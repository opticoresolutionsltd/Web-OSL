@extends('layouts.app')
@section('title')
    <x-titles.title>About Us - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.about.section1')
    @include('includes.about.section2')
    @include('includes.about.section3')
    @include('includes.about.section4')
    @include('includes.about.section5')
    @include('includes.about.section6')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
