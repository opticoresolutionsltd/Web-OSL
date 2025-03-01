@extends('layouts.app')
@section('title')
    <x-titles.title>Web Development - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.web development.section1')
    @include('includes.services.web development.section2')
    @include('includes.services.web development.section3')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
