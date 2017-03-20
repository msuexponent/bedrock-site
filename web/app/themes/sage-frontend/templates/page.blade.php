@extends('layouts.base')

@section('content')
	<div class="content">
	  	<div class="col-12">
  			@include('partials.page-header')
			@while(have_posts()) @php(the_post())
			    @include('partials.content-page')
			@endwhile
		</div>
	</div>
@endsection
