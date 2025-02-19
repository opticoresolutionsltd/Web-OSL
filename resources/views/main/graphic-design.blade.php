@extends('layouts.app')
@section('title')
    <x-titles.title>Graphic Design - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.services.graphic design.section1')
    @include('includes.services.graphic design.section2')
    @include('includes.services.graphic design.section3')
    @include('includes.basic.footer')
@endsection
