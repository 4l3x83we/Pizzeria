@extends('layouts.app')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('scripts') @endpush

@section('content')
    <!-- Carousel Start -->
    @include('frontend.home.carousel')
    <!-- Carousel End -->
    <!-- Info Start -->
    @include('frontend.home.info')
    <!-- Info End -->
    <!-- About Start -->
    @include('frontend.home.about')
    <!-- About End -->
@endsection
