{{--
  Template Name: Left Sidebar
--}}

@extends('layouts.base')

	@section('content')
		<div class="content">
		  	<div class="col-12 col-sm-9">
				@while(have_posts()) @php(the_post())
				    @include('partials.page-header')
				    @include('partials.content-page')
				@endwhile
			</div>
			<div class="hidden-xs col-sm-3">
				@include('partials.sidebar')
			</div>
		</div>
	@endsection