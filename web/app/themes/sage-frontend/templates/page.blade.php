{{--
  Template Name: Default Template
--}}

@extends('layouts.base')

@section('content')
	<div class="content pad-top40 pad-bottom40">
	  	<div class="col-12">
			@while(have_posts()) @php(the_post())
				@include('partials.page-header')
			    @include('partials.content-page')
			@endwhile
		</div>
	</div>
@endsection
