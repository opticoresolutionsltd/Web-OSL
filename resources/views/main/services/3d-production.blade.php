@extends('layouts.app')
@section('title')
    <x-titles.title>3D Modeling - Opticore Solutions Limited</x-titles.title>
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
