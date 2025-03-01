@extends('layouts.app')
@section('title')
    <x-titles.title>Video Editing - Opticore Solutions Limited</x-titles.title>
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
