@extends('layouts.app')

@section('title', 'Farhan Alfaraby | Fullstack Developer & UI/UX Designer')

@section('content')
    @include('partials.header')
    @include('partials.nav')
    @include('partials.hero')
    @include('partials.section-about')
    @include('partials.section-projects')
    @include('partials.section-experience')
    @include('partials.section-products')
    @include('partials.section-toolkit')
    @include('partials.section-contact')
    @include('partials.footer')
@endsection
