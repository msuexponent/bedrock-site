@extends('layouts.base')

@section('content')

	<div class="content">
		<div class="col-12 offset-0 col-md-8 offset-md-2">
  			@while(have_posts()) @php(the_post())
   				@include('partials/content-single-'.get_post_type())
  			@endwhile
  		</div>
  	</div>

@endsection

