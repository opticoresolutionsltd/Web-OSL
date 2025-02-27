@extends('layouts.app')
@section('title')
    <x-titles.title>Portfolio Individual - Opticore Solutions Limited</x-titles.title>
@endsection
@section('container')
    <body lang="en">
    @include('includes.basic.header')
    @include('includes.portfolio.section1')
    @include('includes.basic.footer')
@endsection
