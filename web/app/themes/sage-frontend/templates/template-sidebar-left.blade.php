{{--
  Template Name: Left Sidebar
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

    @include('partials.sidebar')

@endsection