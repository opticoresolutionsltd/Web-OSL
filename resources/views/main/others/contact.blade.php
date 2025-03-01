@extends('layouts.app')
@section('title')
    <x-titles.title>Contact - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.contact.section1')
    @include('includes.message.float-icon');
    @include('includes.basic.footer')
@endsection
