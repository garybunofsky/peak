{{--
  Template Name: Locations Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.locations-header')
    @include('partials.content-page')
    @include('partials.locations-section')
  @endwhile
@endsection
