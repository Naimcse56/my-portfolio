@extends('layouts.front')

@section('content')
    @include('sections.home')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.experience')
    @include('sections.portfolio')
    @include('sections.pricing')
    @include('sections.blog')
    @include('sections.contact')
@endsection
@push('scripts')  

@endpush
