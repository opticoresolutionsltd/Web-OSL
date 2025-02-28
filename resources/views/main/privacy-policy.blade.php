@extends('layouts.app')
@section('title')
    <x-titles.title>Privacy Policy - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.privacy.section1')
    @include('includes.basic.footer')
@endsection
