{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')
@section('content')
  @include('partials.features-section')
  @include('partials.callout-section')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
