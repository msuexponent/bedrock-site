@extends('layouts.base')

@section('content')

	<div class="content pad-top40 pad-bottom40">
		<div class="col-12 offset-0 col-md-8 offset-md-2">
			<div class="row">
	  			@while(have_posts()) @php(the_post())
	   				@include('partials/content-single-'.get_post_type())
	  			@endwhile
  			</div>
  		</div>
  	</div>

@endsection

