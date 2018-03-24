{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')
@section('content')
  @include('partials.homepage-header')
  @include('partials.features-section')
  @include('partials.photo-section')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page-homepage')
  @endwhile
  @include('partials.form-section')
@endsection
