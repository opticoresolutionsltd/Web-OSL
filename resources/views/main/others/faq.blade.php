@extends('layouts.app')
@section('title')
    <x-titles.title>FAQs' - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.faq.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
